<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index()

    {
        $employee = DB::select('select * from employees');
        return view('employees', compact('employee'));
        // dd($employee=DB::insert ("INSERT INTO regions (REGION_ID,REGION_NAME) VALUES (? , ?)" , [10 , 'insert from raghda']));
        //  dd($employee=DB::update("update regions set REGION_NAME='Raghda' where REGION_ID=10"));
        //dd($employee=DB::delete("delete from regions where REGION_ID=10"));
    }
}
