@extends('templates/app')
@section('content')
        <!-- resources/views/auth/register.blade.php -->
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Register to continue to Bootsnipp</h1>
        <div class="account-wall">
            <img class="profile-img" src="http://tr3.cbsistatic.com/fly/226-fly/bundles/techrepubliccore/images/icons/standard/icon-user-default.png"
                 alt="">
            <form method="POST" action="/auth/register" class="form-signin">
                {!! csrf_field() !!}
                <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Register</button>
            </form>
        </div>
    </div>
</div>
    @stop