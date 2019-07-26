<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
//    BookRoom一覧画面ページ
    public function bookList(){

        return view('BookRoom.bookRoom_list');
    }


}
