<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    {{ r_style('/thirdparty/font-awesome/4.6.3/css/font-awesome.css') }}
    {{ r_style('thirdparty/bootstrap/3.3.6/css/bootstrap.css') }}
    @include('layouts.base.style')
    @yield('style')
    {{ r_script('js/app.js') }}
    {{ r_script('thirdparty/jquery-2.2.4.js') }}
    {{ r_script('thirdparty/bootstrap/3.3.6/js/bootstrap.js') }}
    @yield('head')
</head>
<body id="app-layout">
    @yield('_content')
    <script>
    <?php
        $app_session_lifetime = config('session.lifetime')*1000*60;
    ?>
    setInterval(refreshToken, {{ $app_session_lifetime }});
    function refreshToken() {
        $.get('{{ url('/refresh-csrf') }}').done(function (data) {
            $('[name="csrf_token"]').attr('content', data);
            $('input[name="_token"]').val(data);
        });
    }
    </script>
    @yield('script')
</body>
</html>
