<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="http://prappo.github.io">
    <meta name="description"
          content="buyselldollar.com is the trusted website for dollar buy, sell and exchange in Bangladesh. Buy &amp; Sell Dollar 100% reliable and always sufficient in site, we change all kind of virtual dollar like neteller, Skrill, Paypal, Perfect Money in Banglade.">
    <meta name="keywords"
          content="dollar buy sell in bd, online dollar buy sell in bangladesh, buy neteller dollar in bangladesh, buy and sell skrill dollar in bd, skrill dollar buy sell, dollar buy sell exchange, perfect money to bkash, bkash to neteller, paypal dollar buy sell bd">

    <title>Dollar Buy, Sell &amp; Exchange in Bangladesh | Buy Sell Dollar in BD</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/css/icofont.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/css/slidr.css')}}">
    <link rel="stylesheet" href="{{url('/css/main.css')}}">

    <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('/css/common-margin-padding.css')}}">
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>

    <script src="{{url('/js/jquery.min.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <style>
        .slider {
            margin: 0px !important;
            padding: 0px !important;
        }

        .slick-arrow {
            display: none !important;
        }

        .img-circle {
            border: 3px solid #E8E8E8;
        }

        .circle {
            border-radius: 40%;

        }

        .nva > ul > li > a:hover {

            border-width: 0px;
            border-color: rgb(0, 0, 0);
            border-style: solid;
            border-radius: 44px;
            background-image: -moz-linear-gradient(180deg, rgb(228, 98, 60) 0%, rgb(239, 152, 57) 100%);
            background-image: -webkit-linear-gradient(180deg, rgb(228, 98, 60) 0%, rgb(239, 152, 57) 100%);
            background-image: -ms-linear-gradient(180deg, rgb(228, 98, 60) 0%, rgb(239, 152, 57) 100%);
            width: 120px;
            height: auto;
            z-index: 3;
            color: white !important;
            text-align: center !important;
            padding: 7px !important;
            margin-top: 8px;

        }

        .main-content {
            min-height: 320px;
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
    </style>

    @yield('css')
</head>
<body>

<!-- header -->
<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- start : login, signup, username-->
                    <div class="col-md-5 col-xs-6">


                        <ul class="list-inline">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><b><i
                                                class="fa fa-sign-in"></i> {{ __('Login') }}</b></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><b><i
                                                    class="fa fa-edit"></i> {{ __('Register') }}</b></a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                       href="{{url('/user/profile')}}" target="_blank">
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                    </a>
                                    <b style="color:white">|</b>
                                    <a href="{{url('/user/home')}}"><i class="fa fa-home"></i> Dashboard</a>
                                    <b style="color:white">|</b>

                                    {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                    {{--</div>--}}
                                </li>
                                @endguest
                        </ul>
                        <!--<div class="" style="width:100%;height:20px;color:#fff;font-size:16px;line-height:18px;padding:10px; text-align:left; margin-left:-30px;">
                        </div>-->
                    </div>
                    <!-- end : login, signup, username-->

                    <!-- start : social icons-->
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <ul class="list-inline pull-right">
                            <li>
                                <a class="fa fa-facebook-square"
                                   href="{{\App\Http\Controllers\SettingsController::get('facebook')}}"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus-square"
                                   href="{{\App\Http\Controllers\SettingsController::get('gPlus')}}"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter-square"
                                   href="{{\App\Http\Controllers\SettingsController::get('twitter')}}"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-youtube-square"
                                   href="{{\App\Http\Controllers\SettingsController::get('youtube')}}"
                                   target="_blank"></a>
                            </li>
                        </ul>
                        <!--<div class=""
                             style="width:100%;height:20px;color:#fff;font-size:16px;line-height:18px;padding:10px; text-align:middle; margin-left:130px;">

                        </div>-->
                    </div>
                    <!-- end : social icons-->

                    <!-- start : phone numbers-->
                    <div class="col-md-5 col-xs-6 pull-right">
                        <a class="pull-right" href="#">
                            <i class="fa fa-phone ml-sm"></i> {{\App\Http\Controllers\SettingsController::get('phone')}}
                        </a>
                        <!--<span class="pull-right">
                            <div class=""
                                 style="width:100%;height:20px;color:#fff;font-size:16px;line-height:18px;padding:10px; text-align:right; margin-left:30px;">
                                <a class="fa fa-phone" href="#"> 01976800777</a>
                            </div>
                        </span>-->
                    </div>
                    <!-- end : phone numbers-->

                </div> <!-- /col-md-12-->
            </div> <!-- /row-->

            <!--</div>
            </div>-->
        </div><!-- container -->
    </nav>

    <!-- navbar -->
</header>
<!-- header -->

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
                <ul class="nav navbar-nav navbar-left">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img height="100%" src="{{url('/logo.png')}}" alt="">
                    </a>
                </ul>
                <ul class="nav navbar-nav navbar-right">


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Buy - Sell</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/home')}}">My Exchanges</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/review')}}">Give Review</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/home/history')}}">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/profile')}}">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/page/contact')}}">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</section>

