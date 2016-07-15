<style>
    @font-face {
        font-family: 'Lato';
        src: url({{ url('/thirdparty/fonts/Lato/Lato-Regular.ttf') }});
    }
    @font-face {
        font-family: 'Lato';
        src: url({{ url('/thirdparty/fonts/Lato/Lato-Hairline.ttf') }});
        font-weight: 100;
    }
    @font-face {
        font-family: 'Lato';
        src: url({{ url('/thirdparty/fonts/Lato/Lato-Light.ttf') }});
        font-weight: 200;
    }
    @font-face {
        font-family: 'Lato';
        src: url({{ url('/thirdparty/fonts/Lato/Lato-Bold.ttf') }});
        font-weight: bold;
    }
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
    [class*="ui-datepicker-"] {
        color: #333;
    }
    h1, h2, h3 {
        font-weight: 100;
    }
    .full {
        width: 100%;
    }
    .square {
        border-radius: 0;
    }
    .clipboard {
        cursor: copy;
        text-shadow: 1px 1px #e6e6e6;
    }
</style>
