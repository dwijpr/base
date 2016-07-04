@extends('layouts.app')

@section('_style')
<style>
    .content-wrapper {
        padding-top: 32px;
        position: relative;
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
    #profile-details-toggle i.fa {
        font-size: 24px;
    }
    #profile-edit-btn {
        position: absolute;
        top: 16px;
        right: 0;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
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
                        <img
                            class="main"
                            src="{{ Auth::user()->img() }}"
                        >
                        <h1 class="main">{{ Auth::user()->name() }}</h1>
                        <h4>
                            <i
                                class="fa fa-btn fa-{{
                                    Auth::user()->sex?'mars':'venus'
                                }}"
                            ></i>
                            <b>{{ '@'.Auth::user()->username }}</b>
                        </h4>
                        <h3 class="main">{{ Auth::user()->occupation }}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div
                        class="well"
                        id="profile-details"
                        style="display: none;"
                    >
                        <div>
                            <i class="fa fa-btn fa-map-marker"></i>
                            Bandung, Indonesia
                        </div>
                        <div>
                            <i class="fa fa-btn fa-birthday-cake"></i>
                            {{ Auth::user()->dob()->format('M d, Y') }}
                            (25 y.o.)
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a
                    id="profile-details-toggle"
                    href="javascript:"
                ><i class="fa fa-caret-down"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#profile-details-toggle").click(function () {
        $("#profile-details").toggle();
        var fa = $(this).find('i.fa');
        if (fa.hasClass('fa-caret-down')) {
            fa.removeClass('fa-caret-down');
            fa.addClass('fa-caret-up');
        } else {
            fa.removeClass('fa-caret-up');
            fa.addClass('fa-caret-down');
        }
    });
</script>
@endsection