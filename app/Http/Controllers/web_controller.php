<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class web_controller extends Controller
{
    // public function first(){
    //     return view('home');
    // }



    public function storedb(Request $request){
        echo "<pre>";
        // this is to store the data from signup page to customer table
        
        print_r($request->all());

        $customer=new Customer;
        $customer->cust_name=$request['name'];
        $customer->cust_email=$request['email'];
        $customer->cust_address=$request['address'];
        $customer->cust_dob=$request['dob'];
        $customer->password=bcrypt($request['password']);

        $customer->save();


        // return redirect('/data/view');

    }


    // public function view(){
        
    //     // echo "<pre>";
    //     $customer=Customer::all();
    //     // echo "<pre>";
    //     // print_r($data->toArray());
    //     $data=compact('customer');

    //     return view('data_view')->with($data);
    // }

    public function auth(Request $request){
        $data=Customer::all();

        $name=$request['username'];
        $password=$request['password'];


        foreach($data as $value){
            if ($value->cust_name==$name && Hash::check($password, $value->password)) {
                $request->session()->put('username',$value->cust_name);
                
                // echo session('username');
                // return view('/home');
                return view('home');
            }
        }
        return view('login');
    }   
}
