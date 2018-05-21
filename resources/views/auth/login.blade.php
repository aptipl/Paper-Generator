@extends('app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="center-wrapper">
        <div class="login-block">
            <div class="login-header text-center">
                <img src="images/logo-xs.png" alt="Logo">
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('login') }}" data-parsley-validate>
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
<!--                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-3  col-sm-9">
                        <button type="submit" class="btn btn-success">Login</button>
                        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3  col-sm-9">
                        <a class="btn btn-danger" href="{{ route('password.request') }}">Forgot Your Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
