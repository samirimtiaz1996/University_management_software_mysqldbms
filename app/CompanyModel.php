<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    protected $guarded=[];


    //
    public function customermodels(){
        return $this->hasMany(CustomerModel::class);
    }
}
