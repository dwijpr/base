@extends('layouts.app')

@section('style')
@parent
<style>
    .content-wrapper {
        padding-top: 64px;
        position: relative;
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
    #profile-details-toggle i.fa {
        font-size: 24px;
    }
    #profile-edit-btn {
        position: absolute;
        top: 16px;
        right: 0;
    }

    div.img-main {
        display: inline-block;
        width: 128px;
        height: 128px;
        margin: 12px;
        border: 1px solid #ddd;

        background-image: url({{ Auth()->user()->img().'/sm' }});
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;

        border-radius: 50%;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content-wrapper">
                <a
                    id="profile-edit-btn"
                    class="btn btn-default"
                    href="{{ url('/profile/edit') }}"
                >
                    <i class="fa fa-btn fa-edit"></i>
                    Edit Profile
                </a>
                <div class="profile">
                    <div class="profile-display text-center">
                        <div class="img-main"></div>
                        <h1 class="main">{{ Auth::user()->name() }}</h1>
                        <h4>
                            <i
                                class="fa{{
                                    (@Auth::user()->username?' fa-btn':'')
                                }} fa-{{
                                    Auth::user()->sex?'mars':'venus'
                                }}"
                            ></i>
                            @if(
                                Auth::user()->age() < date('Y')
                            )
                                <span style="padding-right: 8px;">
                                    {{ Auth::user()->age() }} y.o.
                                </span>
                            @endif
                            @if(@Auth::user()->username)
                            <b>{{ '@'.Auth::user()->username }}</b>
                            @endif
                        </h4>
                        <h3 class="main">{{ Auth::user()->occupation }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
