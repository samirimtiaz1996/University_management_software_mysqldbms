<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $guarded=[];
   // protected $fillable=['name','email','active'];
    public function insert(){
      DB::connection('mysql')->insert("insert into admin
      (AdminId,AdminName,Password,Email) values
      (?,?,?,?)",
      [1,'samir','12345','samir@gmail.com']);
    }
    public function scopeActive($query){
      return $query->where('active',1);
    }
    public function scopeInactive($query){
      return $query->where('active',0);
    }
    public function companymodels(){
        return $this->belongsTo(CompanyModel::class);
    }
}
