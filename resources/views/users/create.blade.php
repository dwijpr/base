@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>New User</h1>
                <hr>
                <form
                    class="form-horizontal"
                    role="form"
                    method="POST"
                    action="{{ url('user') }}"
                >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection