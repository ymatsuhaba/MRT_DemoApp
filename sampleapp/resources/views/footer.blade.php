<footer>
    <nav>
        <ul>
        <li><a href="welcome.blade.php">トップページ</a></li>
        <li><a href="about.blade.php">このブログについて</a></li>
        <li><a href="contact.blade.php">問い合わせフォーム</a></li>
        </ul>
    </nav>
    <p>Copyright 2018</p>

    @foreach($articles as $article)
        　　<b>{{$article->created_at->format('Y年m月d日')}}</b>
    @endforeach
</footer>
