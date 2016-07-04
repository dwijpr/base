<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <style>
        @font-face {
            font-family: 'Lato';
            src: url(/thirdparty/fonts/Lato/Lato-Regular.ttf);
        }
        @font-face {
            font-family: 'Lato';
            src: url(/thirdparty/fonts/Lato/Lato-Hairline.ttf);
            font-weight: 100;
        }
        @font-face {
            font-family: 'Lato';
            src: url(/thirdparty/fonts/Lato/Lato-Light.ttf);
            font-weight: 200;
        }
        @font-face {
            font-family: 'Lato';
            src: url(/thirdparty/fonts/Lato/Lato-Bold.ttf);
            font-weight: bold;
        }
    </style>
    {{ Html::style(
        'thirdparty/font-awesome/4.6.3/css/font-awesome.css'
    ) }}
    {{ Html::style(
        'thirdparty/bootstrap/3.3.6/css/bootstrap.css'
    ) }}
    <style>
        body {
            font-family: 'Lato';
            @if(config('app.dark'))
            background: #222;
            @endif
        }

        @if(config('app.dark'))
        * {
            color: #ddd;
        }
        .panel, .table {
            background: #444;
        }
        .table.table-hover tr:hover td{
            color: #222;
        }
        .well {
            background: #555;
        }
        @else
        hr {
            border-color: #aaa;
        }
        @endif

        .fa-btn {
            margin-right: 6px;
        }

        a.no, a.no:hover {
            text-decoration: none;
            display: inline-block;
            padding: 0 4px;
        }

        footer {
            padding: 32px 0;
        }

        table {
            font-size: 14px;
        }

        .truncate {
            position: relative;
            top: 5px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        [class*="numeral-"] {
            font-family: monospace;
        }
    </style>
    @yield('style')
    {{ Html::script('js/app.js') }}
    {{ Html::script('thirdparty/jquery-2.2.4.js') }}
    {{ Html::script('thirdparty/bootstrap/3.3.6/js/bootstrap.js') }}
</head>
<body id="app-layout">
    @yield('_content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <footer>
                    <a href="{{ url('') }}">
                        &copy;{{ date('Y') }} {{ config('app.name') }}
                    </a>
                </footer>
            </div>
        </div>
    </div>
    @yield('script')
</body>
</html>
