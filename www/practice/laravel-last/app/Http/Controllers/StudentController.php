<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function searchOne()
    {
//        $pdo = DB::connection()->getPdo();
//        if ($pdo) {
//            echo 'success';
//        } else {
//            echo 'fail';
//        }
    	return view('student.index');
    }

    public function timetable()
    {
        //echo 11111111;
        $number1 = Input::get('number1');
        if ($timetable = Student::find($number1)) {
            dd($timetable);
        } else {
            //echo 'fail';
            $timetable = Student::craw($number1);
            dd($timetable);

        }
        //echo $timetable->table;
    }

    public function info()
    {
        //echo 1111;
        $number2 = Input::get('number2');
        if ($info = Student::find($number2)) {
            dd($info);
        } else {
            //echo 'fail';
            $info = Student::craw2($number2);
            dd($info);

        }
    }
}














