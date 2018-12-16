@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Page</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" placeholder="Page Title" type="text" class="form-control">


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Position</label>

                            <div class="col-md-6">
                                <select id="position" class="form-control">
                                    <option>Top</option>
                                    <option>Bottom Left</option>
                                    <option>Bottom Middle</option>
                                    <option>Bottom Right</option>
                                </select>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control"></textarea>


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="add" class="btn btn-block btn-success"><i class="fa fa-plus"></i> Add
                                    Page
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
                    url: '{{url('/user/page/add')}}',
                    data: {
                        'title': $('#title').val(),
                        'data': $('#content').val(),
                        'position':$('#position').val(),
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("New page Created Successfully");
                        } else {
                            alert(data);
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