<?php

namespace App\Http\Controllers;
use App\Union;

use Illuminate\Http\Request;

class UnionsController extends Controller
{
    public function showalldata(){
        $Union=new Union();
        $Adata=$Union->showalldata();
        return view('internals.showalldata',compact('Adata'));

    }
}
