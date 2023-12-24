<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Cardetails;
use Illuminate\Support\Facades\Hash;

class web_controller extends Controller
{
    // public function first(){
    //     return view('home');
    // }



    public function storedb(Request $request){
        echo "<pre>";
        // this is to store the data from signup page to customer table
        
        // print_r($request->all());

        $customer=new Customer;
        $customer->cust_name=$request['name'];
        $customer->cust_email=$request['email'];
        $customer->cust_address=$request['address'];
        $customer->cust_dob=$request['dob'];
        $customer->password=bcrypt($request['password']);

        $customer->save();


         return redirect('/login');

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

        // $dat=Cardetails::all();
        // $val=compact('dat');

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



    // this function is to store car details to databse

    public function uploaddt(Request $request){
        // dd($request->all());

            if (session()->has('username')){
                # code...
            
                // Create a new CarDetails instance
                $cardetails = new Cardetails;
                $cardetails->car_name = $request->input('car_name');
                $cardetails->car_model = $request->input('car_model');
                $cardetails->car_price = $request->input('car_price');
                $cardetails->car_city = $request->input('car_city');
                $cardetails->contact = $request->input('contact_no');
                

                // $imagePath='';
                // if ($request->hasFile('car_image')) {
                //     $imagePath = $request->getSchemeAndHttpHost() . '/assets/img' . time() . '.' . $request->car_image->extension();
                //     $request->car_image->move(public_path('assets/img'),$imagePath);
                // }
                // $cardetails->car_image=$imagePath;


                // hkjjhjkhkjhkhjk
                $imagePath = '';
        if ($request->hasFile('car_image')) {
            $imageName = time() . '.' . $request->car_image->extension();
            $imagePath = '/assets/img/' . $imageName;
            $request->car_image->move(public_path('assets/img'), $imageName);
        }

        $cardetails->car_image = $imagePath;
                    // fakjsdflksajdflka




                    
                // Save the CarDetails instance to the database
                $cardetails->save();

                return view('home');
            }else {
            return view('signup');
            }


    }


    // this function is to display databse data into buy blade template
    public function getbuydata(Request $request){
        $data=Cardetails::all();
        $val=compact('data');

        if (session()->has('username')) {
            return view('buy')->with($val);
        }
        return view('login');
    }



}



