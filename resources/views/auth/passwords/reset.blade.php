@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Reset Password</h1>
            <hr>
            <div>
                {{ Form::open([
                    'url' => '/password/reset',
                    'class' => 'form-horizontal',
                    'role' => 'form',
                ]) }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    {{ Form::bsText('email', $email) }}
                    {{ Form::bsPassword('password') }}
                    {{ Form::bsPassword('password_confirmation') }}
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-refresh"></i>
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
