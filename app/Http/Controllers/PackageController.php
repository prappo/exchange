<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PackageController extends Controller
{
    public function info(Request $request)
    {
        $data = Packages::where('id', $request->id)->get();
        return Response::json(array('data' => $data));
    }
}
