@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Review</div>

                    <div class="card-body">


                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Your Comment</label>

                            <div class="col-md-6">
                                <textarea id="comment" class="form-control"></textarea>


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="add" class="btn btn-block btn-success"><i class="fa fa-plus"></i> Add
                                    Review
                                </button>

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

        $(document).ready(function (e) {
            $('#add').click(function () {
                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/review/add')}}',
                    data: {

                        'comment': $('#comment').val(),
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Success");
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