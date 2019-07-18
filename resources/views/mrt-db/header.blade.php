@section('header')
<!--ヘッダー header.cssの適応範囲-->
<header>
    <div id="container">
        <div id="logo">
            <a href="https://medrt.com/"><img src="png/logo.png" id="img1" alt="logo"></a>
        </div>
        <div id="sentence">
           医療を想い、社会に貢献する。
        </div>
        <div class="SerAndArea">
            <div class="service">
                <button type="button" class="btn" data-container="body" data-toggle="popover">運営会社</button>
                <button type="button" class="btn" data-container="body" data-toggle="popover">サービス一覧</button>
                <button type="button" class="btn" data-container="body" data-toggle="popover">お問い合わせ</button>
                <button type="button" class="btn" data-container="body" data-toggle="popover">推奨環境</button>
            </div>
            <div class="recruit">
                <div class="Area"><a href="#">東海エリアの求人募集</a></div>
                <div class="Area"><a href="#">関西エリアの求人募集</a></div>
            </div>
        </div>
    </div>
</header>
@endsection