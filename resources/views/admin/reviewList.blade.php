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
                                        <th>User Name</th>
                                        <th>Type</th>

                                        <th>Comment</th>

                                        <th>Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach(\App\Review::all() as $review)

                                        <tr>
                                            <td>{{\App\User::where('id',$review->userId)->value('name')}}</td>
                                            <td>{{$review->type}}</td>
                                            <td>{{$review->comment}}</td>

                                            <td>
                                                <a href="#" class="btn btn-danger" data-id="{{$review->id}}">Delete</a>
                                            </td>
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
    <script>
        $(document).ready(function () {
            $('.btn-danger').click(function () {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/review/delete')}}',
                    data: {
                        'id': id,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Deleted !");
                            location.reload();
                        } else {
                            alert(data);
                        }
                    },
                    error: function (data) {
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }
                })
            })
        });
    </script>
@endsection

















