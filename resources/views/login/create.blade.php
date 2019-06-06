@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'LoginController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('id') }}
    {{ Form::bsText('name') }}
    {{ Form::bsText('from') }}
    {{ Form::bsText('password') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection