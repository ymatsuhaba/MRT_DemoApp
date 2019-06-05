<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{
    // Searchページ
    public function search()
    {
        return view('search');
    }
}