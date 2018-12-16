@extends('layouts.site')

@section('content')

    <section id="main" class="clearfix home-default pt-xs">
        <div class="container">
            <div style="background: white;padding:10px;min-height: 390px !important;" class="main-content">
                <br>
                <div class="row">
                    <div class="col-md-12">

                        {!! $content !!}

                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection