@extends('layouts.auth')

@section('auth-content')
<div class="auth-content">
    <p class="text-xs-center">SIGNUP TO GET INSTANT ACCESS</p>
    <form id="signup-form" action="{{ route('register') }}" method="POST" novalidate="">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}"> 
            <label for="name">Name</label> 
            <input type="name" class="form-control underlined" name="name" id="name" placeholder="Enter name" required="" value="{{ old('name') }}"> 
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
            <label for="email">Email</label> 
            <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required="" value="{{ old('email') }}"> 
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}"> <label for="password">Password</label>
            <div class="row">
                <div class="col-sm-6"> 
                    <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required=""> 
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-sm-6"> 
                    <input type="password" class="form-control underlined" name="password_confirmation" id="retype_password" placeholder="Re-type password" required=""> 
                </div>
            </div>
        </div>
        <div class="form-group"> <label for="agree">
            <input class="checkbox" name="agree" id="agree" type="checkbox" required=""> 
            <span>Agree the terms and <a href="#">policy</a></span>
            </label> 
        </div>
        <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">Sign Up</button> </div>
        <div class="form-group">
            <p class="text-muted text-xs-center">Already have an account? <a href="{{ route('login') }}">Login!</a></p>
        </div>
    </form>
</div>
@endsection
