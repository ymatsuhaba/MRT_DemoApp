@extends('layouts.head_common')

    <body>
    <div class="container">
        <h1>NameMaker</h1>

        <div class="row">
            <div class="col-md-6">
                @if (Session::has('flash-message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
                <form method="get" action="{{ url('/form') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nickname: </label>
                        @foreach ($nickname as $value)
                            <br>
                            {{$name['name']}}{{$value}}
                        @endforeach
                    </div>

                    <button class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
    @extends('form')
    </body>
</html>