<?php

namespace App\Http\Controllers;

use App\Books;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class MRTCrudController extends Controller
{
    //お問い合わせ入力画面
    public function index()
    {
        return view('MRT_form.index');
    }

    //お問い合わせ入力結果画面
    public function result(Request $request) {

        $rules = [
            'customer'=>'required',
            'postcode'=>'required',
            'prefectures'=>'required',
            'city'=>'required',
            'block_number'=>'required',
            'building_name_or_apartment_number'=>'required',
            'tel'=>'required',
            'fax'=>'required',
        ];
        $this->validate($request, $rules);

        //入力した値を取得
        $entered =new Customer();
        $entered->customer=$request->input('customer');
        $entered->postcode= $request->input('postcode');
        $entered->prefectures= $request->input('prefectures');
        $entered->city=$request->input('city');
        $entered->block_number= $request->input('block_number');
        $entered->building_name_or_apartment_number= $request->input('building_name_or_apartment_number');
        $entered->tel= $request->input('tel');
        $entered->fax= $request->input('fax');

        //入力した値をDBに保存
        $entered->save();
        //一覧画面に値をリダイレクト
        return view('MRT_form.result',compact('entered'));
    }
}
