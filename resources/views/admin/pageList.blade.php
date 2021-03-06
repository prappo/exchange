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
                                        <th>ID</th>

                                        <th>Title</th>
                                        <th>Position</th>
                                        <th>Content</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach(\App\Page::all() as $page)

                                        <tr>

                                            <td>{{$page->id}}</td>
                                            <td>{{$page->title}}</td>
                                            <td>{{$page->position}}</td>
                                            <td>{{$page->content}}</td>

                                            <td><a href="{{url('/user/page/edit/').'/'.$page->id}}"
                                                   class="btn btn-xs btn-primary">Edit</a>

                                            <a href="#" class="btn btn-danger" data-id="{{$page->id}}">Delete</a>
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
                    url: '{{url('/user/page/delete')}}',
                    data: {
                        'id': id,
                        '_token':'{{csrf_token()}}'
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