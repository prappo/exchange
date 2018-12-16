@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Slider</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$data->name}}" placeholder="Slider name" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Image Link</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$data->image}}" placeholder="Image Link" type="text" class="form-control">


                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="update" class="btn btn-block btn-success"><i class="fa fa-save"></i> Update
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

        $(document).ready(function(e) {
            $('#update').click(function () {
                $.ajax({
                    type:'POST',
                    url:'{{url('/user/slider/update')}}',
                    data:{
                        'id':'{{$id}}',
                        'name':$('#name').val(),
                        'image':$('#link').val(),
                        '_token':'{{csrf_token()}}'
                    },
                    success:function (data) {
                        if(data == "success"){
                            alert("Page updated Successfully");
                        }else{
                            alert(data)
                        }
                    },
                    error:function(data){
                        alert("Something went wrong");
                        console.log(data.responseText);
                    }

                })
            });
        });

    </script>
@endsection