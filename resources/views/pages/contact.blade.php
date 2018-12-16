@extends('layouts.site')
@section('content')

    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">
                <br>
                <div class="row">
                    <div class="col-md-5">
                        <p><b>Address</b></p>
                        <p>
                            <b><i class="fa fa-skype"></i> Skype : </b> your_skype_id
                        </p>
                        <p>
                            <b><i class="fa fa-whatsapp"></i> Whatsapp : </b> 01XXXXXXXXX
                        </p>

                        <p>
                            <b><i class="fa fa-envelope"></i> Support Mail : </b> support@email.com
                        </p>
                        <p>
                            <b><i class="fa fa-home"></i> Address : </b> <br>
                            1/2/3,<br>
                            Dhanmondi,Dhaka
                        </p>


                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-8">
                                    <input id="email" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">Subject</label>

                                <div class="col-md-8">
                                    <input id="subject" type="text" class="form-control">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">Message</label>

                                <div class="col-md-8">
                                    <textarea class="form-control" id="message"></textarea>


                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-8">
                                    <button id="send" class="btn btn-block btn-success"><i class="fa fa-send"></i> Send
                                        Message
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </section>


@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#send').click(function () {
                alert("Message Sent");
            });
        });

    </script>
@endsection