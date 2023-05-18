<?php

namespace App\Http\Controllers;

use App\Models\Formdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class feedbackform extends Controller
{
    public function insertdata(Request $request){
        
        $name = $request->input('name');
        $age = $request->input('age');
        $place = $request->input('place');
        $ip = $request->ip();

        $form = new Formdata ;
        $form->name = $name;
        $form->age = $age;
        $form->place = $place;
        $form->ip = $ip;

        $form->save();
        return Redirect::to('formData');

    }

    public function getData(){
       $viewdata = Formdata::all();
       return view('viewform',['viewdata'=>$viewdata]);
    }
}
