<?php

namespace App\Http\Controllers;

use App\yukiLab;
use Illuminate\Http\Request;

class yukiLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $yucky_books = yukiLab::all();

        return view('yukiLab.index',compact('yucky_books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yukiLab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yucky_books = new yukiLab();

        $yucky_books->author_name = $request -> input('author_name');
        $yucky_books->book_title = $request -> input('book_title');
        $yucky_books->release_date = $request -> input('release_date');
        $yucky_books->lending_situation = $request -> input('lending_situation');

        $yucky_books->save();

        return redirect()->to('yukiLab');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yucky_books =yukiLab::find($id);

        return view('yukiLab.show')->with('yucky_books',$yucky_books);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yucky_books =yukiLab::find($id);

        return view('yukiLab.edit',['yucky_books'=>$yucky_books]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $yucky_books = yukiLab::find($request->id);

        $yucky_books->author_name = $request -> input('author_name');
        $yucky_books->book_title = $request -> input('book_title');
        $yucky_books->release_date = $request -> input('release_date');
        $yucky_books->lending_situation = $request -> input('lending_situation');

        $yucky_books->save();

        return view('yukiLab',compact('yucky_books'));
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
