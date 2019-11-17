<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Union extends Model
{
    public function showalldata(){
        $data=DB::connection('mysql')->SELECT ("SELECT StudentId from student UNION SELECT StudentId from courses ");
        //$data = DB::select('select * from teacher');
        return $data;    }
}
