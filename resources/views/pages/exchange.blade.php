@extends('layouts.site')

@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">
                <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px; padding-left:15px;">
                    Exchange
                </h4>

                <div class="section trending-ads">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="msection mt-xs">
                                <div class="row" id="bit_exchange_box">
                                    <div id="bit_exchange_results"></div>

                                    <form id="bit_exchange_form">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 hidden-xs hidden-sm">
                                                    <div style="margin-top:50px;">
                                                        <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg"
                                                             id="bit_image_send" width="72px" height="72px"
                                                             class="img-circle ">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h3><i class="fa fa-send"></i> Send</h3>

                                                    <div class="form-group">
                                                        <select id="send" class="form-control form_style_1 input-lg">
                                                            @foreach(\App\Packages::where('available','yes')->get() as $package)
                                                                <option data-purchase="{{$package->purchase}}"
                                                                        value="{{$package->id}}"
                                                                        data-currency="{{$package->currency}}">{{$package->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form_style_1 input-lg"
                                                               id="bit_amount_send"
                                                               name="bit_amount_send" value="0" onkeyup="bit_calculator();"
                                                               onkeydown="bit_calculator();">
                                                    </div>
                                                    <div class="text text-muted pull-right"
                                                         style="padding-bottom:10px;font-weight:bold;">Buy-Sell rate: <span
                                                                id="bit_exchange_rate">-</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end : send-->

                                        <!-- start : receive-->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <h3><i class="fa fa-get-pocket"></i> Receive</h3>

                                                    <div class="form-group">
                                                        <select id="receive" class="form-control form_style_1 input-lg">
                                                            @foreach(\App\Packages::where('available','yes')->get() as $p)
                                                                <option data-purchase="{{$p->purchase}}"
                                                                        data-currency="{{$p->currency}}"
                                                                        value="{{$p->id}}">{{$p->name}}</option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form_style_1 input-lg"
                                                               id="bit_amount_receive"
                                                               name="bit_amount_receive" disabled value="0">
                                                    </div>
                                                    <div class="text text-muted"
                                                         style="padding-bottom:10px;font-weight:bold;">Reserve: <span
                                                                id="bit_reserve">-</span></div>
                                                </div>
                                                <div class="col-md-3 hidden-xs hidden-sm">
                                                    <div style="margin-top:50px;">
                                                        <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg"
                                                             id="bit_image_receive"
                                                             width="72px" height="72px"
                                                             class="img-circle ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end : receive-->

                                        <div class="col-md-12">
                                            <input type="hidden" name="bit_amount_receive" id="bit_amount_receive2">
                                            <input type="hidden" name="bit_rate_from" id="bit_rate_from">
                                            <input type="hidden" name="bit_rate_to" id="bit_rate_to">
                                            <input type="hidden" name="bit_currency_from" id="bit_currency_from">
                                            <input type="hidden" name="bit_currency_to" id="bit_currency_to">
                                            <input type="hidden" id="bit_login_to_exchange" name="bit_login_to_exchange"
                                                   value="1">

                                            <input type="hidden" id="bit_ses_uid" name="bit_ses_uid" value="695">

                                            <input type="hidden" id="bit_ses_username" name="bit_ses_username" value="djpp">
                                            <input type="hidden" id="bit_ses_phone" name="bit_ses_phone"
                                                   value="01780179511">
                                            <input type="hidden" id="bit_ses_email" name="bit_ses_email"
                                                   value="prappo.prince@gmail.com">

                                            <center>
                                                <button id="exchange" type="button" class="btn btn-primary btn-lg"
                                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                            class="fa fa-refresh"></i> Exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                </button>
                                            </center>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </section>


@endsection