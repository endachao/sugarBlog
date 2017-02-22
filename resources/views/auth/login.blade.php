@extends('layouts.auth')

@section('auth-content')
<div class="auth-content">
    <p class="text-xs-center">LOGIN TO CONTINUE</p>
    <form id="login-form" action="{{ route('login') }}" method="POST" novalidate="">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
            <label for="email">E-Mail Address</label> 
            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address" value="{{ old('email') }}" required> 
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label>
            <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="remember">
                <input class="checkbox" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span>Remember me</span>
            </label>
        <a href="{{ route('password.request') }}" class="forgot-btn pull-right">Forgot password?</a> </div>
        <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Login</button> </div>
        <div class="form-group">
            <p class="text-muted text-xs-center">Do not have an account? <a href="{{ route('register') }}">Sign Up!</a></p>
        </div>
    </form>
</div>
@endsection
