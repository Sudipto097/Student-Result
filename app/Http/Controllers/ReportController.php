<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Students;
use App\Models\Subject;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function subjectAdd(){

        $data['student']=Students::all();
        $data['subject']=Subject::all();
      return view('Report.create',$data);
    }

    public function store(Request $request){
        $data= new Report;
        $data->student_id = $request->student_id;
        $data->subject_id = $request->subject_id;
        $data->total_marks = $request->total_marks;
        $data->save();
        return back();
    }

}
