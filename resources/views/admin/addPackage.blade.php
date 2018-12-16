@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Package</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Logo Link</label>

                            <div class="col-md-6">
                                <input id="logo" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description (
                                Optional )</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="purchase" class="col-md-4 col-form-label text-md-right">Purchase Value</label>

                            <div class="col-md-6">
                                <input id="purchase" type="text" class="form-control">


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sell" class="col-md-4 col-form-label text-md-right">Sell Value</label>

                            <div class="col-md-6">
                                <input id="sell" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="reserve" class="col-md-4 col-form-label text-md-right">Reserve Amount</label>

                            <div class="col-md-6">
                                <input id="reserve" type="text" class="form-control">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-md-4 col-form-label text-md-right">Currency</label>

                            <div class="col-md-6">

                                <select id="currency" class="form-control">
                                    <option value="USD">USD</option>
                                    <option value="BDT">BDT</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="available" class="col-md-4 col-form-label text-md-right">Available</label>

                            <div class="col-md-6">
                                <input id="available" type="checkbox">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <button id="add" class="btn btn-block btn-success"><i class="fa fa-plus"></i> Add
                                    Package
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
            $('#add').click(function () {
                var name = $("#name").val(), logo = $('#logo').val(), description = $('#description').val(), purchase = $('#purchase').val(), sell = $('#sell').val(), reserve = $('#reserve').val();
                var available = "";

                if ($('#available').is(':checked')) {
                    available = "yes";
                }

                if (name == "" || logo == "" || purchase == "" || sell == "" || reserve == "") {
                    return alert("Please enter necessary information");
                }

                $.ajax({
                    type: 'POST',
                    url: '{{url('/user/package/add')}}',
                    data: {
                        'name': name,
                        'logo': logo,
                        'description': description,
                        'purchase': purchase,
                        'sell': sell,
                        'reserve': reserve,
                        'currency': $('#currency').val(),
                        'available': available,
                        '_token':'{{csrf_token()}}'

                    },
                    success: function (data) {
                        if (data == "success") {
                            alert("Package added successfully");
                        } else {
                            alert(data)
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