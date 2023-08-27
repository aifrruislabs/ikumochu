@extends ("layouts.app")

@section("pageTitle") {{ "Login" }} @endsection

@section("content")


<div class="col-md-12">

    <div class="col-md-4 col-md-offset-4 center border-form">
        <br/>
        <h4>IKUMOCHU LOGIN</h4>
        <hr/>

        <form action="{{ route('postLogin') }}" method="POST">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" class="form-control"/></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="form-control"/></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
                    <td><input type="submit" value="Login" class="btn btn-primary form-control"/></td>
                </tr>
            </table>
        </form>

        <hr/>
    </div>

</div>

@endsection