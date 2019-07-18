<?php

use Illuminate\Database\Seeder;
use App\Recruitment;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // 1レコード
    public function run()
    {
        $recruitment = new Recruitment([
            'recruitment_id'=>'1',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-18',
            'work_end_date'=>'2019-07-19',
            'work_start_time'=>'0:00:00',
            'work_end_time'=>'1:00:00',
            'prefectures'=>'静岡県島田市中河町488番地15号',
            'location'=>'東京都',
            'salary_type'=>'1',
            'salary'=>'1324356',
            'transport_money_type'=>'2',
            'transport_money'=>'300',
            'work_form'=>'1',
            'facility_type'=>'2',
            'medical'=>'内科、外科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'2',
            'job_offer_type'=>'2',
            'work_start_date'=>'2019-07-19',
            'work_end_date'=>'2019-07-20',
            'work_start_time'=>'1:00:00',
            'work_end_time'=>'2:00:00',
            'prefectures'=>'北海道函館市小安山町966番地4号',
            'location'=>'群馬県',
            'salary_type'=>'2',
            'salary'=>'123456546',
            'transport_money_type'=>'1',
            'transport_money'=>'2000',
            'work_form'=>'2',
            'facility_type'=>'1',
            'medical'=>'外科、眼科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'3',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-20',
            'work_end_date'=>'2019-07-21',
            'work_start_time'=>'2:00:00',
            'work_end_time'=>'3:00:00',
            'prefectures'=>'熊本県荒尾市川登250番地7号',
            'location'=>'埼玉県',
            'salary_type'=>'1',
            'salary'=>'245588736',
            'transport_money_type'=>'2',
            'transport_money'=>'300',
            'work_form'=>'2',
            'facility_type'=>'1',
            'medical'=>'整形外科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'4',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-21',
            'work_end_date'=>'2019-07-22',
            'work_start_time'=>'3:00:00',
            'work_end_time'=>'4:00:00',
            'prefectures'=>'愛媛県宇和島市三間町土居中447番地1号',
            'location'=>'千葉県',
            'salary_type'=>'1',
            'salary'=>'367720926',
            'transport_money_type'=>'1',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'1',
            'medical'=>'産婦人科、歯科、眼科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'5',
            'job_offer_type'=>'2',
            'work_start_date'=>'2019-07-22',
            'work_end_date'=>'2019-07-23',
            'work_start_time'=>'4:00:00',
            'work_end_time'=>'5:00:00',
            'prefectures'=>'愛媛県西予市城川町高野子441番地13号',
            'location'=>'北海道',
            'salary_type'=>'2',
            'salary'=>'489853116',
            'transport_money_type'=>'1',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'2',
            'medical'=>'肛門科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'6',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-23',
            'work_end_date'=>'2019-07-24',
            'work_start_time'=>'5:00:00',
            'work_end_time'=>'6:00:00',
            'prefectures'=>'三重県四日市市万古町842番地15号',
            'location'=>'鹿児島県',
            'salary_type'=>'2',
            'salary'=>'611985306',
            'transport_money_type'=>'2',
            'transport_money'=>'1000',
            'work_form'=>'2',
            'facility_type'=>'2',
            'medical'=>'小児科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'7',
            'job_offer_type'=>'2',
            'work_start_date'=>'2019-07-24',
            'work_end_date'=>'2019-07-25',
            'work_start_time'=>'6:00:00',
            'work_end_time'=>'7:00:00',
            'prefectures'=>'岩手県宮古市田老鈴子沢24番地7号',
            'location'=>'東京都',
            'salary_type'=>'1',
            'salary'=>'734117496',
            'transport_money_type'=>'2',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'2',
            'medical'=>'内科、外科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'8',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-25',
            'work_end_date'=>'2019-07-26',
            'work_start_time'=>'7:00:00',
            'work_end_time'=>'8:00:00',
            'prefectures'=>'栃木県塩谷郡高根沢町花岡336番地7号',
            'location'=>'群馬県',
            'salary_type'=>'2',
            'salary'=>'856249686',
            'transport_money_type'=>'1',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'1',
            'medical'=>'外科、眼科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'9',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-26',
            'work_end_date'=>'2019-07-27',
            'work_start_time'=>'8:00:00',
            'work_end_time'=>'9:00:00',
            'prefectures'=>'千葉県山武郡芝山町新井田新田609番地19号',
            'location'=>'埼玉県',
            'salary_type'=>'1',
            'salary'=>'978381876',
            'transport_money_type'=>'2',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'1',
            'medical'=>'整形外科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'10',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-27',
            'work_end_date'=>'2019-07-28',
            'work_start_time'=>'9:00:00',
            'work_end_time'=>'10:00:00',
            'prefectures'=>'福岡県久留米市梅満町379番地14号',
            'location'=>'千葉県',
            'salary_type'=>'1',
            'salary'=>'1100514066',
            'transport_money_type'=>'1',
            'transport_money'=>'1000',
            'work_form'=>'1',
            'facility_type'=>'2',
            'medical'=>'産婦人科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'11',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-28',
            'work_end_date'=>'2019-07-29',
            'work_start_time'=>'10:00:00',
            'work_end_time'=>'11:00:00',
            'prefectures'=>'京都府京都市右京区嵯峨大沢町346番地4号',
            'location'=>'北海道',
            'salary_type'=>'2',
            'salary'=>'1222646256',
            'transport_money_type'=>'2',
            'transport_money'=>'1000',
            'work_form'=>'2',
            'facility_type'=>'2',
            'medical'=>'肛門科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'12',
            'job_offer_type'=>'2',
            'work_start_date'=>'2019-07-29',
            'work_end_date'=>'2019-07-30',
            'work_start_time'=>'11:00:00',
            'work_end_time'=>'12:00:00',
            'prefectures'=>'佐賀県伊万里市南波多町笠椎536番地4号',
            'location'=>'鹿児島県',
            'salary_type'=>'1',
            'salary'=>'1344778446',
            'transport_money_type'=>'1',
            'transport_money'=>'1000',
            'work_form'=>'2',
            'facility_type'=>'1',
            'medical'=>'小児科',
        ]);
        $recruitment->save();

        $recruitment = new Recruitment([
            'recruitment_id'=>'13',
            'job_offer_type'=>'1',
            'work_start_date'=>'2019-07-30',
            'work_end_date'=>'2019-07-31',
            'work_start_time'=>'12:00:00',
            'work_end_time'=>'13:00:00',
            'prefectures'=>'宮城県刈田郡七ヶ宿町下八合272番地13号',
            'location'=>'東京都',
            'salary_type'=>'1',
            'salary'=>'1466910636',
            'transport_money_type'=>'2',
            'transport_money'=>'1000',
            'work_form'=>'2',
            'facility_type'=>'2',
            'medical'=>'内科、外科',
        ]);
        $recruitment->save();
    }
}
