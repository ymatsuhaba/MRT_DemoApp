@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Go Back</a>
    <h1><a href="login/{{$login->id}}">{{$login->text}}</a></h1>
    <div class="label label-danger">{{$login->text}}</div>
    <hr>
    <p>{{$login->text}}</p>
    <br><br>
    <a href="/login/{{$login->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['Y_listController@destroy', $login->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection