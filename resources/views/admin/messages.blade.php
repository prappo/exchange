@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Messages</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <tr>


                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach(\App\Contact::all() as $contact)

                                        <tr>

                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>




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