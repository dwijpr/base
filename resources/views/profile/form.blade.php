{!! Form::open([
    'url' => '/profile/img',
    'method' => 'PATCH',
    'class' => 'form-horizontal',
    'role' => 'form',
    'id' => 'form-img',
]) !!}
    <input type="hidden" name="img" id="img">
{{ Form::close() }}

{!! Form::open([
    'url' => '/profile',
    'method' => 'PATCH',
    'class' => 'form-horizontal',
    'role' => 'form',
]) !!}
    <div
        class="text-center user-img-wrapper"
        data-toggle="modal"
        data-target="#myModal"
    >
        <div class="user-img"></div>
        <h3>Change</h3>
    </div>
    <div class="form-group{{ $errors->has('username')?' has-error':'' }}">
        {{ Form::label('username', 'Username', [
            'class' => 'control-label col-sm-4',
            'for' => 'username',
        ]) }}
        <div class="col-sm-4">
            <div class="input-group">
                <div class="input-group-addon">@</div>
                {{ Form::text('username', Auth()->user()->username, [
                    'class' => 'form-control',
                    'id' => 'username',
                ]) }}
            </div>
            @if($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('email')?' has-error':'' }}">
        {{ Form::label('email', 'Email', [
            'class' => 'control-label col-sm-4',
            'for' => 'email',
        ]) }}
        <div class="col-sm-4">
            {{ Form::text('email', Auth()->user()->email, [
                'class' => 'form-control',
                'id' => 'email',
            ]) }}
            @if($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{
        (
            $errors->has('firstname') or $errors->has('lastname')
        ) ?' has-error':''
    }}">
        {{ Form::label('name', 'Name', [
            'class' => 'control-label col-sm-4',
            'for' => 'firstname',
        ]) }}
        <div class="col-sm-3">
            {{ Form::text('firstname', Auth()->user()->firstname, [
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
            {{ Form::text('lastname', Auth()->user()->lastname, [
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
                    @if(old('sex') === null)
                    {{ Auth::user()->sex?'checked':'' }}
                    @else
                    {{ old('sex')?'checked':'' }}
                    @endif
                > Male
            </label>
            <label class="radio-inline">
                <input
                    type="radio"
                    name="sex"
                    value="0"
                    @if(old('sex') === null)
                    {{ Auth::user()->sex?'':'checked' }}
                    @else
                    {{ old('sex')?'':'checked' }}
                    @endif
                > Female
            </label>    
        </div>
    </div>
    <div class="form-group{{ $errors->has('dob')?' has-error':'' }}">
        {{ Form::label('dob', 'Date of Birth', [
            'class' => 'control-label col-sm-4',
            'for' => 'dob',
        ]) }}
        <div class="col-sm-4">
            {{ Form::text('dob', Auth()->user()->dob, [
                'class' => 'form-control datepicker text-center',
                'id' => 'dob',
            ]) }}
            @if($errors->has('dob'))
                <span class="help-block">
                    <strong>{{ $errors->first('dob') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('occupation')?' has-error':'' }}">
        {{ Form::label('occupation', 'Occupation', [
            'class' => 'control-label col-sm-4',
            'for' => 'occupation',
        ]) }}
        <div class="col-sm-4">
            {{ Form::text('occupation', Auth()->user()->occupation, [
                'class' => 'form-control',
                'id' => 'occupation',
            ]) }}
            @if($errors->has('occupation'))
                <span class="help-block">
                    <strong>{{ $errors->first('occupation') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            <button class="btn btn-primary">
                Update
            </button>
            <a
                href="{{ url('/profile') }}"
                class="btn btn-default"
            >
                Cancel
            </a>
        </div>
    </div>
{!! Form::close() !!}
