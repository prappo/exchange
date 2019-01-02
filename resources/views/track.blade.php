@extends('layouts.site')
@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div style="background: white;padding:10px;min-height: 390px !important;" class="main-content">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!-- categorys -->
                        <div class="section">
                            <div class="row">
                                @if($ifExist == "yes")
                                    <div class="col-md-12">
                                        <div id="bit_exchange_box">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <td colspan="4">
                                                        <h2 class="text-center">
                                                            <img src="{{\App\Http\Controllers\TransactionController::package($data->send)->logo}}"
                                                                 width="36px" height="36px" class="img-circle">
                                                            <b>{{\App\Http\Controllers\TransactionController::package($data->send)->name}} {{\App\Http\Controllers\TransactionController::package($data->send)->currency}}</b>
                                                            &nbsp;&nbsp;&nbsp;<i
                                                                    class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;
                                                            <img src="{{\App\Http\Controllers\TransactionController::package($data->receive)->logo}}"
                                                                 width="36px" height="36px" class="img-circle">
                                                            <b>{{\App\Http\Controllers\TransactionController::package($data->receive)->name}}
                                                                .
                                                                {{\App\Http\Controllers\TransactionController::package($data->receive)->currency}}</b>
                                                        </h2><br>
                                                        Exchange ID: {{$id}}                                </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Send: {{$data->sendAmount}} BDT</td>
                                                    <td colspan="2">Receive: {{$data->receiveAmount}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Buy-Sell
                                                        rate: @if(\App\Http\Controllers\TransactionController::package($data->send)->currency == 'USD')
                                                            1 USD
                                                            = {{\App\Http\Controllers\TransactionController::package($data->send)->sell}}
                                                            BDT
                                                        @else
                                                            {{\App\Http\Controllers\TransactionController::package($data->send)->purchase}}
                                                            BDT
                                                            =
                                                            1 USD
                                                        @endif
                                                    </td>
                                                    <td colspan="2">Transaction ID: {{$data->confirmationNumber}}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        Process type:
                                                        <span class="label label-info">Manually</span></td>
                                                    <td colspan="2">
                                                        Status:
                                                        @if($data->status == 'cancel')
                                                            <span class="label label-danger"><i class="fa fa-times"></i> Cancel</span>

                                                        @elseif($data->status == 'pending')
                                                            <span class="label label-warning"><i
                                                                        class="fa fa-dot-circle-o"></i> Pending</span>
                                                        @elseif($data->status == 'awaiting payment')
                                                            <span class="label label-primary"><i
                                                                        class="fa fa-clock-o"></i> Awaiting Payment</span>
                                                        @elseif($data->status == 'awaiting confirmation')
                                                            <span class="label label-primary"><i
                                                                        class="fa fa-clock-o"></i> Awaiting Confirmation</span>
                                                        @elseif($data->status == 'refunded')
                                                            <span class="label label-danger"><i class="fa fa-times"></i> Refunded</span>
                                                        @elseif($data->status == 'processing')
                                                            <span class="label label-primary"><i
                                                                        class="fa fa-clock-o"></i> Processing</span>
                                                        @elseif($data->status == 'complete')
                                                            <span class="label label-success"><i
                                                                        class="fa fa-check"></i> Complete</span>
                                                        @endif

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        Created on
                                                        <span class="label label-default">{{$data->created_at}}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                @else

                                    <span class="col-md-12 alert alert-danger">Invalid Transaction ID</span>
                                @endif
                            </div>
                        </div><!-- category-ad -->


                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection