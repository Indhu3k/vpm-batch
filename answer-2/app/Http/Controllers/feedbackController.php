<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function sendFeedback(Request $request){
        $name = $request->input('name');
        $feedback = $request->input('feedback');
        $ipaddress = $request->ip();

        $customerFeed = new Customer;

        $customerFeed->Name = $name;
        $customerFeed->Feedback = $feedback;
        $customerFeed->ipAddress = $ipaddress;

        $customerFeed->save();
        return "Feedback added Successfully";
    }
    public function showFeedbacks(){
        $customerFeeds = Customer::all();
        return view('feedbackTable',['customerFeeds'=>$customerFeeds]);
    }

}
