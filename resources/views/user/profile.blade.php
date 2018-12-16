@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="name" placeholder="Your Name" type="text" value="{{$name}}"
                                       class="form-control">


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Your Email" type="text" value="{{$email}}"
                                       class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" placeholder="Your Phone number" type="text" value="{{$phone}}"
                                       class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Old Password</label>

                            <div class="col-md-6">
                                <input id="oldPassword" placeholder="Your Old password" type="password"
                                       class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">New Password</label>

                            <div class="col-md-6">
                                <input id="newPassword" placeholder="Your New password" type="password"
                                       class="form-control">


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="update" class="btn btn-block btn-success"><i class="fa fa-save"></i> Update
                                    Profile
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
            $('#update').click(function () {
                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/profile/update')}}',
                    data: {
                        'name': $('#name').val(),
                        'email': $('#email').val(),
                        'phone':$('#phone').val(),
                        'oldPass': $('#oldPassword').val(),
                        'newPass': $('#newPassword').val(),
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Profile Updated Successfully");
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
            });
        });

    </script>
@endsection