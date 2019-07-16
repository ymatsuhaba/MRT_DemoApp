 @section('main_content2')
 <!--メインコンテント2　main2.cssの適応範囲-->
 <div id="main_content2">
            <div id="LR_container">
                <div id="left">
                    <div class="box">新着情報</div><!--height:35px-->
                    <div class="content"><!--height:605px 計640px-->
                        @if(count($mrtdbs) > 0)
                            @foreach($mrtdbs as $mrtdb)
                                <p><a href="#">{{$mrtdb -> type}}&nbsp;&nbsp;|{{$mrtdb -> start_date}}~~{{$mrtdb -> end_date}}&nbsp;&nbsp;|{{$mrtdb -> prefecture}}{{$mrtdb -> place}}&nbsp;&nbsp;&nbsp;&nbsp;{{$mrtdb -> start_time}}~~{{$mrtdb -> end_time}}</a></p>
                            @endforeach
                        @endif
                    </div>
                    <div class="title">診療科目別
                        <div class="sentence">
                            <p><a href="#">内科</a>|<a href="#">外科</a>|<a href="#">整形外科</a>|<a href="#">形成外科</a></p>
                            <p><a href="#">脳外科</a>|<a href="#">婦人科</a>|<a href="#">眼科</a>|<a href="#">精神科</a></p>
                            <p><a href="#">心療内科</a>|<a href="#">麻酔科</a>|<a href="#">小児科</a>|<a href="#">放射線科</a></p>
                            <p><a href="#">耳鼻科</a>|<a href="#">皮膚科</a>|<a href="#">訪問診療</a>|<a href="#">人間ドック</a>
                            <p><a href="#">内視鏡</a>|<a href="#">透析</a>|<a href="#">検診</a>|<a href="#">往診</a></p>
                            <p><a href="#">病棟管理</a>|<a href="#">産婦人科</a>|<a href="#">口腔外科</a>|<a href="#">歯科口腔外科</a></p>
                            <p><a href="#">歯科</a>|<a href="#">コンタクト</a></p>
                        </div>
                    </div>
                </div><!--left部分の終了-->
@endsection