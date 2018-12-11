@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th>Purchase</th>
                                        <th>Sell</th>
                                        <th>Reserve</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach(\App\Packages::all() as $package)

                                        <tr>
                                            <td>
                                                <img style="border-radius: 50%" src="{{$package->logo}}"
                                                     width="20px" height="20">
                                                <span class="hidden-xs">
                                             {{$package->name}}                                        </span>
                                            </td>

                                            <td>{{$package->purchase}}</td>
                                            <td>{{$package->sell}}</td>
                                            <td>{{$package->reserve}} {{$package->currency}}</td>
                                            <td>@if($package->available == "yes") Active @endif</td>
                                            <td><a class="btn btn-xs btn-primary">Edit</a></td>


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