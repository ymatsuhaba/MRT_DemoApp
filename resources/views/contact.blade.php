@extends('layouts.head_common')
<html>
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

                            <label>Nickname: </label>
                            <input type="text" class="form-control" name="nickname">
                        </div>

                        <button class="btn btn-primary">登録</button>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>
