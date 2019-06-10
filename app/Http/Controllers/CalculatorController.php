<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calculator.index');
    }

//足し算をする
    public function add(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $number = $num1 + $num2;

        return view ('calculator.add',compact('number'));
    }

//引き算をする
    public function subtract(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $number = $num1 - $num2;

        return view ('calculator.subtract',compact('number'));
    }

//掛け算をする
    public function multify(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $number = $num1 * $num2;

        return view ('calculator.multify',compact('number'));
    }

//割り算をする
    public function divide(){

        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $number = $num1 / $num2;

        return view ('calculator.divide',compact('number'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
