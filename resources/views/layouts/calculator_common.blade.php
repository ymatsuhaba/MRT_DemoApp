<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoitnt" content="width=device-width", initial-scale="1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Calculator</title>
{{--        <link rel="stylesheet" href="/css/app.css">--}}
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link rel="stylesheet" href="/css/calculator.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
        <script src="/js/index.js"></script>
        <script type="text/javascript">
            window.Laravel = window.Laravel || {};
            window.Laravel.csrfToken = "{{csrf_token()}}";
        </script>
    </head>

<body>



