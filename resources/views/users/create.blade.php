@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>New User</h1>
                <hr>
                {!! Form::open([
                    'url' => 'user',
                    'class' => 'form-horizontal',
                    'role' => 'form',
                ]) !!}
                    {{ Form::bsText('name') }}
                    {{ Form::bsText('email') }}
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection