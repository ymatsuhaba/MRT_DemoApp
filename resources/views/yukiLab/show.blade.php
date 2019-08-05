<ul>
    <li>ID: {{ $id }}</li>
    <li>タイトル: {{ $book_title }}</li>
    <li>著者名: {{ $author_name }}</li>
    <li>表紙</li>
    @if($image_url)
        <img src="{{$image_url}}" alt="{{$image_url}}">
    @endif
    <li>貸出フラグ{{Config::get("const.lending_situation.$lending_situation")}}</li>
</ul>
