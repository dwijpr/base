@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {{ Form::open([
                        'url' => 'register',
                        'class' => 'form-horizontal',
                        'role' => 'form',
                    ]) }}
                        {{ Form::bsText('name') }}
                        {{ Form::bsText('email') }}
                        {{ Form::bsPassword('password') }}
                        {{ Form::bsPassword('password_confirmation') }}
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
