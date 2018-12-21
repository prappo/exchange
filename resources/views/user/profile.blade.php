@extends('layouts.user')
@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div style="background: white;" class="main-content">
                <br>
                <div class="ad-profile section">
                    <div class="user-profile">
                        <div class="user">
                            <h2>Hello, <a href="#" style="color:black;">{{Auth::user()->name}}</a></h2>

                        </div>


                    </div><!-- user-profile -->






                </div>
                <div style="padding-left: 30px" class="row">
                    <h2>Profile</h2>
                    <hr>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Name</label>

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


                                <button id="update" class="btn btn-primary"><i class="fa fa-check"></i> Save Changes</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        'phone': $('#phone').val(),
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