<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mrt_db;
//use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;


class MRTdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $mrt_db =mrt_db::orderby('startDate','asc')->get();

        $collection =new mrt_db();

        $mrtDbCollection =$collection->getAllData();


        return view('mrt-db.index',compact('mrtDbCollection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mrt_db =mrt_db::find($id);

        return view('mrt-db.show',compact('mrt_db'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
