<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-with, initial-scale-1.0">
        <meta http-equiv="X-UA=Compatible" content="ie=edge">
        <title>フォーム</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    </head>
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
                </form>
            </div>
        </div>
    </div>                      
    </body>
</html>