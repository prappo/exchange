@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact info</div>
                    <form method="POST" action="{{ url('/user/settings/save') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                                <div class="col-md-6">
                                    <input name="phone"
                                           value="{{\App\Http\Controllers\SettingsController::get('phone')}}"
                                           type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Skype</label>

                                <div class="col-md-6">
                                    <input value="{{\App\Http\Controllers\SettingsController::get('skype')}}"
                                           name="skype" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Whatsapp</label>

                                <div class="col-md-6">
                                    <input value="{{\App\Http\Controllers\SettingsController::get('whatsapp')}}"
                                           name="whatsapp" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input name="email"
                                           value="{{\App\Http\Controllers\SettingsController::get('email')}}"
                                           type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input name="address"
                                           value="{{\App\Http\Controllers\SettingsController::get('address')}}"
                                           type="text" class="form-control">


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <button id="add" type="submit" class="btn btn-block btn-success"><i
                                                class="fa fa-save"></i>
                                        Save
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Social Links</div>
                    <form method="POST" action="{{ url('/user/settings/save') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Facebook</label>

                                <div class="col-md-6">
                                    <input name="facebook"
                                           value="{{\App\Http\Controllers\SettingsController::get('facebook')}}"
                                           type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Twitter</label>

                                <div class="col-md-6">
                                    <input value="{{\App\Http\Controllers\SettingsController::get('twitter')}}"
                                           name="twitter" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Google Plus</label>

                                <div class="col-md-6">
                                    <input value="{{\App\Http\Controllers\SettingsController::get('gPlus')}}"
                                           name="gPlus" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">YouTube</label>

                                <div class="col-md-6">
                                    <input name="youtube"
                                           value="{{\App\Http\Controllers\SettingsController::get('youtube')}}"
                                           type="text" class="form-control">


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <button id="add" type="submit" class="btn btn-block btn-success"><i
                                                class="fa fa-save"></i>
                                        Save
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notice</div>
                    <form method="POST" action="{{ url('/user/settings/save') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="headerNotice" class="col-md-4 col-form-label text-md-right">Header
                                    Notice</label>

                                <div class="col-md-6">
                                    <input name="headerNotice" type="text"
                                           class="form-control"
                                           value="{{\App\Http\Controllers\SettingsController::get('headerNotice')}}">


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Notice</label>

                                <div class="col-md-6">
                                    <textarea name="notice" type="text"
                                              class="form-control">{{\App\Http\Controllers\SettingsController::get('notice')}}</textarea>


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <button id="add" type="submit" class="btn btn-block btn-success"><i
                                                class="fa fa-save"></i>
                                        Save
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Rocket Agent Number</div>
                    <form method="POST" action="{{ url('/user/settings/save') }}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="headerNotice" class="col-md-4 col-form-label text-md-right">Number</label>

                                <div class="col-md-6">
                                    <input name="rocketAgent" type="text"
                                           class="form-control"
                                           value="{{\App\Http\Controllers\SettingsController::get('rocketAgent')}}">


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <button id="add" type="submit" class="btn btn-block btn-success"><i
                                                class="fa fa-save"></i>
                                        Save
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
