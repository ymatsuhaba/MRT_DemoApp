@extends('layouts.app')

@section('content')
    <h1>Login</h1>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>from</th>
                <th>password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @if(count($login) > 0)
                @foreach($login as $login)
                    <tr>
                        <td><a href="login?id={{$login -> id}}">{{$login -> id}}</a></td>
                        <td>{{$login -> name}}</td>
                        <td>{{$login -> from}}</td>
                        <td>{{$login -> password}}</td>
                        <td><a href="/login?id={{$login->id}}/edit" class="btn btn-default">EDIT{!! Form::open(['action' => ['LoginController@destroy', $login->id], 'method' => 'POST', 'class' => 'pull-right']) !!}</a></td>
                        <td>{{ Form::hidden('_method', 'DELETE') }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
@endsection