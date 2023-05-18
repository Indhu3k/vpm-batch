<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FeedBack extends Controller
{
    public function showFeedForm(Request $request){
        $ip = $request->ip();
        return view ('create_form');
    
    }
    public function addFeed(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $suggession=$request->input('suggession');
        $ip=$request->input('ip');
       
      
        $train= new Customer;

        $train->Name=$name;
        $train->Email=$email;
        $train->Phone=$phone;
        $train->Suggession=$suggession;
        $train->ip=$ip;
        

        $train->save();
        return "Trainee created successfully...";


    }
    public function showCustomerRecord(){
        $Feedlist= Customer::all();
        return view('CusDetails',  ['Feedlist'=> $Feedlist]);
    }
}
