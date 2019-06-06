@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Go Back</a>
    <h1><a href="login/{{$login->id}}">{{$login->id}}</a></h1>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>from</th>
            <th>password</th>
        </tr>

        @if(count($login) > 0)
            @foreach($login as $login)
                <tr>
                    <td><a href="login/{{$login -> id}}">{{$login -> id}}</a></td>
                    <td>{{$login -> name}}</td>
                    <td>{{$login -> from}}</td>
                    <td>{{$login -> password}}</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection



{{--    <h1><a href="login/{{$login->id}}">{{$login->id}}</a></h1>--}}
{{--    <div class="label label-danger">{{$login->text}}</div>--}}
{{--    <hr>--}}
{{--    <p>{{$login->text}}</p>--}}
{{--    <br><br>--}}
{{--    <a href="/login/{{$login->id}}/edit" class="btn btn-default">Edit</a>--}}
{{--    {!! Form::open(['action' => ['LoginController@destroy', $login->id], 'method' => 'POST', 'class' => 'pull-right']) !!}--}}
{{--    {{ Form::hidden('_method', 'DELETE') }}--}}
{{--    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}--}}
{{--    {!! Form::close() !!}--}}