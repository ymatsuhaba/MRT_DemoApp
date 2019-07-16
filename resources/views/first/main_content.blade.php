@section('main_content')
<!--メインコンテント main.cssの適応範囲-->
<div class="main_content">
    <img src="png/telephone.png" id="img2">
    <img src="png/main1.png" id="img3">
    <div id="login_form">
        <form>
            <div id="index">
                <div class="title">医師</div>
                <div class="title">採用ご担当者様</div>
            </div>

            <div class="form-group">
                <label for="colFormLabelSm" class="form_size">ログイン</label>
                <div class="form_content">
                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm">
                </div>
            </div>
            <div class="form-group">
                <label for="colFormLabel" class="form_size">パスワード</label>
                <div class="form_content">
                    <input type="email" class="form-control" id="colFormLabel">
                </div>
            </div>
            <p>パスワードお忘れの先生</p>
            <div id="submit">
                <button type="submit" class="btn btn-primary">ログイン</button>
            </div>
            <div id="create">
                <button type="submit" class="btn btn-primary">新規会員登録</button>
            </div>
        </form>
    </div>
</div>
@endsection