@yield('content')


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="assets/slider/js/jquery-1.9.1.min.js"></script>-->
<!--<script src="--><!--assets/slider/main/bootstrap.min.js"></script>-->
<!--<script src="--><!--assets/slider/main/docs.min.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="--><!--assets/slider/main/ie10-viewport-bug-workaround.js"></script>-->

<!-- jssor slider scripts-->
<!--<script type="text/javascript" src="--><!--assets/slider/js/jssor.slider.min.js"></script>-->

<!-- footer -->
<footer id="footer" class="clearfix">
    <!-- footer-top -->
    <div style="background: #0FAADC;color: white" class="row">
        <div class="col-md-12">
            <div style="padding-top: 20px;padding-left: 10%;padding-bottom: 30px;" class="col-md-4">
                <p><b><h3>Quick Links</h3></b></p>
                <ul>
                    {{--<li><a href="#"><h4>Buy-Sell</h4></a></li>--}}
                    {{--<li><a href="#"><h4>Testimonials</h4></a></li>--}}
                    {{--<li><a href="#"><h4>Affliate</h4></a></li>--}}
                    @foreach(\App\Page::where('position','Bottom Left')->get() as $page)
                        <li><a href="{{url('/page')}}/{{$page->id}}"><h4>{{$page->title}}</h4></a></li>

                    @endforeach
                </ul>
            </div>
            <div style="padding-top: 20px;padding-left: 10%;padding-bottom: 30px;" class="col-md-4">
                <p><b><h3>Terms & Support</h3></b></p>
                <ul>
                    {{--<li><a href="#"><h4>Frequently Asked Questions</h4></a></li>--}}
                    {{--<li><a href="#"><h4>Terms Of Services</h4></a></li>--}}
                    {{--<li><a href="#"><h4>Privacy Policy</h4></a></li>--}}
                    @foreach(\App\Page::where('position','Bottom Middle')->get() as $page)
                        <li><a href="{{url('/page')}}/{{$page->id}}"><h4>{{$page->title}}</h4></a></li>

                    @endforeach
                </ul>
            </div>

            <div style="padding-top: 20px;padding-left: 10%;padding-bottom: 30px;" class="col-md-4">
                <p><b><h3>Language</h3></b></p>
                <ul>
                    {{--<li><a href="#"><h4>English</h4></a></li>--}}
                    {{--<li><a href="#"><h4>About</h4></a></li>--}}
                    {{--<li><a href="#"><h4>Contact</h4></a></li>--}}
                    @foreach(\App\Page::where('position','Bottom Right')->get() as $page)
                        <li><a href="{{url('/page')}}/{{$page->id}}"><h4>{{$page->title}}</h4></a></li>

                    @endforeach
                </ul>
            </div>

        </div>
    </div>


    <div class="footer-bottom clearfix text-center">
        <div class="container">
            <p>All Rights Reserved &copy; Comapny Name</p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->


<!-- JS -->

