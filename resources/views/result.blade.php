@extends('layouts.head_common')

    <body>
    <div class="container">
        <h1>あだ名メーカー</h1>

        <div class="row">
            <div class="col-md-6">


                    <div class="form-group">
                        <label>Nickname: </label>
                        @foreach ($nickname as $value)
                            <br>
                            {{$name['name']}}{{$value}}
                        @endforeach
                    </div>

{{--                    <button class="btn btn-primary">Submit</button>--}}


            </div>
        </div>
    </div>
    </body>
</html>