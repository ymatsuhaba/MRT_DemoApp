@section('right')
<div id="right">
                    <div class="box">求人検索</div><!--height:35px-->
                    <!--右側のコンテンツ内容です-->
            <form class="form-inline">
                    <div class="conditions"><!--height:50px 計85px-->
                        <div class="id1">都道府県</div>
                        <div class="id2">
                            <select class="select">
                                <option selected class="font">Open this select menu</option>
                                <option value="1">東京都</option>
                                <option value="2">大阪府</option>
                                <option value="3">京都府</option>
                                <option value="3">愛知県</option>
                                <option value="3">北海道</option>
                                <option value="3">宮城県</option>
                                <option value="3">広島県</option>
                                <option value="3">福岡県</option>
                            </select>
                        </div>
                        <div class="id3">指定なし</div>
                    </div><!--conditionsクラスの終了-->

                    <div class="conditions"><!--height:50px 計135px-->
                        <div class="id1">診療科</div>
                        <div class="id2">
                            <select class="select">
                                <option selected class="font">Open this select menu</option>
                                <option value="1">内科</option>
                                <option value="2">外科</option>
                                <option value="3">婦人科</option>
                                <option value="3">小児科</option>
                                <option value="3">放射線科</option>
                                <option value="3">耳鼻科</option>
                                <option value="3">透析</option>
                                <option value="3">コンタクト</option>
                            </select>
                        </div>
                        <div class="id3">指定なし</div>
                    </div><!--conditionsクラスの終了-->



                    <div class="jobs"><!--height:50px 計185px-->
                        <div class="id1">勤務形態</div>
                        <div class="id2">
                            <div class="buttom">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">当直</label>
                            </div>
                        </div>
                        <div class="id3">
                            <div class="buttom">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">日直・日当直</label>
                            </div>
                        </div>
                    </div><!--jobsクラスの終了-->

                    <div class="salary"><!--height:50px 計235px-->
                        <div class="id1">都道府県</div>
                        <div class="id2">
                                <form class="form-inline">
                                    <input type="number" name="salary" id="customNumberSalary" placeholder="希望の時給を書く欄">
                                    <label class="number-salary" for="customNumberSalary">万円以上</label>
                                </form>
                        </div>
                        <div class="id3">半角数字</div>
                    </div><!--salaryクラスの終了-->

                    <div class="salary"><!--height:50px 計285px-->
                        <div class="id1"></div>
                        <div class="id2">
                            <form class="form-inline">
                                <input type="number" name="salary" id="hopeSalary" placeholder="一回辺りの希望報酬を書く欄。">
                                <label class="number-salary" for="hopeSalary">万円以上</label>
                            </form>
                        </div>
                        <div class="id3">半角数字</div>
                    </div><!--salaryクラスの終了-->

                    <!--カレンダーの作成 calender.cssに記載-->
                    <table id="calender"><!--height:355px 計640px-->
                        <tr id="cal_title">
                            <td colspan="7">2019年7月</td>
                        </tr>
                        <tr align="center" bgcolor="#999999">
                            <td><div class="sunday">日</div></td>
                            <td><div class="day">月</div></td>
                            <td><div class="day">火</div></td>
                            <td><div class="day">水</div></td>
                            <td><div class="day">木</div></td>
                            <td><div class="day">金</div></td>
                            <td><div class="saturday">土</div></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td></td>
                            <td><div class="day">1</div><div class="number">153件</div></td>
                            <td><div class="day">2</div><div class="number">153件</div></td>
                            <td><div class="day">3</div><div class="number">153件</div></td>
                            <td><div class="day">4</div><div class="number">153件</div></td>
                            <td><div class="day">5</div><div class="number">153件</div></td>
                            <td ><div class="saturday">6</div><div class="number">153件</div></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td><div class="sunday">7</div><div class="number">153件</div></td>
                            <td><div class="day">8</div><div class="number">153件</div></td>
                            <td><div class="day">9</div><div class="number">153件</div></td>
                            <td><div class="day">10</div><div class="number">153件</div></td>
                            <td><div class="day">11</div><div class="number">153件</div></td>
                            <td><div class="day">12</div><div class="number">153件</div></td>
                            <td><div class="saturday">13</div><div class="number">153件</div></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td><div class="sunday">14</div><div class="number">153件</div></td>
                            <td><div class="day">15</div><div class="number">153件</div></td>
                            <td><div class="day">16</div><div class="number">153件</div></td>
                            <td><div class="day">17</div><div class="number">153件</div></td>
                            <td><div class="day">18</div><div class="number">153件</div></td>
                            <td><div class="day">19</div><div class="number">153件</div></td>
                            <td><div class="saturday">20</div><div class="number">153件</div></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td ><div class="sunday">21</div><div class="number">153件</div></td>
                            <td><div class="day">22</div><div class="number">153件</div></td>
                            <td><div class="day">23</div><div class="number">153件</div></td>
                            <td><div class="day">24</div><div class="number">153件</div></td>
                            <td><div class="day">25</div><div class="number">153件</div></td>
                            <td><div class="day">26</div><div class="number">153件</div></td>
                            <td><div class="saturday">27</div><div class="number">153件</div></td>
                        </tr>
                        <tr align="center" bgcolor="#FFFFFF">
                            <td><div class="sunday">28</div><div class="number">153件</div></td>
                            <td><div class="day">29</div><div class="number">153件</div></td>
                            <td><div class="day">30</div><div class="number">153件</div></td>
                            <td><div class="day">31</div><div class="number">153件</div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table><!--カレンダーテーブルの作成-->
                <button type="submit" class="btn btn-primary mb-2"><a href="mrt-db.search">Confirm identity</a></button>
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
                <form>
                    <button type="submit" class="submit"><a href="mrt-db.search">新規会員登録</a></button>
                </form>
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