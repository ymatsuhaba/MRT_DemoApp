@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/login">Go Back</a>

    <h1>{{$login->id}}</h1>
    <p>{{$login->name}}</p>
    <p>{{$login->from}}</p>
    <p>{{$login->password}}</p>

    <a href="/login/{{$login->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['LoginController@destroy', $login->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::Submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection
