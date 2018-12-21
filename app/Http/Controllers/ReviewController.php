<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addIndex()
    {
        return view('user.review');
    }

    public function addReview(){

        return view('user.addReview');
    }

    public function reviewList(){

        return view('admin.reviewList');
    }

    public function add(Request $request)
    {
        if(Review::where('userId',Auth::user()->id)->exists()){
            return "You already reviewed";
        }
        try {
            $review = new Review();
            $review->userId = Auth::user()->id;
            $review->comment = $request->comment;
            $review->save();
            return "success";
        } catch (\Exception $exception) {
            return
                $exception->getMessage();
        }
    }

    public function delete(Request $request)
    {
        try {
            Review::where('id', $request->id)->delete();
            return "success";
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
