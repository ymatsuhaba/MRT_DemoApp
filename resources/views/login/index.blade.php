@extends('layouts.app')

@section('content')

    <a class="btn btn-default" href="login/create">Create Login</a>
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
                        <td><a href="login/{{$login -> id}}">{{$login -> id}}</a></td>
                        <td>{{$login -> name}}</td>
                        <td>{{$login -> from}}</td>
                        <td>{{$login -> password}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
@endsection