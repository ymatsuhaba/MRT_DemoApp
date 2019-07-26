<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/yukiLab/reset.css">
    <link rel="stylesheet" type="text/css" href="css/yukiLab/index.css">
    <link rel="stylesheet" type="text/css" href="css/yukiLab/header.css">
    <link rel="stylesheet" type="text/css" href="css/yukiLab/yucky_books.css">
    <title>Hello, world!</title>
</head>



<body>

<header>
    <div><a href="yukiLab/create">新規登録</a></div>
    <div><a href="yukiLab/update">更新</a></div>
</header>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!--↓↓ 検索フォーム ↓↓-->
<div class="col-sm-4">
    <form class="form-inline" action="{{url('/yukiLab')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="タイトル">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="著者">
        </div>
        <div class="form-group">
            <input class="form-check-input" type="checkbox" id="gridCheck">
                Check me out
            <input class="form-check-input" type="checkbox" id="gridCheck">
                Check me out
            <input class="form-check-input" type="checkbox" id="gridCheck">
                Check me out
        </div>
            <bottom type="submit" class="btn btn-primary mb-2">検索</bottom>
    </form>
</div>
<!--↑↑ 検索フォーム ↑↑-->
<div id="yucky_books">
    @if(count($yucky_books) > 0)
        @foreach($yucky_books as $yucky_book)
            <p>
            <li><a href="{{ url('yuckLab'.$yucky_book->id) }}">{{$yucky_book->id}}</a>{{$yucky_book->book_title}}
                {{$yucky_book->author_name}}
                {{$yucky_book->release_date}}
                {{Config::get("books.lending_situation.$yucky_book->lending_situation")}}
                {{$yucky_book->create_at}}</li>
            </p>
        @endforeach
    @endif
</div>

</body>
</html>