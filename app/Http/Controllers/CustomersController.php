<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;


class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['customers']);
    }
  public function list(){
  //  $customer_array=['john doe','samir','joy','neom'];
  //$ActiveCustomers= Customer::where('active',1)->get();
 //  $InactiveCustomers= Customer::where('active',0)->get();
 $ActiveCustomers= Customer::active()->get();
 $InactiveCustomers= Customer::inactive()->get();
 $companies=Company::all();
    //$customers=Customer::all();
  //  dd($customers);

    return view('internals.customers',compact('ActiveCustomers','InactiveCustomers','companies'));
//  //  ['customers_key'=>$customer_array,]);
//  ['active_customers_key'=>$ActiveCustomers,
  //  'inactive_customers_key'=>$InactiveCustomers
//    ]);

  }
  public function insert(){
    $Customer=new Customer();
    $Customer->insert();
    echo "successfully inserted";
  }
  public function store(){
    $data= request()->validate([
      'name'=>'required|String|min:3',
      'email'=>'required|email',
      'active'=>'required',
       'company_id'=>'required',

    ]);
    Customer::create($data);
  //  $Customer=new Customer();
  //  $Customer->name=request('name');
  //  $Customer->email=request('email');
  //  $Customer->active=request('active');
  //  $Customer->save();
  //  dd(request('name'));
    return back();
  }
}
