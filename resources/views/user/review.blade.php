@extends('layouts.user')
@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div style="background: white;" class="main-content">
                <br>
                <div class="row">
                    <br>
                    <div class="ad-profile section">
                        <div class="user-profile">
                            <div class="user">
                                <h2>Hello, <a href="#" style="color:black;">{{Auth::user()->name}}</a></h2>

                            </div>


                        </div><!-- user-profile -->


                        <div class="col-sm-12">
                            <div class="section" style="display:block;">
                                <h3>My Testimonials <span class="pull-right"><a href="{{url('/user/review/add')}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> New</a></span></h3>
                                <hr>
                                <div class="alert alert-info"><i class="fa fa-info-circle"></i> Still no have testimonials. <a href="{{url('/user/review/add')}}" style="color:#E3E3E3;">Click here</a> to submit testimonial.</div>

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