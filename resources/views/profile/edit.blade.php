@extends('layouts.app')

@section('head')
{{ Html::style(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.css'
) }}

{{ Html::script(
    '/thirdparty/jquery-ui/1.11.4/jquery-ui.js'
) }}
@endsection

@section('style')
@parent
<style>
    .user-img-wrapper {
        position: relative;
        cursor: pointer;
    }
    .user-img-wrapper h3 {
        display: none;
        position: absolute;
        width: 100%;
        top: 50%;
    }
    .user-img-wrapper:hover .user-img {
        opacity: .4;
    }
    .user-img-wrapper:hover h3 {
        display: block;
    }
    .user-img {
        display: inline-block;
        width: 128px;
        height: 128px;
        margin: 12px;
        border: 1px solid #ddd;

        background-image: url({{ Auth()->user()->img() }});
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }

    .img {
        position: relative;
        padding: 0;
        border: 2px solid white;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: 50% 50%;
        background-repeat: no-repeat;
    }
    @media (min-width: 768px) {
        .img {
            border-width: 8px;
        }
        .add-image-container {
            padding-left: 8px;
            padding-right: 8px;
        }
    }
    @media (min-width: 992px) {
        .img {
            border-width: 16px;
        }
        .add-image-container {
            padding-left: 16px;
            padding-right: 16px;
        }
    }
    .img:before {
        content: "";
        display: block;
        padding-top: 100%;
    }
    .img div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 1px solid #f4f4f4;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="content">
                <h1>Edit Profile</h1>
                <hr>
                @include('profile.form')
            </div>
        </div>
    </div>
</div>
@include('profile.image_picker')
@endsection

@section('script')
<script>
$(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0"
    });
});
</script>
<script>
$(function() {
    $('#myModal').on('show.bs.modal', function (e) {
        $.get("{{ url('/imgs/api/'.Auth()->user()->id) }}", function(response) {
            $("#img-list").html('');
            if (!response.error && response.data.length) {
                for (var i = 0;i < response.data.length;i++) {
                    var img = $($("#img-tpl")[0]).clone(false).removeAttr('id');
                    var src = response.data[i].sm;
                    img.css('background-image', 'url({{ url('/') }}'+src+')');
                    $("#img-list").prepend(img);
                    img.data('src', response.data[i].md);
                }
            } else {
                $("#img-list").html(
                    $("<h2 class='text-center'>No Data Available</h2>")
                );
            }
            $('.img').each(function() {
                $(this).click(function() {
                    $("#img").val($(this).data('src'));
                    $("#form-img").submit();
                });
            });
        });
    });
});
</script>
@endsection