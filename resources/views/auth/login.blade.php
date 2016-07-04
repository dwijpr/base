@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <h1>Login</h1>
                <hr>
                <div>
                    {{ Form::open([
                        'url' => 'login',
                        'class' => 'form-horizontal',
                        'role' => 'form',
                    ]) }}
                        {{ Form::bsText('email') }}
                        {{ Form::bsPassword('password') }}
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input
                                            type="checkbox"
                                            name="remember"
                                        > Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                                <a
                                    class="btn btn-link"
                                    href="{{ url('/password/reset') }}"
                                >Forgot Your Password?</a>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
    </div>
</div>
@endsection
