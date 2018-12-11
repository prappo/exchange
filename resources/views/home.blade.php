@extends('layouts.site')


@section('content')
    <section id="main" class="clearfix home-default pt-none">
        <div class="container">
            <div class="news-scroll">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> আপনার
                    অর্ডার নিশ্চিত করার পরে, লেনদেনটি সম্পন্ন হতে ২০মিনিটের বেশি সময় লাগলে ফোন করার জন্য অনুরোধ করা
                    হলো।
                </marquee>
            </div>
        </div>
    </section>


    <section id="main" class="clearfix home-default pt-none">
        <div class="container">
            <nav class="navbar navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>

                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#"><i class="fa fa-home"></i> Buy-Sell</a></li>
                        <li><a href="#"><i class="fa fa-money"></i> Payment Proof</a></li>
                        <li><a href="#"><i class="fa fa-book"></i> Terms</a></li>

                        <li><a href="#"><i class="fa fa-file-video-o"></i> Videos</a></li>


                        <!--<li><a href="affiliate"></a></li>-->

                        <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!-- main -->
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">

            <!-- main-content -->
            <div class="main-content">

                <div class="row">

                    <div class="col-md-9">
                        <!-- buy-sell | send-Rcv form-->
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
                                                                    value="{{$package->id}}" data-currency="{{$package->currency}}">{{$package->name}}</option>
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
                                                            <option data-purchase="{{$p->purchase}}" data-currency="{{$p->currency}}"
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
                                            <button type="button" class="btn btn-primary btn-lg"
                                                    onclick="bit_exchange_step_1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i
                                                        class="fa fa-refresh"></i> Exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </button>
                                        </center>
                                    </div>
                                </form>

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

                                        <tr>
                                            <td>
                                                <img src="https://www.buyselldollar.com/uploads/1523423116_icon.png"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             Skrill. USD                                        </span>
                                            </td>

                                            <td>
                                                <img src="https://www.buyselldollar.com/uploads/1523424224_icon.png"
                                                     width="20px" height="20">

                                                <span class="hidden-xs">
                                             Rocket Personal BDT                                        </span>
                                            </td>

                                            <td>
                                                100
                                                <span class="hidden-xs">
                                            USD                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            $                                        </span>
                                            </td>

                                            <td class="">
                                        <span class="hidden-xs">
                                            djpp                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            djpp                                        </span>
                                            </td>

                                            <td class="">
                                                <span class="label label-default">10/12/2018</span></td>

                                            <td class="">
                                                <span class="label label-info"><i class="fa fa-clock-o"></i> Processing</span>
                                            </td>
                                        </tr>
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
                                            <th class="hidden-sm hidden-md hidden-lg">Rcv</th>
                                            <th class="hidden-xs">Received</th>
                                            <th>Amount</th>
                                            <th class="">User</th>
                                            <th class="">Date</th>
                                            <th class="">Status</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td>
                                                <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             Rocket Agent BDT                                        </span>
                                            </td>

                                            <td>
                                                <img src="https://www.buyselldollar.com/assets/icons/Neteller.png"
                                                     width="20px" height="20">

                                                <span class="hidden-xs">
                                             Neteller USD                                        </span>
                                            </td>

                                            <td>
                                                3850
                                                <span class="hidden-xs">
                                            BDT                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            ৳                                        </span>
                                            </td>

                                            <td class="">
                                        <span class="hidden-xs">
                                            rokun17                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            rokun                                        </span>
                                            </td>

                                            <td class="">
                                                <span class="label label-default">10/12/2018</span></td>

                                            <td class="">
                                                <span class="label label-success"><i
                                                            class="fa fa-check"></i> Complete</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://www.buyselldollar.com/assets/icons/Neteller.png"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             Neteller USD                                        </span>
                                            </td>

                                            <td>
                                                <img src="https://www.buyselldollar.com/uploads/1523424111_icon.png"
                                                     width="20px" height="20">

                                                <span class="hidden-xs">
                                             bKash Personal BDT                                        </span>
                                            </td>

                                            <td>
                                                27
                                                <span class="hidden-xs">
                                            USD                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            $                                        </span>
                                            </td>

                                            <td class="">
                                        <span class="hidden-xs">
                                            Monir1829                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            Monir                                        </span>
                                            </td>

                                            <td class="">
                                                <span class="label label-default">10/12/2018</span></td>

                                            <td class="">
                                                <span class="label label-success"><i
                                                            class="fa fa-check"></i> Complete</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             Rocket Agent BDT                                        </span>
                                            </td>

                                            <td>
                                                <img src="https://www.buyselldollar.com/assets/icons/Neteller.png"
                                                     width="20px" height="20">

                                                <span class="hidden-xs">
                                             Neteller USD                                        </span>
                                            </td>

                                            <td>
                                                4750
                                                <span class="hidden-xs">
                                            BDT                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            ৳                                        </span>
                                            </td>

                                            <td class="">
                                        <span class="hidden-xs">
                                            Manik                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            Manik                                        </span>
                                            </td>

                                            <td class="">
                                                <span class="label label-default">10/12/2018</span></td>

                                            <td class="">
                                                <span class="label label-success"><i
                                                            class="fa fa-check"></i> Complete</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://www.buyselldollar.com/assets/icons/Neteller.png"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             Neteller USD                                        </span>
                                            </td>

                                            <td>
                                                <img src="https://www.buyselldollar.com/uploads/1523424224_icon.png"
                                                     width="20px" height="20">

                                                <span class="hidden-xs">
                                             Rocket Personal BDT                                        </span>
                                            </td>

                                            <td>
                                                114
                                                <span class="hidden-xs">
                                            USD                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            $                                        </span>
                                            </td>

                                            <td class="">
                                        <span class="hidden-xs">
                                            riyad3870                                        </span>

                                                <span class="hidden-sm hidden-md hidden-lg">
                                            riyad                                        </span>
                                            </td>

                                            <td class="">
                                                <span class="label label-default">10/12/2018</span></td>

                                            <td class="">
                                                <span class="label label-success"><i
                                                            class="fa fa-check"></i> Complete</span></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="section trending-ads">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 align="center"><i style="color: green;" class="fa fa-check-circle"></i> Buy
                                        Verified account</h4>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-primary btn-block"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                </div>
                            </div>
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
                                    <b>1000 BDT</b></div>
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

                        <div class="row">
                            <br><br>
                        </div>

                        <!-- end : latest buy sell (Completed)-->

                    </div>
                    <!-- end : col md 9 left col-->

                    <!-- right col-->
                    <div class="col-md-3">
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
                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;">
                            Track exchange</h4>

                        <div class="section">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="order_id"
                                           placeholder="Type here exchange id">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"
                                        name="bit_track">Track
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ****************************************************************************************** -->


        <!-- container -->
    </section><!-- main -->
@endsection
