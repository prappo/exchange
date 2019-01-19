@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Buy Accounts</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Type</th>

                                        <th>Client Name</th>

                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Amount</th>
                                        <th>Transaction ID</th>
                                        <th>Date & Time</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach( \App\BuyAccount::orderBy('created_at','desc')->get() as $account)

                                        <tr>
                                            <td>{{$account->account_type}}</td>
                                            <td>{{$account->name}}</td>
                                            <td>{{$account->email}}</td>
                                            <td>{{$account->number}}</td>
                                            <td>{{$account->amount}}</td>
                                            <td>{{$account->transaction_confirmation_id}}</td>
                                            <td>{{$account->created_at}}</td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection

















