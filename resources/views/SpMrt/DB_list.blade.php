@include('SpMrt.layout.head')

@include('SpMrt.layout.header')

    @if(count($sp_mrt_from_DB) > 0)
        @foreach($sp_mrt_from_DB as $sp_mrt_datum)
            <div class="bg-indigo-200 shadow p-2 rounded lg:w-64">
                <div class="font-sans text-lg text-gray-800 text-center">データID【{{$sp_mrt_datum->id}}】</div>
                <div class="mt-1 flex flex-no-wrap">
                    <div class="w-1/2 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->Chinese_sei}}</p>
                        <p class="text-sm font-hairline text-grey-dark">姓</p>
                    </div>
                    <div class="w-1/2 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->Chinese_mei}}</p>
                        <p class="text-xs font-hairline text-grey-dark">名</p>
                    </div>
                </div>
                <div class="mt-1 flex flex-no-wrap">
                    <div class="w-1/2 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->Japanese_sei}}</p>
                        <p class="text-xs text-grey-dark font-hairline">セイ</p>
                    </div>
                    <div class="w-1/2 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->Japanese_mei}}</p>
                        <p class="text-xs text-grey-dark font-hairline">メイ</p>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->email}}</p>
                    <p class="text-sm font-hairline text-grey-dark mt-1">Eメール</p>
                </div>

                <div class="mt-2 flex flex-no-wrap">
                    <div class="w-1/3 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{Config("const.gender.$sp_mrt_datum->gender")}}</p>
                        <p class="text-xs mt-1 text-grey-dark font-hairline">性</p>
                    </div>
                    <div class="w-1/3 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{$sp_mrt_datum->password}}</p>
                        <p class="text-xs mt-1 text-grey-dark font-hairline">パスワード</p>
                    </div>
                    <div class="w-1/3 flex-none text-center">
                        <p class="font-bold hover:bg-indigo-400">{{Config("const.graduation_year.$sp_mrt_datum->graduation_year")}}</p>
                        <p class="text-xs mt-1 text-grey-dark font-hairline">卒業年度</p>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <p class="font-bold hover:bg-indigo-400">{{Config("const.university.$sp_mrt_datum->graduation_year")}}</p>
                    <p class="text-sm font-hairline text-grey-dark mt-1">卒業大学</p>
                </div>
            </div>

            <br>
        @endforeach
    @endif

@include('SpMrt.layout.footer')
