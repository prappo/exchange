@extends('layouts.site')
@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <div style="padding-top:40px;padding-bottom:100px;padding-left:140px;padding-right: 140px"
                             class="ad-profile section">
                            <div id="bit_transaction_results">
                                <div class="alert alert-info"><i class="fa fa-info-circle"></i> নিচের
                                    নাম্বার/আইডিতে টাকা/ডলার পাঠান, যে নাম্বার/আইডি থেকে পাঠিয়েছেন সেই
                                    নাম্বার/আইডি নিচের ঘরে দিয়ে Confirm Transaction এ ক্লিক করুন।
                                </div>
                            </div>

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
                                    <td><span class="pull-left">Our Rocket agent details</span>
                                    </td>
                                    <td><span class="pull-right"></span></td>
                                </tr>
                                <tr>
                                    <td><span class="pull-left">Rocket Agent</span></td>
                                    <td><span id="step3account" class="pull-right">{{\App\Http\Controllers\SettingsController::get('rocketAgent')}}</span></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><br></td>
                                </tr>
                                <tr>
                                    <td><span class="pull-left">Enter payment amount</span></td>
                                    <td><span class="pull-right"><b id="step3amount"></b> {{$data->amount}} </b> </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="pull-left">Enter payment description</span>
                                    </td>
                                    <td><span class="pull-right">Exchange {{$data->accountType}}

                                                                    </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <input type="hidden" value="{{$id}}" id="id">
                                <label>Enter transaction number/batch</label>
                                <input type="text" class="form-control"
                                       id="transaction_confirmation_id"
                                       style="border: 1px solid #000000;">
                            </div>
                            <button id="finish" type="button"
                                    class="btn btn-primary btn-block">Confirm transaction
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection