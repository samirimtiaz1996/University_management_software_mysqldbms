<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    public function insert(){
        $coursenumber=request('coursenumber');
        $coursetitle=request('coursetitle');
        $status=request('status');
        $obtainedpoint=request('obtainedpoint');
        $credit=request('credit');
        $studentid=request('studentid');
        $teacherid=request('teacherid');

        DB::connection('mysql')->insert("INSERT INTO courses 
            ( Course_Number,Course_Title,Status,Obtained_Point,Credit,StudentId,TeacherId) VALUES
            ('$coursenumber','$coursetitle','$status','$obtainedpoint','$credit','$studentid','$teacherid')");
        DB::connection('mysql')->statement("call checkid('$coursenumber')");


    }
    public function show(){
        $data=DB::connection('mysql')->select("SELECT * from courses");
        //$data = DB::select('select * from teacher');
        return $data;
    }
    public function edit(){
        $coursenumber=request('coursenumber');
        $coursetitle=request('coursetitle');
        $status=request('status');
        $obtainedpoint=request('obtainedpoint');
        $credit=request('credit');
        $studentid=request('studentid');
        $teacherid=request('teacherid');
        $data=DB::connection('mysql')->UPDATE("UPDATE courses set 
        Course_Title='$coursetitle',Status='$status',
        Obtained_Point='$obtainedpoint',Credit='$credit',
        TeacherId='$teacherid' 
        where Course_Number='$coursenumber' and StudentId='$studentid'");
    }
    public function delete(){
        $coursenumber=request('coursenumber');
        $data=DB::connection('mysql')->DELETE("Delete FROM courses set 
        where Course_Number='$coursenumber'");
    }
}
