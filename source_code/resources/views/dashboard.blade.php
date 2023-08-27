@extends ("layouts.app")

@section("pageTitle") {{ "Dashboard" }} @endsection

@section("content")


    <div class="row">

        <div class="col-md-8 col-md-offset-2 text-center">

            <img src="{{ asset("pics/logo.png") }}" alt="Ikumochu Logo" style="width: 400px;">
            <hr/>
            <h4> 
                Retain Customers About to Churn <br/><br/>Based on Customer Behaviour Analysis (CBA)
            </h4>

            <hr/>
        </div>

    </div>


@endsection()