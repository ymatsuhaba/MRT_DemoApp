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
    <title>yukiLab | produced by メルカリ</title>
</head>



<body>

<header>
    <div id="content">
        <div id="create"><a href="yukiLab/create">新規登録</a></div>
    </div>
</header>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!--↓↓ 検索フォーム ↓↓-->
    <form action="{{url('yukiLab')}}" method="get" class="form-inline" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="author_name" placeholder="著者">
        </div>
        <div>
            <input type="text" class="form-control" name="book_title" placeholder="タイトル">
        </div>
        <div class="form-group">
            <input class="form-check-input" type="checkbox" name="lending" value="0">
                貸出中
            <input class="form-check-input" type="checkbox" name="in_stock" value="1">
                在庫あり
            <input class="form-check-input" type="checkbox" name="being_lost" value="2">
                紛失中
        </div>
        <div>
            <input type="date" class="form-control" id="release_date" name="release_date" min="1950-07-01" max="2019-07-31">
        </div>
        <input class="btn btn-primary mb-2" type="submit" name="submit1">
    </form>

    <form action="{{url('yukiLab')}}" method="get" class="form-inline">
        <input class="btn btn-primary mb-2" type="submit" value="idで昇順" name="sort_id_asc">
        <input class="btn btn-primary mb-2" type="submit" value="idで降順" name="sort_id_desc">
        <input class="btn btn-primary mb-2" type="submit" value="著者で昇順" name="sort_author_asc">
        <input class="btn btn-primary mb-2" type="submit" value="著者で降順" name="sort_author_desc">
        <input class="btn btn-primary mb-2" type="submit" value="発売日で昇順" name="sort_release_asc">
        <input class="btn btn-primary mb-2" type="submit" value="発売日で降順" name="sort_release_desc">
        <input class="btn btn-primary mb-2" type="submit" value="貸出状況で昇順" name="sort_lending_situation_asc">
        <input class="btn btn-primary mb-2" type="submit" value="貸出状況で降順" name="sort_lending_situation_desc">
        <input class="btn btn-primary mb-2" type="submit" value="登録日で昇順" name="sort_created_at_asc">
        <input class="btn btn-primary mb-2" type="submit" value="登録日で降順" name="sort_created_at_desc">
    </form>

    <form action="{{url('yukiLab')}}" method="get" class="form-inline">
        <input class="btn btn-primary mb-2" type="submit" value="全件削除" name="destroy_all">
    </form>

<!--↑↑ 検索フォーム ↑↑-->

<div id="yucky_books">
    <form action="{{url('yukiLab')}}" method="get">
    @if(count($yucky_books) > 0)
        @foreach($yucky_books as $yucky_book)
            <div id="box">
                <div id=checkbox><input type="checkbox" name="id[]" value="{{$yucky_book->id}}"></div>
                <div id="id">{{$yucky_book->id}}</div>
                <div id="title"><a href="yukiLab/{{$yucky_book->id}}">{{$yucky_book->book_title}}</a></div>
                <div id="author">{{$yucky_book->author_name}}</div>
            </div>
            <div id="box2">
                <div id="release_date">{{$yucky_book->release_date}}</div>
                <div id="lending_situation">{{Config::get("books.lending_situation.$yucky_book->lending_situation")}}</div>
                <div id="created_at">{{$yucky_book->created_at}}</div>
                <div id="edit"><a href="yukiLab/{{$yucky_book->id}}/edit">編集</a></div>
            </div>
        @endforeach
    @endif
        <input class="btn btn-primary mb-2" type="submit" value="選択削除" name="delete">
    </form>
</div>

</body>
</html>