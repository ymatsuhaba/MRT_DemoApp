<?php

namespace App\Http\Controllers;

use App\SpMrt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpMrtStoreController extends Controller
{
    public function store(Request $request)
    {
        $data_sp_mrt = new SpMrt;

        $data_sp_mrt->Chinese_sei = $request->input('Chinese_sei');
        $data_sp_mrt->Chinese_mei = $request->input('Chinese_mei');
        $data_sp_mrt->Japanese_sei = $request->input('Japanese_sei');
        $data_sp_mrt->Japanese_mei = $request->input('Japanese_mei');
        $data_sp_mrt->gender = $request->input('gender');
        $data_sp_mrt->email = $request->input('email');
        $data_sp_mrt->password = $request->input('password');

        $data_sp_mrt->save();

//        var_dump($data_sp_mrt);

//        return view('SpMrt.table_list',compact('Chinese_sei','Chinese_mei','Japanese_sei','Japanese_mei','gender','email','password'));
        return view('SpMrt.table_list',compact('data_sp_mrt'));
    }

    public function index(){
        $dataFromDB = DB::table('_sp_mrt');

        $sp_mrt_from_DB = $dataFromDB->get();

        return view('SpMrt.DB_list',compact('sp_mrt_from_DB'));
     }
}
