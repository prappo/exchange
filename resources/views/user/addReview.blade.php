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
                    </div>


                    <div class="ads-info" style="display:block;">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="section" style="display:block;">
                                    <h3>Submit testimonial</h3>
                                    <hr>



                                        <div class="form-group">
                                            <label>Buy-Sell</label>
                                            <select class="form-control input-lg form_style_1" name="exchange_id">
                                                <option>Still no have Buy-Sell.</option>		</select>
                                        </div>
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type">
                                                <option value="1">Positive</option>
                                                <option value="2">Neutral</option>
                                                <option value="3">Negative</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Feedback</label>
                                            <textarea class="form-control input-lg form_style_1" name="content" rows="3"></textarea>
                                        </div>
                                        <button class="btn btn-primary" name="bit_submit"><i class="fa fa-plus"></i> </button>
                                    

                                </div>
                            </div><!-- my-ads -->

                        </div><!-- row -->
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