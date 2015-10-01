@extends('templates/app')
@section('content')
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Login to Your Account</h1><br>

            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="checkbox" name="remember"> Remember Me
                <button type="submit">Login</button>

            </form>

            <div class="login-help">
                <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
        </div>
    </div>
@stop





































    @stop