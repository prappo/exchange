<?php

namespace App\Http\Controllers;

use App\Setting;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * User Profile page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $phone = Auth::user()->phone;
        return view('user.profile', compact('name', 'email', 'phone'));
    }

    /**
     * Update profile information
     * @param Request $re
     * @return string
     */
    public function update(Request $re)
    {
        $name = $re->name;
        $email = $re->email;
        $oldPass = $re->oldPass;
        $newPass = $re->newPass;
        $phone = $re->phone;
        if ($newPass == "") {
            User::where('email', Auth::user()->email)->update([
                'email' => $email,
                'name' => $name,
                'phone' => $phone
            ]);

            return "success";
        } else {
            if ($oldPass == "") {
                return "Please input old password";
            } else {
                if (Hash::check($oldPass, Auth::user()->password)) {
                    User::where('email', Auth::user()->email)->update([
                        'email' => $email,
                        'name' => $name,
                        'phone' => $phone,
                        'password' => bcrypt($newPass)
                    ]);
                    return "success";
                } else {
                    return "Old password didn't match";
                }
            }
        }
    }
}
