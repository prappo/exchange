@extends('layouts.site')


@section('content')

    <!-- main -->
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">

            <!-- main-content -->
            <div class="main-content">
                @if(Auth::guest())
                    <div id="sliders" class="row">
                        <div class="col-md-12">
                            <div class="slider">
                                @foreach(\App\Slider::all() as $slider)
                                    <div>

                                        <img width="100%" height="80%"
                                             src="{{$slider->image}}">
                                    </div>

                                @endforeach

                            </div>
                        </div>
                    </div>

                @endif

                <div class="row">

                    <div class="col-md-9">


                        <!-- buy-sell | send-Rcv form-->
                        <div class="msection mt-xs">
                            <div class="row" id="bit_exchange_box">
                                <div id="bit_exchange_results"></div>
                                {{--Additional info start--}}
                                <div style="display: none" id="additionalInfo">
                                    <div class="content">
                                        <div style="padding: 10px" class="row" id="bit_exchange_box">
                                            <div id="bit_exchange_results"></div>

                                            <div class="col-md-2"></div>
                                            <div style="margin: 10px !important;" class="col-md-8">

                                                <h3><i class="fa fa-user"></i> Additional information</h3>

                                                <form id="bit_exchange_form">
\
                                                    <div class="form-group hide">
                                                        <label>Your email address</label>
                                                        <input type="text" class="form-control input-lg form_style_1"
                                                               name="bit_u_field_1" value="prappo.prince@gmail.com">
                                                    </div>

                                                    <div class="form-group">
                                                        <label id="addiName"></label>
                                                        <input type="text" class="form-control input-lg form_style_1"
                                                               id="payFrom">
                                                    </div>

                                                    <input type="hidden" name="bit_gateway_send" value="42">
                                                    <input type="hidden" name="bit_gateway_receive" value="34">
                                                    <input type="hidden" name="bit_amount_send" value="2850">
                                                    <input type="hidden" name="bit_amount_receive" value="30.00">
                                                    <input type="hidden" name="bit_rate_from" value="95">
                                                    <input type="hidden" name="bit_rate_to" value="1">
                                                    <input type="hidden" name="bit_currency_from" value="BDT">
                                                    <input type="hidden" name="bit_currency_to" value="USD">

                                                    <center>
                                                        <button type="button" class="btn btn-primary btn-lg"
                                                                onclick="confirmation();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                                    class="fa fa-refresh"></i> Process exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </button>
                                                    </center>

                                                </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- additional info end--}}

                                {{--confirmation start--}}
                                <div style="display: none" id="confirmation" class="col-md-12">
                                    <div>
                                        <table class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <h4>
                                                        <j id="step2sendName"></j>
                                                        <i class="fa fa-exchange"></i>
                                                        <j id="step2receiveName"></j>
                                                    </h4>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">This exchange is done manually by an operator. Work
                                                    time: 10.00am - 11.00pm, +6
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="pull-left"><b>Exchange ID</b></span></td>
                                                <td><span class="pull-right"><b id="exchangeId"></b></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="pull-left">Amount send</span></td>
                                                <td><span class="pull-right"><j id="step2send"></j> <j
                                                                id="step2SendCurrency"></j></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="pull-left">Amount receive</span></td>
                                                <td><span class="pull-right"><j id="step2receive"></j> <j
                                                                id="step2ReceiveCurrency"></j></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="pull-left">Your <j
                                                                id="step2receiveAcc"></j> account </span></td>
                                                <td><span class="pull-right"><p id="step2receiveFrom"></p></span></td>
                                            </tr>
                                            <tr>
                                                <td><span class="pull-left">Your email address</span></td>
                                                <td><span class="pull-right">
                                                        @if(Auth::check())
                                                            {{Auth::user()->email}}
                                                        @endif
                                                    </span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <table class="table table-striped">
                                            <tbody>

                                            <tr>
                                                <td><span class="pull-left">Total for payment</span></td>
                                                <td><span class="pull-right"><b id="total"></b> <j
                                                                id="totalCurrency"></j></span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <button type="button" class="btn btn-success btn-block"
                                                        onclick="transactionConfirm();"><i class="fa fa-check"></i>
                                                    Confirm order
                                                </button>
                                                <br>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <button type="button" class="btn btn-danger btn-block"
                                                        onclick="location.reload();"><i class="fa fa-times"></i>
                                                    Cancel order
                                                </button>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--confirmation end--}}
                                {{-- transaction confirm start --}}

                                <div style="display: none" id="transactionConfirm" class="mt-xs">
                                    <div class="row" id="bit_exchange_box">
                                        <div class="col-md-2"></div>
                                        <div style="padding:32px !important;" class="col-md-8">
                                            <div id="bit_transaction_results">
                                                <div class="alert alert-info"><i class="fa fa-info-circle"></i> নিচের
                                                    নাম্বার/আইডিতে টাকা/ডলার পাঠান, যে নাম্বার/আইডি থেকে পাঠিয়েছেন সেই
                                                    নাম্বার/আইডি নিচের ঘরে দিয়ে Confirm Transaction এ ক্লিক করুন।
                                                </div>
                                            </div>
                                            <form id="bit_confirm_transaction">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="2"><h4>Data about transfer</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">This exchange is done manually by an operator.
                                                            Work time: 10.00am - 11.00pm, +6
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><br></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="pull-left">Our <j
                                                                        id="step3receiverDetails"></j> details</span>
                                                        </td>
                                                        <td><span class="pull-right"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="pull-left"><b
                                                                        id="step3receiverName"></b></span></td>
                                                        <td><span id="step3account" class="pull-right"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><br></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="pull-left">Enter payment amount</span></td>
                                                        <td><span class="pull-right"><b id="step3amount"></b> <b
                                                                        id="step3currency"></b> </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="pull-left">Enter payment description</span>
                                                        </td>
                                                        <td><span class="pull-right">Exchange <b id="step3a"></b> <j
                                                                        id="step3c"></j>
                                                                (
                                                                @if(Auth::check())
                                                                    {{Auth::user()->id}}
                                                                @endif
                                                                )
                                                                    </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="form-group">
                                                    <label>Enter transaction number/batch</label>
                                                    <input type="text" class="form-control"
                                                           id="transaction_confirmation_id"
                                                           style="border: 1px solid #000000;">
                                                </div>
                                                <button type="button" onclick="transactionSuccess()"
                                                        class="btn btn-primary btn-block">Confirm transaction
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                {{-- Transaction confirm end--}}

                                {{-- Transaction success message --}}

                                {{--<div id="bit_transaction_results">--}}
                                {{--<div class="row">--}}
                                {{--<div class="alert alert-success"><i class="fa fa-check"></i> Thank you! After--}}
                                {{--manually confirm your transaction will make the exchange.--}}
                                {{--</div>--}}
                                {{--<div class="alert alert-info"><i class="fa fa-info-circle"></i> You can track--}}
                                {{--your--}}
                                {{--exchange at this link:<br><a--}}
                                {{--href="{{url('/')}}/exchange/02B32BD26AB2B0944CD4"--}}
                                {{--style="color:#fff;">https://www.buyselldollar.com/exchange/02B32BD26AB2B0944CD4</a>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}

                                {{-- success message end --}}

                                <div id="exchangeForm">

                                    <form>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 hidden-xs hidden-sm">
                                                    <div style="margin-top:50px;">
                                                        @foreach(\App\Packages::where('available','yes')->get() as $package)
                                                            @if($package->pos == "send" || $package->pos == "both")
                                                                <img src="{{$package->logo}}"
                                                                     id="bit_image_send" width="72px" height="72px"
                                                                     class="img-circle ">
                                                                @break
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <h3><i class="fa fa-send"></i> Send</h3>

                                                    <div class="form-group">
                                                        <select id="send" class="form-control form_style_1 input-lg">
                                                            @foreach(\App\Packages::where('available','yes')->get() as $package)
                                                                @if($package->pos == "send" || $package->pos == "both")
                                                                    <option data-purchase="{{$package->purchase}}"
                                                                            data-name="{{$package->name}}"
                                                                            value="{{$package->id}}"
                                                                            data-currency="{{$package->currency}}">{{$package->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form_style_1 input-lg"
                                                               id="bit_amount_send"
                                                               name="bit_amount_send" value="0"
                                                               onkeyup="bit_calculator();"
                                                               onkeydown="bit_calculator();">
                                                    </div>
                                                    <div class="text text-muted pull-right"
                                                         style="padding-bottom:10px;font-weight:bold;">Buy-Sell rate:
                                                        <span
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
                                                                @if($p->pos == "receive" || $p->pos == "both")
                                                                    <option data-purchase="{{$p->purchase}}"
                                                                            data-currency="{{$p->currency}}"
                                                                            data-name="{{$p->name}}" ;
                                                                            value="{{$p->id}}">{{$p->name}}</option>
                                                                @endif

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

                                                        @foreach(\App\Packages::where('available','yes')->get() as $p)
                                                            @if($p->pos == "receive" || $p->pos == "both")
                                                                <img src="{{$p->logo}}"
                                                                     id="bit_image_receive"
                                                                     width="72px" height="72px"
                                                                     class="img-circle ">
                                                                @break
                                                            @endif

                                                        @endforeach

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

                                            <input type="hidden" id="bit_ses_username" name="bit_ses_username"
                                                   value="djpp">
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
                        <!-- buy-sell | send-Rcv form-->


                        <!-- start : latest buy sell (Processing)-->
                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px; padding-left:15px;">
                            Latest Buy Sell (Processing)
                        </h4>

                        <div class="section trending-ads">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Send</th>
                                            <th class="hidden-sm hidden-md hidden-lg">Rcv</th>
                                            <th class="hidden-xs">Received</th>
                                            <th>Amount</th>
                                            <th class="">User</th>
                                            <th class="">Date</th>
                                            <th class="">Status</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach(\App\Transiction::take(20)->where('status','processing')->orderBy('created_at','desc')->get() as $transaction)

                                            <tr>
                                                <td>
                                                    <img class="img-circle"
                                                         src="{{\App\Http\Controllers\TransactionController::package($transaction->send)->logo}}"
                                                         width="20px" height="20">
                                                    <span class="hidden-xs">
                                             {{\App\Http\Controllers\TransactionController::package($transaction->send)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}                                        </span>
                                                </td>

                                                <td>
                                                    <img src="{{\App\Http\Controllers\TransactionController::package($transaction->receive)->logo}}"
                                                         width="20px" height="20">

                                                    <span class="hidden-xs">
                                             {{\App\Http\Controllers\TransactionController::package($transaction->receive)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->receive)->currency}}                                        </span>
                                                </td>

                                                <td>
                                                    {{$transaction->sendAmount}}
                                                    <span class="hidden-xs">
                                            {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}                                           </span>


                                                </td>

                                                <td class="">
                                        <span class="hidden-xs">
                                            {{\App\User::where('id',$transaction->userId)->value('name')}}</span>


                                                </td>

                                                <td class="">
                                                    <span class="label label-default">{{\Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y')}}</span>
                                                </td>

                                                <td class="">
                                                <span class="label label-info"><i
                                                            class="fa fa-clock-o"></i> Processing</span></td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end : latest buy sell (Processing)-->


                        <!-- start : latest buy sell (Completed)-->
                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px; padding-left:15px;">
                            Latest Buy Sell (Completed)
                        </h4>

                        <div class="section trending-ads">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Send</th>
                                            <th>Received</th>
                                            <th>Amount</th>
                                            <th class="">User</th>
                                            <th class="">Date</th>
                                            <th class="">Status</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        @foreach(\App\Transiction::take(20)->where('status','complete')->orderBy('created_at','desc')->get() as $transaction)

                                            <tr>
                                                <td>
                                                    <img class="img-circle"
                                                         src="{{\App\Http\Controllers\TransactionController::package($transaction->send)->logo}}"
                                                         width="20px" height="20">
                                                    <span class="hidden-xs">
                                             {{\App\Http\Controllers\TransactionController::package($transaction->send)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}                                        </span>
                                                </td>

                                                <td>
                                                    <img src="{{\App\Http\Controllers\TransactionController::package($transaction->receive)->logo}}"
                                                         width="20px" height="20">

                                                    <span class="hidden-xs">
                                             {{\App\Http\Controllers\TransactionController::package($transaction->receive)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->receive)->currency}}                                        </span>
                                                </td>

                                                <td>
                                                    {{$transaction->sendAmount}}
                                                    <span class="hidden-xs">
                                           {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}                                           </span>


                                                </td>

                                                <td class="">
                                        <span class="hidden-xs">
                                            {{\App\User::where('id',$transaction->userId)->value('name')}}       </span>


                                                </td>

                                                <td class="">
                                                    <span class="label label-default">{{\Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y')}}</span>
                                                </td>

                                                <td class="">
                                                <span class="label label-success"><i
                                                            class="fa fa-check"></i> Complete</span></td>
                                            </tr>

                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;"
                            class="mt-xs">Our Reserve</h4>

                        <div class="section">
                            <div class="row">

                                @foreach(\App\Packages::where('available','yes')->get() as $r)
                                    <div class="col-md-12" style="margin-bottom:10px;">
                                        <img src="{{$r->logo}}" width="42px"
                                             height="42px"
                                             class="img-circle  pull-left">
                                        <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">{{$r->name}}</span><br/>
											<span
                                                    class="text text-muted">{{$r->reserve}} {{$r->currency}} </span>
										</span>
                                    </div>
                                    <br><br>
                                @endforeach


                            </div>

                        </div>

                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;">
                            Today Exchange Rate</h4>

                        <div class="section">
                            <div class="section-title tab-manu">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th width="30%">Currency</th>
                                        <th width="30%">Purchase</th>
                                        <th width="30%">Sell</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\Packages::where('available','yes')->get() as $rate)
                                        <tr>
                                            <td>{{$rate->name}}</td>
                                            <td>{{$rate->purchase}}</td>
                                            <td>{{$rate->sell}}</td>

                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <br/>

                        </div>

                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px; padding-left:15px;">
                            Testimonials
                        </h4>

                        <div class="section trending-ads">
                            <div class="row">
                                <div class="col-md-12 review">
                                    @foreach(\App\Review::all() as $review)
                                        <div class="col-md-4">
                                            <p><b>{{\App\User::where('id',$review->userId)->value('name')}}</b></p>
                                            <p>{{$review->comment}}</p>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div style="padding:0px" class="col-md-1">
                                <div align="center"><img width="50px"
                                                         src="{{url('/verified.png')}}"></div>
                            </div>
                            <div style="padding:0px;margin: 0px" class="col-md-7">
                                <h2 style="text-align: center"> Buy
                                    Verified account</h2>
                            </div>
                            <div style="padding-top: 8px;margin: 0px" class="col-md-4">
                                <a href="{{url('/buy/account')}}" class="btn btn-primary btn-block"><i
                                            class="fa fa-shopping-cart"></i> Buy Now</a>
                            </div>
                        </div>




                        <!-- end : latest buy sell (Completed)-->

                    </div>
                    <!-- end : col md 9 left col-->

                    <!-- right col-->
                    <div class="col-md-3">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-9">
                        <div class="section trending-ads">

                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <div style="background: #579E3C; width: 100%;height: 100px;border-radius: 5px 5px 0px 0px;padding-top:10px">
                                    <img style="border-radius: 50%;display: block;margin-left: auto;margin-right: auto"
                                         height="90%" src="{{url('/logos/bet365.jpg')}}">
                                </div>
                                <div style="background: #08855F ; height: 20px;color: white;text-align: center"><b>Bet365
                                        Account</b></div>
                                <div style="background: #1b1e21; height: 25px;color:white;text-align: center;padding-top:5px;border-radius: 0px 0px 5px 5px">
                                    <b>1500 BDT</b></div>
                            </div>
                            <div class="col-md-4">
                                <div style="background: #7E1F67; width: 100%;height: 100px;border-radius: 5px 5px 0px 0px;padding-top:10px">
                                    <img style="border-radius: 50%;display: block;margin-left: auto;margin-right: auto"
                                         height="90%" src="{{url('/logos/skrill-logo.png')}}">
                                </div>
                                <div style="background: #552458 ; height: 20px;color: white;text-align: center"><b>Skrill
                                        Account</b></div>
                                <div style="background: #1b1e21; height: 25px;color:white;text-align: center;padding-top:5px;border-radius: 0px 0px 5px 5px">
                                    <b>1000 BDT</b></div>
                            </div>
                            <div class="col-md-4">
                                <div style="background: #8DC640; width: 100%;height: 100px;border-radius: 5px 5px 0px 0px;padding-top:10px">
                                    <img style="border-radius: 50%;display: block;margin-left: auto;margin-right: auto"
                                         height="90%" src="{{url('/logos/neteller-logo.png')}}">
                                </div>
                                <div style="background: #7ca049 ; height: 20px;color: white;text-align: center"><b>Netellar
                                        Account</b></div>
                                <div style="background: #1b1e21; height: 25px;color:white;text-align: center;padding-top:5px;border-radius: 0px 0px 5px 5px">
                                    <b>1000 BDT</b></div>
                            </div>
                        </div>

                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;">
                            Track exchange</h4>

                        <div class="section">
                            <form method="get" action="{{url('/')}}">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="exchange"
                                           placeholder="Type here exchange id">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Track
                                </button>
                            </form>
                        </div>

                        <div class="row autoplay">

                            @foreach(\App\bottomSlider::all() as $slider)
                                <div><img style="border-radius: 50%; padding: 5px;" src="{{$slider->image}}">
                                </div>
                            @endforeach


                        </div>


                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>


        <!-- ****************************************************************************************** -->


        <!-- container -->

    {{-- Modal --}}


    <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thank You</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Please wait ......</h3>
                    </div>
                    <div class="modal-footer">

                        <button id="ok" type="button" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- End Modal --}}
    </section><!-- main -->
@endsection
