
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <a class="btn btn-default" href="/login/{{$login->id}}">Go Back</a>--}}
{{--    <h1>Edit Login</h1>--}}
{{--    {!! Form::open(['action' => ['LoginController@update', $login->id], 'method' => 'POST']) !!}--}}
{{--    {{ Form::Text('id', $login->id) }}--}}
{{--    {{ Form::Text('name', $login->name) }}--}}
{{--    {{ Form::Text('from', $login->from) }}--}}
{{--    {{ Form::Text('password', $login->password) }}--}}
{{--    {{ Form::hidden('_method', 'PUT') }}--}}
{{--    {{ Form::Submit('Submit', ['class' => 'btn btn-primary']) }}--}}
{{--    {!! Form::close() !!}--}}
{{--@endsection--}}


@extends('layouts.app')

@section('content')
    <h1>Create Login</h1>
    <a class="btn btn-default" href="/login">Go Back</a>
    {!! Form::open(['action' => 'LoginController@store', 'method' => 'POST']) !!}
    {{ Form::Text('id',$login->id) }}
    {{ Form::Text('name',$login->name) }}
    {{ Form::Text('from',$login->from) }}
    {{ Form::Text('password',$login->password) }}
    {{ Form::Submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection