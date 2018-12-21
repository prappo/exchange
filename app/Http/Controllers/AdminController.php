<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Packages;
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


}
