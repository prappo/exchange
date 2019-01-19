@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Transactions</div>

                    <div class="card-body">
                        <div style="padding:25px" class="row">
                            <div class="btn-group">
                                <a href="{{url('/user/home')}}" class="btn btn-primary">Home</a>
                                <a href="{{url('/user/home/all')}}" class="btn btn-primary">All</a>
                                <a href="{{url('/user/home/completed')}}" class="btn btn-success">Completed</a>
                            </div>
                        </div>
                        @foreach($transactions = \App\Transiction::where('status','complete')->orderBy('created_at','')->paginate(5) as $data)

                            <div style="border:2px solid gainsboro;margin: 10px" class="row">
                                <div class="col-md-12">
                                    <div id="bit_exchange_box">
                                        <table width="100%" class="table table-striped">
                                            <tbody>
                                            <tr>
                                                <td colspan="4">
                                                    <h2 class="text-center">
                                                        <img src="{{\App\Http\Controllers\TransactionController::package($data->send)->logo}}"
                                                             width="36px" height="36px" style="border-radius: 5px"
                                                             class="img-circle">
                                                        <b>{{\App\Http\Controllers\TransactionController::package($data->send)->name}} {{\App\Http\Controllers\TransactionController::package($data->send)->currency}}</b>
                                                        &nbsp;&nbsp;&nbsp;<i
                                                                class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;
                                                        <img src="{{\App\Http\Controllers\TransactionController::package($data->receive)->logo}}"
                                                             width="36px" height="36px" class="img-circle">
                                                        <b>{{\App\Http\Controllers\TransactionController::package($data->receive)->name}}
                                                            .
                                                            {{\App\Http\Controllers\TransactionController::package($data->receive)->currency}}</b>
                                                    </h2><br>
                                                    Exchange ID: {{$data->transaction_id}}                       </td>
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
                                                        {{\App\Http\Controllers\TransactionController::package($data->receive)->purchase}}
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
                                                        <span class="label label-primary"><i class="fa fa-clock-o"></i> Awaiting Payment</span>
                                                    @elseif($data->status == 'awaiting confirmation')
                                                        <span class="label label-primary"><i class="fa fa-clock-o"></i> Awaiting Confirmation</span>
                                                    @elseif($data->status == 'refunded')
                                                        <span class="label label-danger"><i class="fa fa-times"></i> Refunded</span>
                                                    @elseif($data->status == 'processing')
                                                        <span class="label label-primary"><i class="fa fa-clock-o"></i> Processing</span>
                                                    @elseif($data->status == 'complete')
                                                        <span class="label label-success"><i class="fa fa-check"></i> Complete</span>
                                                    @endif

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    Created on
                                                    <span class="label label-default"><kbd>{{$data->created_at}}</kbd></span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <b>User Information </b> <br>
                                                    Name : <kbd>{{\App\User::where('id',$data->userId)->value('name')}}</kbd> <br>
                                                    Email : <kbd>{{\App\User::where('id',$data->userId)->value('email')}}</kbd> <br>
                                                    Phone : <kbd>{{\App\User::where('id',$data->userId)->value('phone')}}</kbd> <br>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    User <kbd>{{\App\Packages::where('id',$data->receive)->value('name')}}</kbd> number / ID <kbd>{{$data->payFrom}} </kbd>
                                                </td>
                                                <td>  </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="btn-group">
                                                        <button data-id="{{$data->id}}"
                                                                class="btn awaiting_payment btn-warning">Awaiting
                                                            Payment
                                                        </button>
                                                        <button data-id="{{$data->id}}"
                                                                class="btn awaiting_confirmation btn-warning">Awaiting
                                                            Confirmation
                                                        </button>


                                                    </div>


                                                    <div class="btn-group">
                                                        <button data-id="{{$data->id}}"
                                                                class="btn processing btn-primary">Processing
                                                        </button>
                                                        <button data-id="{{$data->id}}"
                                                                class="btn complete btn-success">Complete
                                                        </button>

                                                    </div>


                                                    <div class="btn-group">
                                                        <button data-id="{{$data->id}}" class="btn refund btn-danger">
                                                            Refund
                                                        </button>
                                                        <button data-id="{{$data->id}}" class="btn cancel btn-danger">
                                                            Cancel
                                                        </button>

                                                    </div>

                                                </td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{$transactions->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.awaiting_payment').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'awaiting payment',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });

            $('.awaiting_confirmation').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'awaiting confirmation',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });


            $('.pending').click(function () {

                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'pending',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });

            $('.processing').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'processing',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });


            $('.complete').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'complete',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });


            $('.refund').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'refund',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });


            $('.cancel').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/transaction/status')}}',
                    data: {
                        'status': 'cancel',
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == 'success') {
                            alert('Status changed');
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                });
            });

        });
    </script>
@endsection











