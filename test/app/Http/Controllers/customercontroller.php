<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class customercontroller extends Controller
{
    public function showFeedBackForm(){
        return view('cusfeedform');
    }
    public function addCusFeedback(Request $request,){
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $feedback=$request->input('feedback');
        $cus=new Customer;
        $cus->Name=$name;
        $cus->Email=$email;
        $cus->Phone=$phone;
        $cus->Feedback=$feedback;
        $cus->save();
        return "  Customer Feedbacks saved successfully";

    }
    public function showCustomerTable(){
       
        $customerList = Customer::all();
        return view('Customerlist',['customerlist'=>$customerList]);
    }
}


