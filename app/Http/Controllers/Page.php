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

    public function exchange()
    {
        return view('pages.exchange');
    }

    public function buyAccount(){
        return view('pages.buyAccount');
    }

    public function buyAccountAction(Request $request){
        $data = $request;
        return view('pages.buyAccountConfirmation',compact('data'));
    }

    public function page($id)
    {
        $content = \App\Page::where('id',$id)->value('content');
        return view('page', compact('content'));
    }
}
