<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['addroomdata']]);
        //$this->middleware('auth')->only(['addroomdata']);
    }
    public function inputroomdata()
    {
        new Room();
        return view('internals.addroomdata');

    }

    public function insert()
    {
        $Room = new Room();
        $Room->insert();


    }

    public function show()
    {
        $Room = new Room();
        $data = $Room->show();
        return view('internals.addroomdata', compact('data'));


    }

    public function store()
    {
        $data = request()->validate([
            'roomno' => 'required',
            'roomblock' => 'required',
        ]);
        $this->insert();
        return back();
    }

    public function viewroomdata()
    {
        $Room = new Room();
        $datas = $Room->show();
        return view('internals.viewroomdata'
            , ['datas' => $datas]
        );
    }
    public function edit(){
        $Room = new Room();
        $Rdatas=$Room->show();
        return view('internals.editroomdata',compact('Rdatas'));
    }
    public function storeforedit(){
        $data= request()->validate([
            'oldroomno' => 'required',
            'oldroomblock' => 'required',
            'newroomno' => 'required',
            'newroomblock' => 'required',

        ]);
        $Room = new Room();
        $Rdatas=$Room->show();


        view('internals.editroomdata'
            ,['Rdatas'=>$Rdatas]
        );
        $Room->edit();
        return back();
    }
    public function delete(){
        $Room = new Room();
        $Rdatas=$Room->show();
        return view('internals.deleteroomdata',compact('Rdatas'));
    }
    public function storefordelete(){
        $data= request()->validate([
            'roomno' => 'required',
            'roomblock' => 'required',
        ]);
        $Room = new Room();
        $Rdatas=$Room->show();
        $Room->delete();

        view('internals.deleteroomdata'
            ,['Rdatas'=>$Rdatas]
        );

        return back();
    }
}
