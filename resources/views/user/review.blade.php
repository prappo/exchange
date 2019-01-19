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
                                <h3>My Testimonials <span class="pull-right"><a href="{{url('/user/review/add')}}"
                                                                                class="btn btn-info btn-xs"><i
                                                    class="fa fa-plus"></i> New</a></span></h3>
                                <hr>
                                @if(\App\Review::where('userId',Auth::user()->id)->count() == 0)
                                    <div class="alert alert-info"><i class="fa fa-info-circle"></i> Still no have
                                        testimonials. <a href="{{url('/user/review/add')}}">Click
                                            here</a> to submit testimonial.
                                    </div>
                                @else
                                    @foreach(\App\Review::where('userId',Auth::user()->id)->get() as $review)
                                        <div class="alert @if($review->type == "Positive") alert-success @elseif($review->type == "Neutral") alert-info @else alert-danger @endif">
                                            <i class="fa fa-star"></i>
                                            {{$review->comment}}
                                        </div>

                                    @endforeach

                                @endif

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