<html>
<head>

</head>
<body>
<div class="container">
    <h1>お問い合わせ内容</h1>

    <div class="row">
        <form method="get" action="{{ url('/newresult') }}">
            @csrf
            <div class="form-group">
                    @foreach ($new as $new)

                       <p>{{$new ->name}}
                           {{$new ->content}}</p>
                    @endforeach

            </div>
        </form>
    </div>
</div>
</body>
</html>