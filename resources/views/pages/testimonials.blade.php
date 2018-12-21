@extends('layouts.site')

@section('content')

    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">

                <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px; padding-left:15px;">
                    Latest Notice
                </h4>

                <div class="section trending-ads">
                    <div class="row">
                        <div class="col-md-12">
                            @foreach(\App\Review::all() as $review)
                                <div class="col-md-4">
                                    <p><b>{{\App\User::where('id',$review->userId)->value('name')}}</b></p>
                                    <p>{{$review->comment}}</p>
                                </div>

                            @endforeach


                        </div>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </section>




@endsection