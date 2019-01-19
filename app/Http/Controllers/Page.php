<?php

namespace App\Http\Controllers;

use App\BuyAccount;
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

    public function buyAccount()
    {
        return view('pages.buyAccount');
    }

    public function buyAccountAction(Request $request)
    {
        $data = $request;

        try {
            $result = new BuyAccount();
            $result->account_type = $request->accountType;
            $result->name = $request->name;
            $result->email = $request->email;
            $result->number = $request->contactNumber;
            $result->amount = $request->amount;
            $result->status = "pending";
            $result->save();
            $id = $result->id;
            return view('pages.buyAccountConfirmation', compact('data', 'id'));


        } catch (\Exception $exception) {
            return $exception->getMessage();

        }


    }

    public function buyAccountComplete(Request $request)
    {
        try {
            BuyAccount::where('id', $request->id)->update([
                'status' => 'done',
                'transaction_confirmation_id' => $request->transaction_confirmation_id
            ]);
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }


    public function page($id)
    {
        $content = \App\Page::where('id', $id)->value('content');
        return view('page', compact('content'));
    }
}