<script src="{{url('/js/owl.carousel.min.js')}}"></script>
<script src="{{url('/js/smoothscroll.min.js')}}"></script>
<script src="{{url('/js/scrollup.min.js')}}"></script>
<script src="{{url('/js/price-range.js')}}"></script>
<script src="{{url('/js/jquery.countdown.js')}}"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="{{url('/js/custom.js')}}"></script>
@yield('js')
<script>


    if ($(window).width() < 514) {
        $('#sliders').remove();
    }

    function bit_calculator() {
        var element = $('#receive').find('option:selected');
        var element1 = $('#send').find('option:selected');
        var sendCurrency = element1.attr('data-currency');
        var receiveCurrency = element.attr('data-currency');

        var sendPurchase = element1.attr('data-purchase');
        var receivePurchase = element.attr('data-purchase');
        var result = "";
        if (sendCurrency == receiveCurrency) {
            $('#bit_amount_receive').val($('#bit_amount_send').val());
        } else if (sendCurrency == 'USD' && receiveCurrency == 'BDT') {
            result = parseInt(element1.attr('data-purchase')) * parseInt($('#bit_amount_send').val());
            $('#bit_amount_receive').val(result.toFixed(2));
        }
        else if (sendCurrency == 'BDT' && receiveCurrency == 'USD') {
            result = parseInt($('#bit_amount_send').val()) / parseInt(receivePurchase);
            $('#bit_amount_receive').val(result.toFixed(2));
        }
        else {
            result = parseInt(element.attr('data-purchase')) / parseInt($('#bit_amount_send').val());
            $('#bit_amount_receive').val(result.toFixed(2));
        }


    }


    bit_calculator();

    $('#send').on('change', function (e) {
        var element = $(this).find('option:selected');
        var purchase = element.attr("data-purchase");


        var id = $(this).val();
        $.ajax({
            url: '{{url('/package/info')}}',
            type: 'POST',
            data: {
                'id': id,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {
                $('#bit_image_send').attr('src', data['data'][0]['logo']);
                if (data['data'][0]['currency'] == 'BDT') {
                    $('#bit_amount_send').val(95);
                    $('#bit_reserve').html(data['data'][0]['reserve']);
                    bit_calculator();

                } else {
                    $('#bit_amount_send').val(1);
                    $('#bit_exchange_rate').html('1 dollar = ' + data['data'][0]['purchase'] + ' USD');
                    $('#bit_reserve').html(data['data'][0]['reserve']);
                    bit_calculator();
                }


            }

        });

        bit_calculator();
    });

    $('#receive').on('change', function (e) {
        var element = $(this).find('option:selected');
        var purchase = element.attr("data-purchase");


        var id = $(this).val();
        $.ajax({
            url: '{{url('/package/info')}}',
            type: 'POST',
            data: {
                'id': id,
                '_token': '{{csrf_token()}}'
            },
            success: function (data) {
                $('#bit_image_receive').attr('src', data['data'][0]['logo']);
                if (data['data'][0]['currency'] == 'BDT') {
                    $('#bit_amount_send').val(95);
                    bit_calculator();


                } else {
                    $('#bit_amount_send').val(1);
                    $('#bit_exchange_rate').html('1 dollar = ' + data['data'][0]['purchase'] + ' USD');
                    bit_calculator();
                }

                $('#bit_reserve').html(data['data'][0]['reserve']);
                bit_calculator();


            }

        });

        bit_calculator();
    });


    $('#exchange').click(function () {
        var element = $('#receive').find('option:selected');
        var element1 = $('#send').find('option:selected');
        var sendCurrency = element1.attr('data-currency');
        var receiveCurrency = element.attr('data-currency');

        var sendPurchase = element1.attr('data-purchase');
        var receivePurchase = element.attr('data-purchase');
        var receive = $('#bit_amount_receive').val();
        var send = $('#bit_amount_send').val();

        var reserve = $('#bit_reserve').html();


        if (sendCurrency == 'USD') {
            if (send < 10) {
                alert('The minimum amount for exchange is 10 USD');
            } else {
                additionalInfo();
            }
        } else {
            if (send < 2850) {
                alert('The minimum amount for exchange is 2850');
            } else {
                additionalInfo();
            }
        }


    });


    //    Transaction process

    function additionalInfo() {
        $('#exchangeForm').hide();
        $('#additionalInfo').show();
    }

    function confirmation() {
        $('#additionalInfo').hide();
        $('#confirmation').show();
    }

    function transactionConfirm() {
        $('#confirmation').hide();
        $('#transactionConfirm').show();
    }

    function transactionSuccess() {
        $('#exampleModal').modal();
    }

    $('#ok').click(function () {
        location.reload();
    });


</script>

</body>
</html>