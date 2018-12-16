@extends('layouts.site')

@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-3"></div>
                    <div style="background: white;padding-left:40px;padding-right: 40px" class="col-md-6">
                        <div class="card">
                            <br><br>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                   placeholder="Email Address"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">


                                        <div class="col-md-12">
                                            <input placeholder="Password" id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>


                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 ">
                                            <div style="padding-top:10px" class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
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
                    <div style="padding: 0px" class="col-md-6"><a href="{{url('/register')}}" class="btn btn-primary btn-block" style="background: #3071B4">Create new account</a></div>
                    <div class="col-md-3"></div>
                </div>

                <br><br><br><br><br><br><br><br>
            </div>
        </div>
        </div>
    </section>
@endsection
