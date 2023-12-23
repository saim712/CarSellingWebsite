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



    // this function is to store car details to databse

    public function uploaddt(Request $request){
        
        

        
        
        
// //         this is to save the  of image
//         $cardetails=new Cardetails;
//         $cardetails->car_name=$request['car_name'];
//         $cardetails->car_model=$request['car_model'];
//         $cardetails->car_price=$request['car_price'];
//         $cardetails->car_city=$request['car_city'];
//         $cardetails->contact=$request['contact'];
        
//         // if ($request->hasFile('car_image')) {
//             $imagePath = $request->file('car_image')->store('uploads');
//             // Rest of your code
//             $cardetails->car_image=$imagePath;
//         // }

//         $cardetails->save();

//         return view('home');




// GPT CODE
            // $request->validate([
            //     'car_name' => 'required',
            //     'car_model' => 'required',
            //     'car_price' => 'required',
            //     'car_city' => 'nullable',
            //     'contact' => 'required',
            //     'car_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // ]);

            // Create a new CarDetails instance
            $cardetails = new Cardetails;
            $cardetails->car_name = $request->input('car_name');
            $cardetails->car_model = $request->input('car_model');
            $cardetails->car_price = $request->input('car_price');
            $cardetails->car_city = $request->input('car_city');
            $cardetails->contact = $request->input('contact_no');
           
            if ($request->hasFile('car_image')) {
                $imagePath = $request->file('car_image')->store('uploads');
                $cardetails->car_image = $imagePath;
            }
            
            // Save the CarDetails instance to the database
            $cardetails->save();

            return view('home');


    }
}
