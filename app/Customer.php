<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];
    // protected $fillable=['name','email','active'];
    public function insert(){
        $customer_id=request('customer_id');
        $name=request('name');
        $email=request('email');
        DB::connection('mysql')->insert("insert into admin
      (AdminId,AdminName,Password,Email) values
      ('$customer_id','$name','1234','$email')");
    }
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopeInactive($query){
        return $query->where('active',0);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
    //
}
