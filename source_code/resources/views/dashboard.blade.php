@extends ("layouts.app")

@section("pageTitle") {{ "Dashboard" }} @endsection

@section("content")


    <div class="row">

        <div class="col-md-8 col-md-offset-2 text-center">

            <img src="{{ asset("pics/logo.png") }}" alt="Ikumochu Logo" style="width: 400px;">
            <hr/>
            <h4>
                Ikumochu | Retain Customers About to Churn
            </h4>
        </div>

    </div>


@endsection()