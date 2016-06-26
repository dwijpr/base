{!! Form::open([
    'url' => 'permission'.(@$object?'/'.$object->id:''),
    'method' => @$object?'PATCH':'POST',
    'class' => 'form-horizontal',
    'role' => 'form',
]) !!}
    {{ Form::bsText('name', @$object->name) }}
    {{ Form::bsTextarea('label', @$object->label) }}
    <div class="form-group">
        <div class="col-sm-6 col-sm-offset-4">
            <button class="btn btn-primary">
                {{ @$object?'Update':'Create' }}
            </button>
            <a href="{{ url('permission') }}" class="btn btn-default">
                Cancel
            </a>
        </div>
    </div>
{!! Form::close() !!}
