@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Index User</h1>
            <hr>
            @if(count($objects) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($objects as $i => $o)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $o->name() }}</td>
                            <td>{{ $o->email }}</td>
                            <td>
                                <a
                                    href="{{ url('user/'.$o->id.'/edit') }}"
                                    class="no"
                                >
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{ Form::open([
                                    'url' => 'user/'.$o->id,
                                    'method' => 'DELETE',
                                    'style' => 'display: inline;'
                                ]) }}
                                    <a
                                        href="javascript:"
                                        class="no"
                                        onclick="confirmSubmit(this)"
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
            <div>
                <a
                    href="{{ url('user/create') }}"
                    class="btn btn-primary"
                >
                    New
                </a>
            </div>
        </div>
    </div>
</div>
@endsection