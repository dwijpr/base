@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Index User</h1>
            <hr>
            @if(count($objects) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($objects as $o)
                        <tr>
                            <td>{{ $o->name }}</td>
                            <td>{{ $o->email }}</td>
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