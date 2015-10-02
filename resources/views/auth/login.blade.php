@extends('templates/app')
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Login to Your Account</h1>
            <div class="account-wall">
                <img class="profile-img" src="http://tr3.cbsistatic.com/fly/226-fly/bundles/techrepubliccore/images/icons/standard/icon-user-default.png"
                     alt="">
                <form method="POST" action="/auth/login" class="form-signin">
                    {!! csrf_field() !!}

                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Login</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                </form>
            </div>
        </div>
    </div>
@stop





































    @stop