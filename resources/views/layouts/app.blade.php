<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Money Exchange</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Money Exchange
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        @if(Auth::user()->type == "admin")

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Slider <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('/user/slider/add')}}">
                                        <i class="fa fa-plus"></i> Add Slider
                                    </a>

                                    <a class="dropdown-item" href="{{url('/user/slider/list')}}">
                                        <i class="fa fa-list"></i> Slider List
                                    </a>



                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Package <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('/user/package/add')}}">
                                        <i class="fa fa-plus"></i> Add Package
                                    </a>

                                    <a class="dropdown-item" href="{{url('/user/package/list')}}">
                                        <i class="fa fa-list"></i> Package List
                                    </a>



                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Page <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{url('/user/page/add')}}">
                                        <i class="fa fa-plus"></i> Add Page
                                    </a>

                                    <a class="dropdown-item" href="{{url('/user/page/list')}}">
                                        <i class="fa fa-edit"></i> Edit Page
                                    </a>



                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/transactions')}}">Transactions</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/review/list')}}">Reviews</a>
                            </li>

                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{url('/user/settings')}}">Settings</a>--}}
                            {{--</li>--}}

                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Buy - Sell</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/exchanges')}}">My Exchanges</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/review')}}">Give Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/user/profile')}}">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                            </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('/user/profile') }}">
                                    <i class="fa fa-user"></i> Profile
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>


</div>

<script src="{{url('/js/jquery.min.js')}}"></script>

@yield('js')
</body>
</html>
