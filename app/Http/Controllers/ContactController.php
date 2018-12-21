<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function add(Request $request)
    {
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;
            $contact->save();
            return "success";
        } catch (\Exception $exception) {
//            return "Sorry Something went wrong, Please try again later";
            return $exception->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            Contact::where('id', $request->id)->delete();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }


}
