@extends('layouts.app')

@section('_style')
<style>
    .content-wrapper {
        padding-top: 64px;
    }
    .profile img.main {
        background: #999;
        width: 128px;
        border-radius: 50%;
        padding: 4px;
    }
    .profile h1.main {
        letter-spacing: .275em;
        font-weight: 200;
        text-transform: uppercase;
    }
    .profile h3.main {
        letter-spacing: .075em;
        font-weight: 100;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="content-wrapper">
                <div class="profile">
                    <div class="profile-display text-center">
                        <img
                            class="main"
                            src="{{ Auth::user()->img() }}"
                        >
                        <h1 class="main">{{ Auth::user()->name() }}</h1>
                        <h4><b>{{ '@'.Auth::user()->username }}</b></h4>
                        <h3 class="main">{{ Auth::user()->occupation }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection