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
        <form method="post" action="{{ route('contact.store') }}">
        {{ csrf_field() }}

            <div class="form-group">
                <label>Full Name: </label>
                <input type="text" class="form-control" name="name">
                @if ($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                @endif
            </div>

            <div class="form-group">
                    <label>Email Address: </label>
                    <input type="text" class="form-control" name="email">
                    @if ($errors->has('email'))
                    <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                @endif
                </div>

            <div class="form-group">
                    <label>Message: </label>
                    <textarea name="Message" class="form-control"></textarea>
                    @if ($errors->has('message'))
                    <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                @endif
                </div>

                <button class="btn btn-primary">Submit</button>
        </form> 
        </div>
        </div>
    </div>
    </body>
</html>