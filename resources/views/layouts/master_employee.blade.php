<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/dist/css/flat-ui.css" rel="stylesheet"><!-- Loading Flat UI -->
    <link href="../../../public/docs/assets/css/docs.css" rel="stylesheet"><!-- Loading Flat UI -->
    <link rel="shortcut icon" href="../../../public/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/style_master_employee.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('styles')
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"><!-- FontAwesome -->
</head>
<body>
<!--=================================================
Navbar
==================================================-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
        <div class="navbar-header">
            <!-- タイトルなどのテキスト -->
            <a class="navbar-brand" href="#">従業員リスト</a>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
    @yield('content')
</div><!-- /.container -->
@yield('table')
</body>
</html>