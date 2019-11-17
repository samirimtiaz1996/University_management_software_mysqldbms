<?php

namespace App\Http\Controllers;
use App\Room;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function inputteacherdata(){
        new Teacher();
        $Room = new Room();
        $datas=$Room->show();

        return view('internals.addteacher',['datas'=>$datas]);

    }
    public function insert(){
        $Teacher=new Teacher();
        $Teacher->insert();


    }
    public function show()
    {
 //       $Teacher = new Teacher();
  //     $data=$Teacher->show();
  //     return view('internals.addteacher',compact('data'));
//

    }
    public function store(){
        $data= request()->validate([
            'teacherid'=>'required',
            'teachername'=>'required|String|min:3',
            'password'=>'required',
            'email'=>'required|email',
            'phoneno'=>'required',
            'roomno'=>'required',
            'roomblock'=>'required',


        ]);
        $Room = new Room();
        $datas=$Room->show();

        view('internals.addteacher'
            ,['datas'=>$datas]
        );

        $this->insert();
        return back();
    }
    public function viewteacherdata()
    {
        $Teacher = new Teacher();
        $datas = $Teacher->show();
        return view('internals.viewteacherdata'
            , ['datas' => $datas]
        );
    }
        public function edit(){

            $Teacher = new Teacher();
            $Tdatas=$Teacher->show();
            $Room = new Room();
            $Rdatas=$Room->show();
            return view('internals.editteacher',compact('Tdatas','Rdatas'));
        }
        public function storeforedit(){
            $data= request()->validate([
                'teacherid'=>'required',
                'teachername'=>'required|String|min:3',
                'password'=>'required',
                'email'=>'required|email',
                'phoneno'=>'required',
                'roomno'=>'required',
                'roomblock'=>'required',


            ]);
            $Room = new Room();
            $Rdatas=$Room->show();
            $Teacher = new Teacher();
            $Tdatas=$Teacher->show();
            $Teacher->edit();
            view('internals.editteacher'
                ,['Tdatas'=>$Tdatas,'Rdatas'=>$Rdatas]
            );

            return back();
        }
        public function delete(){

            $Teacher = new Teacher();
            $Tdatas=$Teacher->show();
            return view('internals.deleteteacher',compact('Tdatas'));


        }
        public function storefordelete(){
            $data= request()->validate([
                'teacherid'=>'required',
            ]);
            $Teacher = new Teacher();
            $Teacher->delete();
            $Tdatas=$Teacher->show();
            view('internals.deleteteacher'
                ,['Tdatas'=>$Tdatas]);
            return back();
        }
        public function allteachersdata(){
            $Teacher = new Teacher();
            $Tdatas=$Teacher->allteacherdata();
            return view('internals.allteachersdata',compact('Tdatas'));
        }


}
