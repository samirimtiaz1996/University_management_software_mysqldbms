<?php

namespace App\Http\Controllers;



use App\Student;
use App\Room;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function inputstudentdata(){

        $Room = new Room();
        $Rdatas=$Room->show();

        return view('internals.addstudentdata',['Rdatas'=>$Rdatas]);

    }
    public function insert(){
        $Student=new Student();
        $Student->insert();


    }
    public function show()
    {
     //   $Student = new Student();
       // $datas=$Student->show();
       // return view('internals.addstudentdata',compact('datas'));


    }
        public function store(){
        $data= request()->validate([
            'studentid'=>'required',
            'studentname'=>'required|String|min:3',
            'password'=>'required',
            'dateofbirth'=>'required',
            'batch'=>'required',
            'email'=>'required|email',
            'status'=>'required',
            'roomno'=>'required',
            'roomblock'=>'required',


        ]);
            $Room = new Room();
            $Rdatas=$Room->show();
            view('internals.addstudentdata'
                ,['Rdatas'=>$Rdatas]
            );

        $this->insert();
        return back();
    }
    public function viewstudentdata(){
        $Student = new Student();
        $Sdatas=$Student->show();
        return view('internals.viewstudentdata'
            ,['Sdatas'=>$Sdatas]
        );
    }
    public function edit(){

        $Student = new Student();
        $Sdatas=$Student->show();
        $Room = new Room();
        $Rdatas=$Room->show();
        return view('internals.editstudentdata',compact('Sdatas','Rdatas'));
    }
    public function storeforedit(){
        $data= request()->validate([
            'studentid'=>'required',
            'studentname'=>'required|String|min:3',
            'password'=>'required',
            'dateofbirth'=>'required',
            'batch'=>'required',
            'email'=>'required|email',
            'status'=>'required',
            'roomno'=>'required',
            'roomblock'=>'required',


        ]);
        $Room = new Room();
        $Rdatas=$Room->show();
        $Student = new Student();
        $Sdatas=$Student->show();

        view('internals.editstudentdata'
            ,['Sdatas'=>$Sdatas,'Rdatas'=>$Rdatas]
        );
        $Student->edit();
        return back();
    }
    public function delete(){

        $Student = new Student();
        $Sdatas=$Student->show();
        return view('internals.deletestudentdata',compact('Sdatas'));
    }
    public function storefordelete(){
        $data= request()->validate([
            'studentid'=>'required',
        ]);
        $Student = new Student();
        $Sdatas=$Student->show();
        $Student->delete();
        view('internals.deletestudentdata'
            ,['Sdatas'=>$Sdatas]
        );

        return back();
    }
    public function studentstakencourseunderme(){
        $Student=new Student();
        $Sdatas=$Student->studentstakencourseunderme();
        return view('internals.studentstakencourseunderme',compact('Sdatas'));
    }
    public function allstudentsresult(){
        $Student=new Student();
        $Sdatas=$Student->allstudentsresult();
        return view('internals.allstudentsresult',compact('Sdatas'));

    }
    public function studentblock(){
        $Student=new Student();
        $Sdatas=$Student->studentblock();
        return view('internals.studentblock',compact('Sdatas'));
    }
}
