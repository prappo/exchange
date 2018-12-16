<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function notice()
    {
        return view('pages.notice');
    }

    public function exchange(){
        return view('pages.exchange');
    }
}
