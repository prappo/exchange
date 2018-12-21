<?php

namespace App\Http\Controllers;

use App\Packages;
use App\Transiction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function transaction(Request $request)
    {
        try {

            $transaction = new Transiction();
            $transaction->transaction_id = $request->transaction_id;
            $transaction->userId = Auth::id();
            $transaction->send = $request->send;
            $transaction->sendAmount = $request->sendAmount;
            $transaction->receive = $request->receive;
            $transaction->receiveAmount = $request->receiveAmount;
            $transaction->amount = $request->amount;
            $transaction->payFrom = $request->payFrom;
            $transaction->confirmationNumber = $request->confirmationNumber;
            $transaction->status = 'pending';
            $transaction->process_type = 'menual';
            $transaction->save();

            echo "<div class='alert alert-success'><i class='fa fa-check'></i> Thank you! After
                            manually confirm your transaction will make the exchange.
                        </div>
                        <div class='alert alert-info'><i class='fa fa-info-circle'></i> You can track
                            your
                            exchange at this link:<br><a
                                    href='" . url('/') . "/exchange/" . $request->transaction_id . "'
                                    style='color:#fff;'>" . url('/') . "/exchange/" . $request->transaction_id . "</a>
                        </div>";


        } catch (\Exception $exception) {
            return "Something went wrong. Please contact admin <br>" . $exception->getMessage();
        }
    }

    public function track($id)
    {
        $data = Transiction::where('transaction_id', $id)->first();
        return view('track', compact('id', 'data'));
    }

    public function trackWidget(Request $request)
    {
        $id = $request->transaction_id;
        $data = Transiction::where('transaction_id', $request->transaction_id)->first();
        return view('track', compact('id', 'data'));
    }

    public static function package($id)
    {
        return Packages::where('id', $id)->first();
    }

    public function changeStatus(Request $request)
    {
        try {
            Transiction::where('transaction_id', $request->id)->update([
                'status' => $request->status
            ]);
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
