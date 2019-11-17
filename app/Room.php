<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    public function insert(){
        $roomno=request('roomno');
        $roomblock=request('roomblock');

        DB::connection('mysql')->insert("INSERT INTO room 
            ( Room_No,Room_Block) VALUES
            ('$roomno','$roomblock')");
    }
    public function show(){
        $data=DB::connection('mysql')->select("SELECT * from room");
        //$data = DB::select('select * from teacher');
        return $data;
    }
    public function edit(){
        $newroomno=request('newroomno');
        $newroomblock=request('newroomblock');
        $oldroomno=request('oldroomno');
        $oldroomblock=request('oldroomblock');
        $data=DB::connection('mysql')->UPDATE("UPDATE room set 
        Room_No='$newroomno',Room_Block='$newroomblock' 
        where Room_No='$oldroomno' or Room_Block='$oldroomblock'");
    }
    public function delete(){
        $roomno=request('roomno');
        $roomblock=request('roomblock');

        $data=DB::connection('mysql')->DELETE("DELETE FROM room 
        where Room_No='$roomno' and Room_Block='$roomblock'");
    }
}
