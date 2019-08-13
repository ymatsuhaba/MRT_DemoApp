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

        $request->validate([
            'Chinese_sei'=>'required|string|max:10',
            'Chinese_mei'=>'required|string|max:10',
            'Japanese_sei'=>'required|string|max:10',
            'Japanese_mei'=>'required|string|max:10',
            'email'=>'required|email',
            'gender'=>'required',
            'university'=>'required',
        ]);

        $data_sp_mrt->Chinese_sei = $request->input('Chinese_sei');
        $data_sp_mrt->Chinese_mei = $request->input('Chinese_mei');
        $data_sp_mrt->Japanese_sei = $request->input('Japanese_sei');
        $data_sp_mrt->Japanese_mei = $request->input('Japanese_mei');
        $data_sp_mrt->gender = $request->input('gender');
        $data_sp_mrt->email = $request->input('email');
        $data_sp_mrt->password = $request->input('password');
        $data_sp_mrt->university = $request->input('university');
        $data_sp_mrt->graduation_year = $request->input('graduation_year');

        $data_sp_mrt->save();

        return view('SpMrt.table_list',compact('data_sp_mrt'));
    }

    public function index(){
        $dataFromDB = DB::table('_sp_mrt');

        $sp_mrt_from_DB = $dataFromDB->get();

        return view('SpMrt.DB_list',compact('sp_mrt_from_DB'));
     }
}
