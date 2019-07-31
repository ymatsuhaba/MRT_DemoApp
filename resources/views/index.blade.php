<!DOCTYPE html>
<html lang="ja">
<!-- 親テンプレート -->
@extends('views.doctor')

@section('title', 'Doctor_NameMaker')

@section('content')
    <div class="page-header">
        <h1><small>医師一覧</small></h1>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>名前</th>
            <th>出身地</th>
            <th>性別</th>
            <th>生年月日</th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctor_list as $doctor)
            <tr>
                <td>{{$doctor->doctor_id}}</td><td>{{$doctor->doctor_name}}</td><td>{{$doctor->birthplace}}</td><td>{{$doctor->sex}}</td><td>{{$doctor->date_of_birth}}</td>
                <td>
                    <a href="" class="">新規登録</a>
                    <a href="" class="">検索画面に戻る</a>
                    <a href="" class="">全件削除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- page control -->
    {!! $doctor_list->render() !!}
    @endsection
</html>