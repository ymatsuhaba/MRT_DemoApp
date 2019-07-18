<?php

namespace App\Http\Controllers;

use App\Recruitment;
use App\Recruitments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LpController extends Controller
{

//    定数を指定　const 定数名 = 値;

//    const バイト = 1;
//    const 転職 = 2;
//    const 一回 = 1;
//    const その他 = 2;
//    const 『含む』 =1;
//    const 『給与と一緒に振込』 =2;
//    const 当直=1;
//    const 日直・日当直 =2;
//    const クリニック =1;
//    const 検診施設 = 2;
//    const 療養型病院 =3;
//    const 一般病院 =4;
//    const ケアミックス =5;
//    const その他 =6;


    public function index() {

        $collection =new Recruitment();
        $list_data =$collection->getalldata();

        return view('MRTLP.index',compact('list_data'));

    }
}
