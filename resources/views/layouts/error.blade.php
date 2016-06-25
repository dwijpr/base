@extends('layouts.base')

@section('style')
<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        color: #B0BEC5;
        font-weight: 100;
        font-family: 'Lato';
    }

    .content {
        margin-top: 16%;
        text-align: center;
    }

    .title {
        font-size: 72px;
        margin-bottom: 40px;
    }
</style>
@endsection

@section('_content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@endsection
