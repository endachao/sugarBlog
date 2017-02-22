@extends('layouts.auth')

@section('auth-content')
<div class="auth-content">
    <p class="text-xs-center">PASSWORD RECOVER</p>
    <p class="text-muted text-xs-center"><small>Enter your email address to recover your password.</small></p>
    <form id="reset-form" action="{{ route('password.email') }}" method="POST" novalidate="">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
            <label for="email1">Email</label> 
            <input type="email" class="form-control underlined" name="email1" id="email1" placeholder="Your email address" value="{{ old('email') }}" required> 
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Reset</button> </div>
        <div class="form-group clearfix"> <a class="pull-left" href="{{ route('login') }}">return to Login</a> <a class="pull-right" href="{{ route('register') }}">Sign Up!</a> </div>
    </form>
</div>
@endsection
