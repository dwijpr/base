@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Reset Password</h1>
            <hr>
            <div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {{ Form::open([
                    'url' => '/password/email',
                    'class' => 'form-horizontal',
                    'role' => 'form',
                ]) }}
                    {{ Form::bsText('email') }}
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-envelope"></i>
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
