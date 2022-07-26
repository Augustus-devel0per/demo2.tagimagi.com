<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __invoke($slug)
    {

       if($slug == 'home'){

        return view('website.home', compact('slug'));

       }elseif($slug == 'submit-a-tag-profile'){

        $form = session()->get('formdata');
        return view('website.submit-a-tag-profile', compact('slug', 'form'));

       }elseif($slug == 'verfiy-tag-profile'){

        $form = session()->get('formdata');
        return view('website.verfiy-tag-profile', compact('slug', 'form'));

       }else{

        abort(404);

       }

    }
}