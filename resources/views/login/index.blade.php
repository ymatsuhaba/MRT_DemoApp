@extends('layouts.app')

@section('content')
    <h1>Login</h1>
    @if(count($logins) > 0)
        @foreach($logins as $login)
            <div class="well">
                <h3><a href="login/{{$login->id}}">{{$login->text}}</a> <span class="label label-danger">{{$login->text}}</span></h3>
            </div>
        @endforeach
    @endif
@endsection