<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="text/css" http-equiv="Content-Type">
        <meta content="text/javascript" http-equiv="Content-Type">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--font Awesomeの使用-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--　CSSの適応-->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>SP版　MRT</title>
    </head>

<header>

</header>
<body>


    <div class="sm:w-3/5 w-full bg-white">
        <div class="p-8">
            <form method="post" action="{{url('SpMrt.table_list')}}">
                @csrf
{{--                @method('patch')--}}
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="Chinese_sei" placeholder="姓">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Chinese_mei" placeholder="名">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="Japanese_sei" placeholder="セイ">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Japanese_mei" placeholder="メイ">
                    </div>
                </div>
                <!--姓-->
                <div id="title">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="male">男</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="female">女</label>
                    </div>
                </div>
                <!---->
                <input id="email" class="bg-transparent border-b m-auto block border-grey w-full mb-6 text-grey-darker pb-1" type="text"
                       name="email" placeholder="メールアドレス"/>
                <input id="password" class="bg-transparent border-b m-auto block border-grey w-full mb-6 text-grey-darker pb-1"
                       name="password" type="text" placeholder="パスワード"/>
                <input class="shadow-lg pt-3 pb-3 w-full text-white bg-indigo hover:bg-indigo-light rounded-full cursor-pointer"
                       type="submit" value="新規登録">
            </form>
            <div class="text-center mt-4">
                <p class="text-sm text-grey-dark">Already have an account? <a href="#" class="no-underline text-indigo font-bold hover:text-indigo-lighter">Sign in</a></p>
            </div>
        </div>
    </div>




</body>
</html>