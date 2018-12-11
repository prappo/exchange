
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="exchangesoftware.info">
    <meta name="description" content="buyselldollar.com is the trusted website for dollar buy, sell and exchange in Bangladesh. Buy &amp; Sell Dollar 100% reliable and always sufficient in site, we change all kind of virtual dollar like neteller, Skrill, Paypal, Perfect Money in Banglade.">
    <meta name="keywords" content="dollar buy sell in bd, online dollar buy sell in bangladesh, buy neteller dollar in bangladesh, buy and sell skrill dollar in bd, skrill dollar buy sell, dollar buy sell exchange, perfect money to bkash, bkash to neteller, paypal dollar buy sell bd">

    <title>Dollar Buy, Sell &amp; Exchange in Bangladesh | Buy Sell Dollar in BD</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/css/icofont.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('/css/slidr.css')}}">
    <link rel="stylesheet" href="{{url('/css/main.css')}}">
    <link id="preset" rel="stylesheet" href="{{url('/css/presets/preset2.css')}}">
    <link rel="stylesheet" href="{{url('/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('/css/common-margin-padding.css')}}">
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>

    <script src="{{url('/js/jquery.min.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>


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
                                <a class="nav-link" href="{{ route('login') }}"><b><i class="fa fa-sign-in"></i> {{ __('Login') }}</b></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><b><i class="fa fa-edit"></i> {{ __('Register') }}</b></a>
                                </li>
                            @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
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
                                <a class="fa fa-facebook-square" href="#"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus-square" href="#"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter-square" href="#"
                                   target="_blank"></a>
                            </li>
                            <li>
                                <a class="fa fa-youtube-square"
                                   href="#"
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
                            <i class="fa fa-phone ml-sm"></i> 017XXXXXXXX
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

    <div class="container example2">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://disputebills.com"><img src="{{url('/logo.png')}}" alt="Dispute Bills">
                    </a>
                </div>

                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
    <!-- navbar -->
</header>
<!-- header -->

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



    <div class="footer-bottom clearfix text-center">
        <div class="container">
            <p>All Rights Reserved &copy; Comapny Name</p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->



<!-- JS -->
<script src="{{url('/js/modernizr.min.js')}}"></script>
<script src="{{url('/js/owl.carousel.min.js')}}"></script>
<script src="{{url('/js/smoothscroll.min.js')}}"></script>
<script src="{{url('/js/scrollup.min.js')}}"></script>
<script src="{{url('/js/price-range.js')}}"></script>
<script src="{{url('/js/jquery.countdown.js')}}"></script>
<script src="{{url('/js/custom.js')}}"></script>

</body>
</html>