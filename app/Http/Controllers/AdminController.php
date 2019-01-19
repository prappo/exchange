<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Packages;
use App\VerifiedAccountList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addIndex()
    {
        return view('admin.addPackage');

    }

    public function message()
    {
        if (Auth::user()->type != "admin") {
            return "permission denied";
        }
        $data = Contact::all();
        return view('admin.messages', compact('data'));
    }

    public function add(Request $request)
    {

        try {
            $package = new Packages();
            $package->name = $request->name;
            $package->account = $request->account;
            $package->logo = $request->logo;
            $package->description = $request->description;
            $package->purchase = $request->purchase;
            $package->sell = $request->sell;
            $package->reserve = $request->reserve;
            $package->available = $request->available;
            $package->currency = $request->currency;
            $package->pos = $request->pos;
            $package->save();
            return "success";

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function edit(Request $request)
    {
        try {
            Packages::where('id', $request->id)->update([
                'name' => $request->name,
                'account' => $request->account,
                'logo' => $request->logo,
                'description' => $request->description,
                'purchase' => $request->purchase,
                'sell' => $request->sell,
                'reserve' => $request->reserve,
                'currency' => $request->currency,
                'pos' => $request->pos,
                'available' => $request->available
            ]);

            return "success";

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function editPackage($id)
    {
        $data = Packages::where('id', $id)->first();
        return view('admin.editPackage', compact('data'));

    }

    public function packageList()
    {
        return view('admin.packageList');
    }

    public function settingsPage()
    {
        return view('admin.settings');
    }

    public function saveSettings(Request $request)
    {

        foreach ($request->toArray() as $key => $value) {

            if ($key != '_token') {
                SettingsController::set($key, $value);
            }
        }
        return "Saved. Go back" . "<a href='" . url('/user/settings') . "'>Click here</a>";
    }

    public function buyAccountList()
    {
        if (Auth::user()->type == "admin") {
            return view('admin.buyAccounts');
        } else {
            return "Access denied";
        }
    }

    public function addVerifiedAccount()
    {
        if (Auth::user()->type == "admin") {
            return view('admin.addAccount');
        } else {
            return "Access denied";
        }

    }

    public function addVerifiedAccountAction(Request $request)
    {
        try {
            $account = new VerifiedAccountList();
            $account->name = $request->name;
            $account->cost = $request->cost;
            $account->save();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function editVerifiedAccountList()
    {
        if (Auth::user()->type == "admin") {
            return view('admin.editAccountList');
        } else {
            return "Access denied";
        }
    }

    public function editVerifiedAccount($id)
    {
        $name = VerifiedAccountList::where('id', $id)->value('name');
        $cost = VerifiedAccountList::where('id', $id)->value('cost');

        return view('admin.editAccount', compact('name', 'cost', 'id'));
    }

    public function editVerifiedAccountAction(Request $request)
    {
        try {
            VerifiedAccountList::where('id', $request->id)->update([
                'name' => $request->name,
                'cost' => $request->cost
            ]);
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function accountList()
    {
        if (Auth::user()->type == "admin") {
            return view('admin.accountList');
        } else {
            return "Access denied";
        }
    }


}
