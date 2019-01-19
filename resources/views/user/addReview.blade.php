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
                                        <label>Type</label>
                                        <select class="form-control" id="type">
                                            <option value="Positive">Positive</option>
                                            <option value="Neutral">Neutral</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Feedback</label>
                                        <textarea class="form-control input-lg form_style_1" id="comment"
                                                  rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-primary" id="add"><i class="fa fa-plus"></i></button>


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
                if ($("#comment").val() == "") {
                    return alert("Write Something");
                }
                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/review/add')}}',
                    data: {

                        'comment': $('#comment').val(),
                        'type': $('#type').val(),
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Success");
                            location.reload();
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