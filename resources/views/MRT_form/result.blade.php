<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--favicon--}}
    <link rel="shortcut icon" sizes="16x16" href="favicon_qp2.png">
    {{--css--}}
    <link rel="stylesheet" href="css/form.css">
    <title>お問い合わせ・お申込み結果</title>
</head>
<body>
{{--header--}}
<header>
    <img src="header_img.jpg" id="header_img">
    <img src="MRT_logo.png" id="header_img2">
</header>

{{--結果一覧テーブル--}}
<table class="table table-striped table-hover" style="text-align: center">
    <thead>
    <tr>
        <th>医療法人様名または病医院様名</th>
        <th>郵便番号</th>
        <th>住所（都道府県）</th>
        <th>住所（市区町村）</th>
        <th>住所（丁目番地）</th>
        <th>住所（建物名・部屋番号）</th>
        <th>電話番号</th>
        <th>FAX</th>
    </tr>
    </thead>
    @foreach($all_get_data as $customer)
        <tr>
            <td>{{$customer->customer}}</td>
            <td>{{$customer->postcode}}</td>
            <td>{{$customer->prefectures}}</td>
            <td>{{$customer->city}}</td>
            <td>{{$customer->block_number}}</td>
            <td>{{$customer->building_name_or_apartment_number}}</td>
            <td>{{$customer->tel}}</td>
            <td>{{$customer->fax}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>