@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <h1 align="center">Forgot Password ?</h1>
                                <hr>


                            </div>
                            <div class="row form-group">
                                <div align="center" class="col-md-12">
                                    <div class="alert alert-info">
                                        Please enter your email address in from below to send you link for password rest
                                    </div>
                                    <p><b>Email Address</b></p>
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
