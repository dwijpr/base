{!! Form::open([
    'url' => '/profile',
    'method' => 'PATCH',
    'class' => 'form-horizontal',
    'role' => 'form',
]) !!}
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
            ]) }}
            @if($errors->has('lastname'))
                <span class="help-block">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{
        (
            $errors->has('firstname') or $errors->has('lastname')
        ) ?' has-error':''
    }}">
        <div class="col-sm-6 col-sm-offset-4">
            <label class="radio-inline">
                <input
                    type="radio"
                    name="sex"
                    value="1"
                    {{ Auth::user()->sex?'checked':'' }}
                > Male
            </label>
            <label class="radio-inline">
                <input
                    type="radio"
                    name="sex"
                    value="0"
                    {{ Auth::user()->sex?'':'checked' }}
                > Female
            </label>    
        </div>
    </div>
    <div class="form-group{{ $errors->has('dob') }}">
        {{ Form::label('dob', 'Date of Birth', [
            'class' => 'control-label col-sm-4',
            'for' => 'dob',
        ]) }}
        <div class="col-sm-3">
            {{ Form::text('dob', Auth()->user()->dob, [
                'class' => 'form-control datepicker',
                'id' => 'dob',
            ]) }}
            @if($errors->has('dob'))
                <span class="help-block">
                    <strong>{{ $errors->first('dob') }}</strong>
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
