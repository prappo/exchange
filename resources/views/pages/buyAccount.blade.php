@extends('layouts.site')

@section('content')
    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div class="main-content">


                <div class="section trending-ads">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="section" style="display:block;">
                                        <h3>Buy Verify Account</h3>
                                        <hr>
                                        <form method="post" action="{{url('/buy/account')}}">
                                            {{csrf_field()}}


                                            <div class="form-group">
                                                <label>Account Type</label>
                                                <select id="accountType" name="accountType"
                                                        class="form-control input-lg form_style_1"
                                                        name="exchange_id">
                                                    @foreach(\App\VerifiedAccountList::all() as $account)
                                                        <option data-cost="{{$account->cost}}">{{$account->name}}
                                                            : {{$account->cost}} Taka
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <input type="hidden" id="amount" value=""
                                                       name="amount">
                                                <input type="hidden" value="{{$account->name}}" name="account_name">

                                            </div>
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input required name="name" type="text" class="form-control" id="name">

                                            </div>


                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input required type="text" class="form-control" name="email"
                                                       id="email">

                                            </div>

                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input required type="text" class="form-control" name="contactNumber"
                                                       id="contactNumber">

                                            </div>


                                            <button type="submit" class="btn btn-primary"> Buy Now
                                            </button>
                                        </form>


                                    </div>
                                </div><!-- my-ads -->

                            </div><!-- row -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <script>
        $(document).ready(function () {
            var element = $('#accountType').find('option:selected');
            $('#amount').val(element.attr('data-cost'));
        });
        $('#accountType').on('change', function () {
            var element = $(this).find('option:selected');
            $('#amount').val(element.attr('data-cost'));
        })
    </script>
@endsection

