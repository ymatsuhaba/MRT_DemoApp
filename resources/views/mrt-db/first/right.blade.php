@section('right')
<div id="right">
    <div class="box">求人検索</div><!--height:35px-->
                    <!--右側のコンテンツ内容です-->
            <form method="post" action="{{url('mrt-db.second.resultSearch')}}">
                {{ csrf_field() }}
                    <div class="conditions"><!--height:50px 計85px-->
                        <div class="id1">都道府県</div>
                        <div class="id2">
                            <select class="select" name="prefecture">
                                <option value="" selected>Choose...</option>
                                    @foreach(config('prefecture') as $index1 => $name1)
                                        <option value="{{$index1}}">{{$name1}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="id3">指定なし</div>
                    </div><!--conditionsクラスの終了-->

                    <div class="conditions"><!--height:50px 計135px-->
                        <div class="id1">診療科</div>
                        <div class="id2">
                            <select class="select" name="medical">
                                <option value="" selected>Choose...</option>
                                    @foreach(config('medical') as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="id3">指定なし</div>
                    </div><!--conditionsクラスの終了-->



                    <div class="jobs"><!--height:50px 計185px-->
                        <div class="id1">勤務形態</div>
                        <div class="id2">
                                <input type="checkbox" id="customRadioInline1" name="workFormDuty" value="1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">当直</label>
                        </div>
                        <div class="id3">
                                <input type="checkbox" id="customRadioInline2" name="workFormDayDuty" value="2" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">日直・日当直</label>
                        </div>
                    </div><!--jobsクラスの終了-->

                    <div class="salary"><!--height:50px 計235px-->
                        <div class="id1">都道府県</div>
                        <div class="id2">
                                <input type="number" name="hourlySalary" id="customNumberSalary" placeholder="時給">
                                <label class="number-salary" for="customNumberSalary">円以上</label>
                        </div>
                        <div class="id3">半角数字</div>
                    </div><!--salaryクラスの終了-->

                    <div class="salary"><!--height:50px 計285px-->
                        <div class="id1"></div>
                        <div class="id2">
                                <input type="number" name="salary" id="customNumberSalary2" placeholder="一回辺り">
                                <label class="number-salary" for="customNumberSalary2">円以上</label>
                        </div>
                        <div class="id3">半角数字</div>
                    </div><!--salaryクラスの終了-->



                <div class="conditions"><!--height:50px 計135px-->
                    <div class="id1">希望日程</div>
                    <div class="id2">
                        <select class="select" name="startDate">
                            <option value="" selected>Choose...</option>
                            @foreach(config('calender') as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="id3">指定なし</div>
                </div><!--conditionsクラスの終了-->


                <button class="btn btn-primary mb-2" type="submit">Confirm identity</button>
            </form>



                    <div class="title">診療科目別
                        <div class="sentence">
                            <p><a href="#">北海道</a>|<a href="#">青森県</a>|<a href="#">岩手県</a>|<a href="#">宮城県</a>|
                                <a href="#">秋田県</a>|<a href="#">山形県</a>|<a href="#">福島県</a>|<a href="#">茨城県</a>|</p>
                            <p><a href="#">栃木県</a>|<a href="#">群馬県</a>|<a href="#">埼玉県</a>|<a href="#">千葉県</a>|
                                <a href="#">東京都</a>|<a href="#">神奈川県</a>|<a href="#">新潟県</a>|<a href="#">富山県</a>|</p>
                            <p><a href="#">石川県</a>|<a href="#">福井県</a>|<a href="#">山梨県</a>|<a href="#">長野県</a>|
                                <a href="#">岐阜県</a>|<a href="#">静岡県</a>|<a href="#">愛知県</a>|<a href="#">三重県</a>|</p>
                            <p><a href="#">滋賀県</a>|<a href="#">京都府</a>|<a href="#">大阪府</a>|<a href="#">兵庫県</a>|
                                <a href="#">奈良県</a>|<a href="#">和歌山県</a>|<a href="#">鳥取県</a>|<a href="#">島根県</a>|</p>
                            <p><a href="#">岡山県</a>|<a href="#">広島県</a>|<a href="#">山口県</a>|<a href="#">徳島県</a>|
                                <a href="#">香川県</a>|<a href="#">愛媛県</a>|<a href="#">高知県</a>|<a href="#">福岡県</a>|</p>
                            <p><a href="#">佐賀県</a>|<a href="#">長崎県</a>|<a href="#">熊本県</a>|<a href="#">大分県</a>|
                                <a href="#">宮崎県</a>|<a href="#">鹿児島県</a>|<a href="#">沖縄県</a>| </p>
                        </div>
                    </div><!--sentenceクラスの終了-->
                </div><!--right部分の終了-->
            </div>


            <!--feature.cssに記載部分-->
            <div id="feature">
                <div id="services">MRTのアルバイト(スポット)紹介サービスの特徴</div>
                <div id="merit">
                    <img src="png/speedy.png" class="picture" alt="speedy">
                    <img src="png/my_page.png" class="picture" alt="my_page">
                    <img src="png/bonus_point.png" class="picture" alt="bonus_point">
                    <img src="png/premium.png" class="picture" alt="premium">
                </div>
            </div><!--feature-->
        </div><!--main_content-->
    </div><!--tag-->
<!--都道府県の設定-->
<div id="prefecture">
    <div id="border">都道府県から求人を探す（常勤)</div>
    <div id="box">
        <div id="content">
            <p><a href="#">北海道</a>|<a href="#">青森県</a>|<a href="#">岩手県</a>|<a href="#">宮城県</a>|
                <a href="#">秋田県</a>|<a href="#">山形県</a>|<a href="#">福島県</a>|<a href="#">茨城県</a>|</p>
            <p><a href="#">栃木県</a>|<a href="#">群馬県</a>|<a href="#">埼玉県</a>|<a href="#">千葉県</a>|
                <a href="#">東京都</a>|<a href="#">神奈川県</a>|<a href="#">新潟県</a>|<a href="#">富山県</a>|</p>
            <p><a href="#">石川県</a>|<a href="#">福井県</a>|<a href="#">山梨県</a>|<a href="#">長野県</a>|
                <a href="#">岐阜県</a>|<a href="#">静岡県</a>|<a href="#">愛知県</a>|<a href="#">三重県</a>|</p>
            <p><a href="#">滋賀県</a>|<a href="#">京都府</a>|<a href="#">大阪府</a>|<a href="#">兵庫県</a>|
                <a href="#">奈良県</a>|<a href="#">和歌山県</a>|<a href="#">鳥取県</a>|<a href="#">島根県</a>|</p>
            <p><a href="#">岡山県</a>|<a href="#">広島県</a>|<a href="#">山口県</a>|<a href="#">徳島県</a>|
                <a href="#">香川県</a>|<a href="#">愛媛県</a>|<a href="#">高知県</a>|<a href="#">福岡県</a>|</p>
            <p><a href="#">佐賀県</a>|<a href="#">長崎県</a>|<a href="#">熊本県</a>|<a href="#">大分県</a>|
            <a href="#">宮崎県</a>|<a href="#">鹿児島県</a>|<a href="#">沖縄県</a>| </p>
        </div>
    </div>
</div>
@endsection