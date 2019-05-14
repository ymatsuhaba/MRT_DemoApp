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
        <h1>Contact Us</h1>

        <div class="row">
            <div class="col-md-6">
                @if (Session::has('flash-message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
                <form method="post" action="{{ url('/form') }}">
                    @csrf

                    <div class="form-group">
                        <label>Nickname: </label>
                        <input type="text" class="form-control" name="name">
                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
      </body>
</html>