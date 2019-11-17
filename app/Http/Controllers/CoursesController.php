<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class CoursesController extends Controller
{



    public function inputcoursedata(){

        new Course();
        $Student = new Student();
        $Sdatas=$Student->show();
        $Teacher = new Teacher();
        $Tdatas=$Teacher->show();
        return view('internals.addcoursedata',compact('Sdatas','Tdatas'));

    }
    public function insert(){
        $Course=new Course();
        $Course->insert();


    }
    public function show()
    {
      //  $Course = new Course();
     //   $data=$Course->show();
    //    return view('internals.addcoursedata',compact('data'));


    }
    public function store(){
        $data= request()->validate([
            'coursenumber'=>'required',
            'coursetitle'=>'required|String|min:3',
            'status'=>'required',
            'obtainedpoint'=>'required',
            'credit'=>'required',
            'studentid'=>'required',
            'teacherid'=>'required',


        ]);
        $Student = new Student();
        $Sdatas=$Student->show();
        $Teacher = new Teacher();
        $Tdatas=$Teacher->show();
        view('internals.addcoursedata',compact('Sdatas','Tdatas'));
        $this->insert();
        return back();
    }
    public function viewcoursedata(){
        $Course = new Course();
        $datas=$Course->show();
        return view('internals.viewcoursedata'
            ,['datas'=>$datas]
        );
    }
    public function edit(){
        $Course = new Course();
        $Cdatas=$Course->show();
        $Student = new Student();
        $Sdatas=$Student->show();
        $Teacher = new Teacher();
        $Tdatas=$Teacher->show();
        return view('internals.editcoursedata',compact('Cdatas','Sdatas','Tdatas'));
    }
    public function storeforedit(){
        $data= request()->validate([
            'coursenumber'=>'required',
            'coursetitle'=>'required|String|min:3',
            'status'=>'required',
            'obtainedpoint'=>'required',
            'credit'=>'required',
            'studentid'=>'required',
            'teacherid'=>'required',

        ]);
        $Course = new Course();
        $Cdatas=$Course->show();


        $Student = new Student();
        $Sdatas=$Student->show();
        $Teacher = new Teacher();
        $Tdatas=$Teacher->show();
        view('internals.editcoursedata',compact('Cdatas','Sdatas','Tdatas'));
        $Course->edit();
        return back();
    }
    public function delete(){
        $Course = new Course();
        $Cdatas=$Course->show();

        return view('internals.deletecoursedata',compact('Cdatas'));
    }
    public function storefordelete(){
        $data= request()->validate([
            'coursenumber'=>'required',


        ]);
        $Course = new Course();
        $Cdatas=$Course->show();
        $Course->delete();
        view('internals.deletecoursedata',compact('Cdatas'));

        return back();
    }
}
