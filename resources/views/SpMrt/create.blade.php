@include('SpMrt.layout.head')

@include('SpMrt.layout.header')

    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="sm:w-3/5 w-full bg-white">
        <div class="p-8">
            <form method="post" action="{{url('SpMrt.table_list')}}">
                @csrf
                <div class="row">
                    <input type="text" class="form-control" name="Chinese_sei" placeholder="姓">
                    <input type="text" class="form-control" name="Chinese_mei" placeholder="名">
                    <input type="text" class="form-control" name="Japanese_sei" placeholder="セイ">
                    <input type="text" class="form-control" name="Japanese_mei" placeholder="メイ">
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
                <!--university-->
                <select class="bg-transparent border-b m-auto block border-grey w-full mb-6 text-grey-darker pb-1" name="university">
                    <option value="" selected>出身大学</option>
                    @foreach(config('const.university') as $index1 => $name1)
                        <option value="{{$index1}}">{{$name1}}</option>
                    @endforeach
                </select>
                <!--graduation year-->
                <select class="bg-transparent border-b m-auto block border-grey w-full mb-6 text-grey-darker pb-1" name="graduation_year">
                    <option value="" selected>卒業年度</option>
                    @foreach(config('const.graduation_year') as $index1 => $name1)
                        <option value="{{$index1}}">{{$name1}}</option>
                    @endforeach
                </select>


                <input class="shadow-lg pt-3 pb-3 w-full text-white bg-indigo hover:bg-indigo-light rounded-full cursor-pointer"
                       type="submit" value="新規登録">
            </form>
            <div class="text-center mt-4">
                <p class="text-sm text-grey-dark">登録は終わりましたか? <a href="/SpMrt" class="no-underline text-indigo font-bold hover:text-indigo-lighter">Sign in</a></p>
            </div>
        </div>
    </div>

@include('SpMrt.layout.footer')
