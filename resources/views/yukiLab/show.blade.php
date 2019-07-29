<ul>
    <li>ID: {{ $yucky_books->id }}</li>
    <li>タイトル: {{ $yucky_books->book_title }}</li>
    <li>著者名: {{ $yucky_books->author_name }}</li>
    <li>表紙</li>
    <li>貸出フラグ{{Config::get("books.lending_situation.$yucky_books->lending_situation")}}</li>
</ul>