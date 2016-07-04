<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <style>
        @font-face {
            font-family: 'Lato';
            src: url(thirdparty/fonts/Lato/Lato-Regular.ttf);
        }
        @font-face {
            font-family: 'Lato';
            src: url(thirdparty/fonts/Lato/Lato-Hairline.ttf);
            font-weight: 100;
        }
        @font-face {
            font-family: 'Lato';
            src: url(thirdparty/fonts/Lato/Lato-Bold.ttf);
            font-weight: bold;
        }
    </style>
    {{ Html::style(
        'thirdparty/font-awesome/4.6.3/css/font-awesome.css'
    ) }}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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
        .table tr:hover td{
            color: #222;
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
    </style>

    @yield('style')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
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

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
