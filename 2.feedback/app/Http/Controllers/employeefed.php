<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;

class employeefed extends Controller
{
  public function viewForm(){
    return view('form');
  }
  public function InsertData(Request $request){
   $name= $request->input('name');
   $phone= $request->input('phone');
   $feedback= $request->input('feedback');
   $ip= $request->ip();

   $emp=new detail;
   $emp->Name=$name;
   $emp->Phone=$phone;
   $emp->Feedback=$feedback;
   $emp->Ipaddress=$ip;
   $emp->save();
   return "detail recived successfuly";
  }
  public function tableView(){
        $emplist=detail::all();
        return view('showemp',['emplist'=>$emplist]);
    }

  }

