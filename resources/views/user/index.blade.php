@extends('layouts.user')
@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div style="background: white;" class="main-content">
                <br>
                <div class="row">
                    <div class="ad-profile section">
                        <div class="user-profile">
                            <div class="user">
                                <h2>Hello, <a href="#" style="color:black;">{{Auth::user()->name}}</a></h2>

                            </div>


                        </div><!-- user-profile -->


                        <div class="ads-info" style="display:block;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section" style="display:block;">
                                        <h3>My Exchanges</h3>
                                        <hr>
                                        @foreach(\App\Transiction::where('userId',Auth::id())->get() as $transaction)
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <td colspan="4">
                                                                Exchange ID:
                                                                <a href="{{url('/exchange')}}/{{$transaction->transaction_id}}"
                                                                   class="text-danger">{{$transaction->transaction_id}}</a>
                                                                <span class="pull-right">
										from <img src="{{\App\Http\Controllers\TransactionController::package($transaction->send)->logo}}"
                                                  width="24px" height="24px"
                                                  class="img-circle"> <b>{{\App\Http\Controllers\TransactionController::package($transaction->send)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}</b>
										to <img src="{{\App\Http\Controllers\TransactionController::package($transaction->receive)->logo}}"
                                                width="24px" height="24px"
                                                class="img-circle"> <b>{{\App\Http\Controllers\TransactionController::package($transaction->receive)->name}} {{\App\Http\Controllers\TransactionController::package($transaction->receive)->currency}}</b>
									</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Send: {{$transaction->sendAmount}} {{\App\Http\Controllers\TransactionController::package($transaction->send)->currency}}</td>
                                                            <td>
                                                                Receive: {{$transaction->receiveAmount}} {{\App\Http\Controllers\TransactionController::package($transaction->receive)->currency}}</td>
                                                            <td>
									<span class="pull-right">
										Process type:
										<span class="label label-info">Manually</span>									</span>
                                                            </td>
                                                            <td>
									<span class="pull-right">
										Status:
                                        @if($transaction->status == 'cancel')
                                            <span class="label label-danger"><i class="fa fa-times"></i> Cancel</span>

                                        @elseif($transaction->status == 'pending')
                                            <span class="label label-warning"><i
                                                        class="fa fa-dot-circle-o"></i> Pending</span>
                                        @elseif($transaction->status == 'awaiting payment')
                                            <span class="label label-warning"><i
                                                        class="fa fa-dot-circle-o"></i> Awaiting payment</span>
                                        @elseif($transaction->status = 'awaiting confirmation')
                                            <span class="label label-warning"><i
                                                        class="fa fa-dot-circle-o"></i> Awaiting Confirmation</span>
                                        @elseif($transaction->status = 'refunded')
                                            <span class="label label-danger"><i
                                                        class="fa fa-times"></i> Refunded</span>
                                        @elseif($transaction->status == 'processing')
                                            <span class="label label-primary"><i
                                                        class="fa fa-clock-o"></i> Processing</span>
                                        @elseif($transaction->status == 'complete')
                                            <span class="label label-warning"><i
                                                        class="fa fa-check"></i> Complete</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        @endforeach


                                    </div>
                                </div><!-- my-ads -->

                            </div><!-- row -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection