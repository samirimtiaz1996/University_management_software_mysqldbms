<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teacher extends Model
{
    public function insert(){
        $teacherid=request('teacherid');
        $teachername=request('teachername');
        $password=request('password');
        $email=request('email');
        $phoneno=request('phoneno');
        $roomno=request('roomno');
        $roomblock=request('roomblock');

        DB::connection('mysql')->insert("INSERT INTO teacher 
            (TeacherId, Password, 
            Email, TeacherName,PhoneNumber, Room_No,Room_Block) VALUES
            ('$teacherid','$password','$email','$teachername','$phoneno','$roomno','$roomblock')");
        DB::connection('mysql')->SELECT("Select checkid('$teacherid')");
    }
    public function show(){
        $data=DB::connection('mysql')->select("SELECT * from teacher");
        //$data = DB::select('select * from teacher');
        return $data;
    }
    public function edit(){
        $teacherid=request('teacherid');
        $teachername=request('teachername');
        $password=request('password');
        $email=request('email');
        $phoneno=request('phoneno');
        $roomno=request('roomno');
        $roomblock=request('roomblock');
        DB::connection('mysql')->update("UPDATE teacher set
            Password ='$password',  
            Email='$email', 
            PhoneNumber='$phoneno', 
            TeacherName='$teachername', 
            Room_No='$roomno',
            Room_Block='$roomblock' 
          where TeacherId='$teacherid'");
    }
    public function delete(){
        $teacherid=request('teacherid');
        DB::connection('mysql')->delete("DELETE from teacher 
          where TeacherId='$teacherid'");
    }
    public function allteacherdata(){
        $data=DB::connection('mysql')->SELECT("SELECT distinct teacher.TeacherName,teacher.PhoneNumber,
        teacher.Email,teacher.Room_No,teacher.Room_Block,
        courses.Course_Number,courses.Course_Title
        FROM teacher
        INNER JOIN courses ON teacher.TeacherId = courses.TeacherId");
        return $data;
    }

}
