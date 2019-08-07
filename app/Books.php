<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;     // 追加
use Illuminate\Database\Eloquent\Collection;



class Books extends Model
{
    public $sortable = ['title', 'author','release_date','status','created_at'];    // ソート対象カラム追加

    //    一覧ページ
    public function list (Request $request) {

        $title = $request->input('title');
        $author = $request->input('author');
        $release_date = $request->input('release_date');
        $status_1 = $request->input('status_1');
        $status_2 = $request->input('status_2');
        $status_3 = $request->input('status_3');

        $books = DB::table('books');

        if (isset($title)) {
            $books->where('title', 'like', "$title");
        }
        if (isset($author)) {
            $books->where('author', $author);
        }
        if (isset($release_date)) {
            $books->where('release_date', $release_date);
        }

        // 貸出フラグ
        if (isset($status_1) || isset($status_2) || isset($status_3)) {
            // 「貸出中」が選択されていた場合
            if (isset($status_1) && !isset($status_2) && !isset($status_3)) {
                $books->where('status', $status_1);
            }
            // 「在庫あり」が選択されていた場合
            if (!isset($status_1) && isset($status_2) && !isset($status_3)) {
                $books->where('status', $status_2);
            }
            // 「紛失中」が選択されていた場合
            if (!isset($status_1) && !isset($status_2) && isset($status_3)) {
                $books->where('status', $status_3);
            }

            // 「貸出中」「在庫あり」が選択されていた場合
            if (isset($status_1) && isset($status_2) && !isset($status_3)) {
                $books->where('status', $status_1);
                $books->orwhere('status', $status_2);
            }
            // 「在庫あり」「紛失中」が選択されていた場合
            if (isset($status_1) && !isset($status_2) && isset($status_3)) {
                $books->where('status', $status_1);
                $books->orwhere('status', $status_3);
            }
            // 「紛失中」「在庫あり」が選択されていた場合
            if (!isset($status_1) && isset($status_2) && isset($status_3)) {
                $books->where('status', $status_2);
                $books->orwhere('status', $status_3);
            }
        }

        $books_list =$books->OrderBy('created_at')->get();
        return $books_list;
    }

}
