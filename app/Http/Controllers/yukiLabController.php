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
        $dataFromDB = DB::table('yucky_books');

        //検索フォーム
        if(Input::get('submit1')){
            $book_title = $request->input('book_title');
            $author_name = $request->input('author_name');
            $lending = $request->input('lending');
            $in_stock = $request->input('in_stock');
            $being_lost = $request->input('being_lost');
            $release_date = $request->input('release_date');

            //タイトルで検索
            if (isset($book_title)) {
                $dataFromDB->where('book_title', 'LIKE', "%{$book_title}%");
            }
            //著者名で検索
            if (isset($author_name)) {
                $dataFromDB->where('author_name', 'LIKE', "%{$author_name}%");
            }
            //貸出フラグで検索
            if (isset($lending) || isset($in_stock) || isset($being_lost)) {
                // 貸出中が選択されている場合
                if (isset($lending) && !isset($in_stock) && !isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $lending);
                }
                // 在庫ありが選択されている場合
                if (!isset($lending) && isset($in_stock) && !isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $in_stock);
                }
                // 紛失中が選択されている場合
                if (!isset($lending) && !isset($in_stock) && isset($being_lost)) {
                    $dataFromDB->where('lending_situation', $being_lost);
                }
            }
            //発売日で検索
            if (isset($release_date)) {
                $dataFromDB->where('release_date', $release_date);
            }

         }


        //orderbyするためのフォーム
            //idで昇順・降順
        if(Input::get('sort_id_asc')){
            $dataFromDB->orderby('id','asc');
        }elseif (Input::get('sort_id_desc')){
            $dataFromDB->orderby('id','desc');
            //author_nameで昇順・降順
        }elseif (Input::get('sort_author_asc')){
            $dataFromDB->orderby('author_name','asc');
        }elseif (Input::get('sort_author_desc')){
            $dataFromDB->orderby('author_name','desc');
            //release_dateで昇順・降順
        }elseif (Input::get('sort_release_asc')){
            $dataFromDB->orderby('release_date','asc');
        }elseif (Input::get('sort_release_desc')){
            $dataFromDB->orderby('release_date','desc');
            //lending_situationで昇順・降順
        }elseif (Input::get('sort_lending_situation_asc')){
            $dataFromDB->orderby('lending_situation','asc');
        }elseif (Input::get('sort_lending_situation_desc')){
            $dataFromDB->orderby('release_date','desc');
            //create_atで昇順・降順
        }elseif (Input::get('sort_created_at_asc')){
            $dataFromDB->orderby('created_at','asc');
        }elseif (Input::get('sort_created_at_desc')){
            $dataFromDB->orderby('created_at','desc');
        }


        //選択削除フォーム
        if(Input::get('delete')){
            $id = $request->input('id');

            if(isset($id)) {
                $dataFromDB->where('id',$id)->delete();
            }
        }

//        //全件削除フォーム
        if(Input::get('destroy_all')){
            $dataFromDB->delete();
        }


        //取得してviewに返す
        $yucky_books = $dataFromDB->get();

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
        //バリデーションをかける
        $request->validate([
            'author_name' => 'required|string|max:10',
            'book_title' => 'required|string|max:30',
            'release_date'=>'required',
            'image_url' =>['required','file','image','mimes:jpeg,png']
        ]);

        //インスタンス化
        $yucky_books = new yukiLab();

        //変数に入れる
        $yucky_books->author_name = $request->input('author_name');
        $yucky_books->book_title = $request->input('book_title');
        $yucky_books->release_date = $request->input('release_date');
        $yucky_books->lending_situation = $request->input('lending_situation');

        //画像ファイルの登録処理
            //画像のデータの登録
            $filename_with_ext = $request->file('image_url')->getClientOriginalName();
            $filename = pathinfo($filename_with_ext, PATHINFO_FILENAME);
            $extention = $request->file('image_url')->getClientOriginalExtension();
            //文字列結合
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
        $yucky_books->update($request->all());

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
