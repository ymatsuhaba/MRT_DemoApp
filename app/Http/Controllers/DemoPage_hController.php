<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Doctor;

class DemoPage_hController extends Controller
{
    //検索ページを表示
    public function start()
    {
        return view('/DemoPage_h');
    }
}