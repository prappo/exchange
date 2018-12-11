<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;

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

    public function add(Request $request)
    {

        try {
            $package = new Packages();
            $package->name = $request->name;
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

    public function packageList()
    {
        return view('admin.packageList');
    }

    public function edit($id)
    {
        return view('admin.editPackage', compact('id'));
    }
}
