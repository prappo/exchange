@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Account Lists</div>

                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>Cost</td>
                                <td>Action</td>
                            </tr>

                            @foreach(\App\VerifiedAccountList::orderBy('created_at','desc')->get() as $account)
                                <tr>
                                    <td>{{$account->name}}</td>
                                    <td>{{$account->cost}}</td>
                                    <td><a href="{{url('/user/buy/account/edit')}}/{{$account->id}}">Edit</a></td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>

        $(document).ready(function (e) {
            $('#add').click(function () {


                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/buy/account/add')}}',
                    data: {
                        'name': $('#name').val(),
                        'cost': $('#cost').val(),

                        '_token': '{{csrf_token()}}'

                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Account added successfully");
                        } else {
                            alert(data)
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                })
            });
        });

    </script>
@endsection