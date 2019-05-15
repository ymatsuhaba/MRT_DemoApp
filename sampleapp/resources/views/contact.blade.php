@extends('layouts.head_common')

        <style>
            .invalid-feedback{
               display: block; 
            }
            </style>
    </head>
    <body>
        <div class="container">
            <h1>Contact Us</h1>

            <div class="row">
                <div class="col-md-6">
                @if (Session::has('flash-message'))
                    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                @endif
                    <form method="post" type="hidden" action="{{ url('/form') }}">
                        @csrf

                        <div class="form-group">
                            <label>Full Name: </label>
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
        @extends('form')
    </body>
</html>


