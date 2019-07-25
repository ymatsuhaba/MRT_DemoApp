<?php

namespace App\Http\Controllers;

use App\mrt_db;

class MRTdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $collectionFromMrt_db =new mrt_db();

        $mrtDbCollection =$collectionFromMrt_db->getAllData();

        return view('mrt-db.index',compact('mrtDbCollection'));
    }

}
