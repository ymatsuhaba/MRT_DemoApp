<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class EmployeeController extends Controller
{
    public function select(Request $request){

        //値を取得
        $dept_name = $request->input('dept_name');
        $pref = $request->input('pref');

        // 検索QUERY
        $get_all_employee = DB::table('employees')
            ->leftJoin('depts', 'employees.dept_id', '=', 'depts.id');

        // もし「部署名」があれば
        if(!empty($dept_name)){
            $get_all_employee->where('dept_name','like','%'.$dept_name.'%');
        }

        // もし「都道府県」があれば
        if(!empty($pref)){
            $get_all_employee->where('address','like','%'.$pref.'%');
        }

        // ページネーション
//        $employees = $get_all_employee;
        $employees = $get_all_employee->orderBy('employees.dept_id', 'desc')->paginate(5);;

        // ビューへ渡す値を配列に格納
        $hash = array(
            'dept_name' => $dept_name, //pass parameter to pager
            'pref' => $pref, //pass parameter to pager
            'employees' => $employees, //Eloquent
        );

        return view('employee.list')->with($hash);
    }
}
