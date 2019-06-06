@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/login">Go Back</a>
    <h1>Create Login</h1>
    {!! Form::open(['action' => 'LoginController@store', 'method' => 'POST']) !!}
    {{ Form::Text('id') }}
    {{ Form::Text('name') }}
    {{ Form::Text('from') }}
    {{ Form::Text('password') }}
    {{ Form::Submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection