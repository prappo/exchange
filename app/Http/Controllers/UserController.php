<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        if (Auth::user()->type == "admin") {
            return view('admin.home');
        } else {
            return view('user.index');
        }


    }

    public function profile(){
        return view('user.profile');
    }
}
