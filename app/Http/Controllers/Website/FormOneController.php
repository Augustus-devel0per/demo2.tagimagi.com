<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormOneController extends Controller
{
    public function verifyForOneData(Request $request){

        $request->session()->PUT('formdata', $_POST);

        return back();


        

        // return view('website.verfiy.form-one');


    }
}
