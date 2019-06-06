@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/y_list/{{$login->id}}">Go Back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['Y_listController@update', $login->id], 'method' => 'POST']) !!}
    {{ Form::bsText('id', $login->text) }}
    {{ Form::bsText('name', $login->text) }}
    {{ Form::bsText('from', $login->text) }}
    {{ Form::bsText('password', $login->text) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection