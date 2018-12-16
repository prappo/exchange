@extends('layouts.site')

@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">
                <div class="row justify-content-center">
                    <div class="col-md-3"></div>
                    <div style="background: white;padding-left:40px;padding-right: 40px" class="col-md-6">
                        <div class="card">


                            <div class="card-body">
                                <br>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input id="name" type="text" placeholder="Name"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input id="email" type="email" placeholder="Your Email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input id="phone" type="text" placeholder="Your Phone Number"
                                                   class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                   name="phone" value="{{ old('phone') }}" required>

                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input placeholder="Your Password" id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input placeholder="Re-type Password" id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-block btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>

                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div style="margin-top: 5px" class="row">
                    <div class="col-md-3"></div>
                    <div style="padding: 0px" class="col-md-6"><a href="{{url('/login')}}" class="btn btn-primary btn-block" style="background: #3071B4">Login with account</a></div>
                    <div class="col-md-3"></div>
                </div>
                <br><br><br><br><br><br><br><br>
            </div>
        </div>
    </section>
@endsection
