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
                            <p>{!! \App\Http\Controllers\SettingsController::get('notice') !!}</p>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </section>


@endsection