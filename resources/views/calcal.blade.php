<!doctype html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
        <!-- Optional JavaScript -->
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--{{Vue.jsとVuetify}}--}}
        <title>Hello, world!</title>
    </head>

    <body>
{{--        <div id="app">--}}
{{--            <v-toolbar>--}}
{{--                <v-toolbar-side-icon></v-toolbar-side-icon>--}}
{{--                <v-toolbar-title>Title</v-toolbar-title>--}}
{{--                <v-spacer></v-spacer>--}}
{{--                <v-toolbar-items class="hidden-sm-and-down">--}}
{{--                    <v-btn flat>Link One</v-btn>--}}
{{--                    <v-btn flat>Link Two</v-btn>--}}
{{--                    <v-btn flat>Link Three</v-btn>--}}
{{--                </v-toolbar-items>--}}
{{--            </v-toolbar>--}}
{{--        </div>--}}

        <div id="app">
            <div class="container">
                <articles></articles>
            </div>
        </div>
{{--        <script src="{{asset('/js/home.js')}}"></script>--}}
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>



