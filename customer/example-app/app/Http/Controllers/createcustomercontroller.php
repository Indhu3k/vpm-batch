<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class createcustomercontroller extends Controller
{
    public function showCustomerForm(){
        return view('create_customer');
    }

    public function addCustomer(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $ipaddress=$request->input('ipaddress');
        $feedback=$request->input('feedback');

        $cus=new Customers;
        $cus->Name=$name;
        $cus->Email=$email;
        $cus->Password=$password;
        $cus->IpAddress=$ipaddress;
        $cus->Feedback=$feedback;

        $cus->save();
        return "customer record insert Successfully";


    }
}
