<?php

namespace App;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    public function insert(){
        $studentid=request('studentid');
        $studentname=request('studentname');
        $password=request('password');
        $dateofbirth=request('dateofbirth');
        $batch=request('batch');
        $email=request('email');
        $status=request('status');
        $roomno=request('roomno');
        $roomblock=request('roomblock');

        DB::connection('mysql')->insert("INSERT INTO student 
            (StudentId, Password, Date_of_birth,Batch, 
            Email, Status, StudentName, Room_No,Room_Block) VALUES
            ('$studentid','$password','$dateofbirth','$batch','$email','$status','$studentname','$roomno','$roomblock')");
        DB::connection('mysql')->RAW("call checkid('$studentid')");

    }
    public function show(){
        $data=DB::connection('mysql')->select("SELECT * from student");
        //$data = DB::select('select * from student');
        return $data;
    }
    public function edit(){
        $studentid=request('studentid');
        $studentname=request('studentname');
        $password=request('password');
        $dateofbirth=request('dateofbirth');
        $batch=request('batch');
        $email=request('email');
        $status=request('status');
        $roomno=request('roomno');
        $roomblock=request('roomblock');
        DB::connection('mysql')->update("UPDATE student set
            Password ='$password', Date_of_birth='$dateofbirth',Batch='$batch', 
            Email='$email', Status='$status', StudentName='$studentname', Room_No='$roomno',Room_Block='$roomblock' 
          where StudentId='$studentid'");
    }
    public function delete(){
        $studentid=request('studentid');
        DB::connection('mysql')->delete("DELETE from student 
          where StudentId='$studentid'");
    }
    public function studentstakencourseunderme(){
        $user = Auth::user();
        $userEmail = $user->email;
        $datas=DB::connection('mysql')->select(("select * from student where StudentId
        in(select StudentId from courses where TeacherId in 
        (select TeacherId from teacher where Email='$userEmail'))"));
        return $datas;
    }
    public function allstudentsresult(){
        $datas=DB::connection('mysql')->Select("select StudentId,
        sum(courses.obtained_point*courses.credit)/sum(courses.credit) 
        as result from courses GROUP BY StudentId");
        return $datas;
    }
    public function studentblock(){
        $user = Auth::user();
        $userEmail = $user->email;
        $datas=DB::connection('mysql')->Select("select 
        courses.StudentId,student.StudentName,student.Email,student.Room_No,
        student.Room_Block,
        sum(courses.obtained_point*courses.credit)/sum(courses.credit) 
        as result from courses,student 
        where courses.StudentId=student.StudentId and
         student.Email='$userEmail'
        GROUP BY StudentId ");
        return $datas;

    }
}
