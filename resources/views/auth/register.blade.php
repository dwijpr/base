@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create Account</h1>
            <hr>
            <div class="panel-body">
                {{ Form::open([
                    'url' => 'register',
                    'class' => 'form-horizontal',
                    'role' => 'form',
                ]) }}
                    <div class="form-group{{
                        (
                            $errors->has('firstname') or $errors->has('lastname')
                        ) ?' has-error':''
                    }}">
                        {{ Form::label('firstname', 'Name', [
                            'class' => 'control-label col-sm-4',
                        ]) }}
                        <div class="col-sm-3">
                            {{ Form::text('firstname', null, [
                                'class' => 'form-control',
                                'id' => 'firstname',
                                'placeholder' => 'First',
                            ]) }}
                            @if($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-3">
                            {{ Form::text('lastname', null, [
                                'class' => 'form-control',
                                'id' => 'lastname',
                                'placeholder' => 'Last',
                            ]) }}
                            @if($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('sex')?' has-error':'' }}">
                        <div class="col-sm-6 col-sm-offset-4">
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="sex"
                                    value="1"
                                    {{ old('sex')?'checked':'' }}
                                > Male
                            </label>
                            <label class="radio-inline">
                                <input
                                    type="radio"
                                    name="sex"
                                    value="0"
                                    {{ old('sex')?'':'checked' }}
                                > Female
                            </label>    
                        </div>
                    </div>
                    {{ Form::bsText('email') }}
                    {{ Form::bsPassword('password') }}
                    {{ Form::bsPassword('password_confirmation') }}
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-check"></i>
                                Continue
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
