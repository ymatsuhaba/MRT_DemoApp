<?php

namespace App\Http\Controllers;

use App\yukiLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class yukiLabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $yucky_books = yukiLab::all();

//        if (Input::get('submit1')){
//            $this->search();
//        }elseif(Input::get('submit2')){
//            $this->delete();
//        }

//        return view('yukiLab.index',compact('yucky_books'));

        $dataFromDB = DB::table('yucky_books');


        //検索フォーム
        if(Input::get('submit1')){
            $book_title = $request->input('book_title');
            $author_name = $request->input('author_name');
            $lending = $request->input('lending');
            $in_stock = $request->input('in_stock');
            $being_lost = $request->input('being_lost');
            $release_date = $request->input('release_date');


            if (isset($book_title)) {
                $dataFromDB->where('book_title', 'LIKE', "%{$book_title}%");
            }

            if (isset($author_name)) {
                $dataFromDB->where('author_name', 'LIKE', "%{$author_name}%");
            }

            if (isset($lending) || isset($in_stock) || isset($being_lost)) {
                // 貸出中が選択されている場合
                if (isset($lending) && !isset($in_stock) && !isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $lending);
                }
                // 在庫ありが選択されている場合
                if (!isset($lending) && isset($in_stock) && !isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $in_stock);
                }
                // 在庫ありが選択されている場合
                if (!isset($lending) && !isset($in_stock) && isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $being_lost);
                }
            }

            if (isset($release_date)) {
                $dataFromDB->where('release_date', $release_date);
            }

         }

        //削除フォーム
        if(Input::get('submit2')){
            $id = $request->input('id');

            if(isset($id)){
                $dataFromDB->where('id', $id)->delete();
            }
        }
        $yucky_books = $dataFromDB->get();

        return view('yukiLab.index',compact('yucky_books'));
    }


//    public function search(Request $request){}


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
        //バリデーションをかける
        $request->validate([
            'author_name' => 'required',
            'book_title' => 'required',
            'release_date'=>'required',
            'image_url' =>['required','file','image','mimes:jpeg,png']
        ]);

        $yucky_books = new yukiLab();

        $yucky_books->author_name = $request->input('author_name');
        $yucky_books->book_title = $request->input('book_title');
        $yucky_books->release_date = $request->input('release_date');
        $yucky_books->lending_situation = $request->input('lending_situation');

        //画像ファイルの登録処理
            //画像のデータの登録
            $filename_with_ext = $request->file('image_url')->getClientOriginalName();
            $filename = pathinfo($filename_with_ext, PATHINFO_FILENAME);
            $extention = $request->file('image_url')->getClientOriginalExtension();
            //ファイル名の作成
            $filename_store = $filename.'_'.time().'.'.$extention;
            //upload
            $yucky_books->image_url = $request->file('image_url')->storeAs('/public/yukiLabPng', $filename_store);

        //DBに保存する
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

        return view('yukiLab.show',[
            'id'=>$yucky_books->id,
            'book_title'=>$yucky_books->book_title,
            'author_name'=>$yucky_books->author_name,
            'image_url' => str_replace('public/', 'storage/', $yucky_books->image_url),
            'lending_situation'=>$yucky_books->lending_situation,
            ]);
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
        //バリデーションをかける
        $request->validate([
            'author_name' => 'required',
            'book_title' => 'required',
            'release_date'=>'required',
            'image_url' =>['required','file','image','mimes:jpeg,png']
        ]);

        $yucky_books = new yukiLab();

        $yucky_books->author_name = $request->input('author_name');
        $yucky_books->book_title = $request->input('book_title');
        $yucky_books->release_date = $request->input('release_date');
        $yucky_books->lending_situation = $request->input('lending_situation');

        //画像ファイルの登録処理
        //画像のデータの登録
        $filename_with_ext = $request->file('image_url')->getClientOriginalName();
        $filename = pathinfo($filename_with_ext, PATHINFO_FILENAME);
        $extention = $request->file('image_url')->getClientOriginalExtension();
        //ファイル名の作成
        $filename_store = $filename.'_'.time().'.'.$extention;
        //upload
        $yucky_books->image_url = $request->file('image_url')->storeAs('public/yukiLabPng', $filename_store);

        //DBに保存する
        $yucky_books->save();

        return redirect()->to('yukiLab');

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
