@extends('app')
@section('title', 'Forgot Password')
@section('content')
<div class="container">
    <div class="center-wrapper">
        <div class="login-block">
            <div class="login-header text-center">
                <img src="../images/logo-xs.png" alt="Logo">
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-3 control-label">E-Mail Address</label>
                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            Send Reset Link
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
