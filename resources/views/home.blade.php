@extends('layouts.site')

@section('test')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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

                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
            <div class="row nsection slides">
                <div class="col-md-12">
                    <!-- Jssor Slider Begin -->
                    <script type="text/javascript"
                            src="https://www.buyselldollar.com/assets/slider/js/jssor.slider-27.5.0.min.js"></script>

                    <!-- Jssor Slider End -->
                </div>

            </div>
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
                                                    <select class="form-control form_style_1 input-lg"
                                                            id="bit_gateway_send"
                                                            name="bit_gateway_send" onchange="bit_refresh('1');">
                                                        <option value="6">Neteller USD</option>
                                                        <option value="7">PM USD</option>
                                                        <option value="34">Skrill. USD</option>
                                                        <option value="42" selected>Rocket Agent BDT</option>
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
                                                    <select class="form-control form_style_1 input-lg"
                                                            id="bit_gateway_receive"
                                                            name="bit_gateway_receive" onchange="bit_refresh('2');">
                                                        <option value="6">Neteller USD</option>
                                                        <option value="7">PM USD</option>
                                                        <option value="34">Skrill. USD</option>
                                                        <option value="41">bKash Personal BDT</option>
                                                        <option value="43">Rocket Personal BDT</option>
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
                                                    <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg" id="bit_image_receive"
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
                        <!-- end : latest buy sell (Completed)-->

                    </div>
                    <!-- end : col md 9 left col-->

                    <!-- right col-->
                    <div class="col-md-3">
                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;"
                            class="mt-xs">Our Reserve</h4>

                        <div class="section">
                            <div class="row">
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/assets/icons/Neteller.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Neteller USD</span><br/>
											<span
                                                    class="text text-muted">415.47 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1513621185_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">PM USD</span><br/>
											<span
                                                    class="text text-muted">0.52 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523384114_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Payoneer USD</span><br/>
											<span
                                                    class="text text-muted">9 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523384267_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Paypal. USD</span><br/>
											<span
                                                    class="text text-muted">00 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423116_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Skrill. USD</span><br/>
											<span
                                                    class="text text-muted">0 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423318_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Payeer. USD</span><br/>
											<span
                                                    class="text text-muted">9 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423595_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Webmoney. USD</span><br/>
											<span
                                                    class="text text-muted">00 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423673_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Coinbase BTC USD</span><br/>
											<span
                                                    class="text text-muted">4 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423735_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Coinbase LTC USD</span><br/>
											<span
                                                    class="text text-muted">9 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523423803_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Coinbase ETH USD</span><br/>
											<span
                                                    class="text text-muted">9 USD </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523424054_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">bKash Agent BDT</span><br/>
											<span
                                                    class="text text-muted">1000 BDT </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523424111_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">bKash Personal BDT</span><br/>
											<span
                                                    class="text text-muted">19551.12 BDT </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://is2-ssl.mzstatic.com/image/thumb/Purple128/v4/07/6f/f6/076ff642-24dd-65d1-fc97-566422c77191/source/512x512bb.jpg"
                                         width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Rocket Agent BDT</span><br/>
											<span
                                                    class="text text-muted">1000 BDT </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1523424224_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">Rocket Personal BDT</span><br/>
											<span
                                                    class="text text-muted">46056 BDT </span>
										</span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-bottom:10px;">
                                    <img src="https://www.buyselldollar.com/uploads/1532597060_icon.png" width="42px"
                                         height="42px"
                                         class="img-circle  pull-left">
                                    <span class="pull-left" style="margin-left:5px;">
											<span
                                                    style="font-size:15px;font-weight:bold;">DBBL BDT</span><br/>
											<span
                                                    class="text text-muted">50000 BDT </span>
										</span>
                                </div>
                                <br><br>

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
                                    <tr>
                                        <td>Neteller</td>
                                        <td>88</td>
                                        <td>94</td>

                                    </tr>
                                    <tr>
                                        <td>PM</td>
                                        <td>84</td>
                                        <td>88</td>

                                    </tr>
                                    <tr>
                                        <td>Payoneer</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Paypal.</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Skrill.</td>
                                        <td>88</td>
                                        <td>95</td>

                                    </tr>
                                    <tr>
                                        <td>Payeer.</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Webmoney.</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Coinbase BTC</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Coinbase LTC</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <tr>
                                        <td>Coinbase ETH</td>
                                        <td>0</td>
                                        <td>0</td>

                                    </tr>
                                    <!--<tr>
                <td>Paypal</td>
                <td>77</td>
                <td>82</td>
            </tr>
            <tr>
                <td>Neteller</td>
                <td>86</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Skrill</td>
                <td>86</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Payza</td>
                <td>82</td>
                <td>85</td>
            </tr>
            <tr>
                <td>WebMoney</td>
                <td>80</td>
                <td>87</td>
            </tr>
            <tr>
                <td>LiteCoin</td>
                <td>83</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Bitcoin</td>
                <td>83</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Coinbase</td>
                <td>83</td>
                <td>90</td>
            </tr>
            <tr>
                <td>Payeer</td>
                <td>82</td>
                <td>89</td>
            </tr>-->
                                    </tbody>
                                </table>
                            </div>
                            <br/>

                        </div>
                        <h4 style="background-color: #0CAADC; color: #fff; margin-bottom: 0px; font-size: 14px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;">
                            Track exchange</h4>

                        <div class="section">
                            <form action="https://www.buyselldollar.com/track" method="POST">
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



                <!-- ****************************************************************************************** -->


                <!-- container -->
    </section><!-- main -->
@endsection
