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
                    <form method="get" action="{{ url('/form') }}">
                        @csrf

                        <div class="form-group">
                            <label>Full Name: </label>
                            <input type="text" class="form-control" name="name">

                            <label>From: </label>
                            <input type="text" class="form-control" name="from">
                        </div>

                        <button class="btn btn-primary">登録</button>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>
