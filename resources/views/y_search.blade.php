@extends('layouts.head_common')

<html>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <div class="row">
        <div class="col-md-6">
            <form method="get" action="{{ url('/y_list') }}">
                @csrf

                <div class="form-group">
                    <label>ID: </label>
                    <input type="text" class="form-control" name="ID">

                    <label>Name: </label>
                    <input type="text" class="form-control" name="Name">
                    s
                    <label>From: </label>
                    <input type="text" class="form-control" name="From">

                    <label>Password: </label>
                    <input type="text" class="form-control" name="Password">
                </div>

                <button class="btn btn-primary">検索</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>