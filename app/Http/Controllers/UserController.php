<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\AddressModel;
use App\Models\UserModel;
use DB;
use Auth;
use Hash;
use Session;

class UserController extends Controller{

    public function index(){
        $data = DB::table("course")->get();
        return view("index", ["courses"=>$data]);
    } 
    
    public function contact(){
        return view("contact");
    } 

    public function about(){
        return view("about");
    } 

    public function faqs(){
        return view("faqs");
    } 

    public function login(){
        if(Auth::check()){
            return redirect("/");
        }
        return view("login");
    }
    
    public function doLogin(Request $req){

        $validate = $req->validate([
            "email"=> "required",
            "password"=>"required"
        ]);

        $credential = $req->only("email", "password");

        if(Auth::attempt($credential)){
            return redirect('/');
        }
        else{
            return back()->with('failed', 'Email/password is incorrect');
        }
    }

    public function register(){
        return view("register");
    } 

    public function doRegister(Request $req){
        $validate = $req->validate([
            "name"=> "required",
            "email"=> "required",
            "password"=>"required"
        ]);

        $user = new UserModel;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        if($user->save()){
            return back()->with(['msg'=> 'Account Created Succesfully', "alert"=>"alert-success"]);
        }
        else{
            return back()->with(['msg', 'Something Wrong', "alert"=>"alert-danger"]);
        }
    } 

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect("/");
    }

    public function error(){
        return view("error");
    } 

    public function forget_pass(){
        return view("forget_pass");
    } 

    public function courses(){
        $courses = DB::table("courses")->get();
        return view("courses", ["course"=>$courses]);
    }

    public function course_details($id){
        $course = DB::table("course")->find(["id"=>$id]);
        return view("course_details", ["course"=>$course]);
    }

    public function search(Request $req){
        $key = $req->name;
        if($key==null){
            $courses = DB::table("course")->get();
        }
        else{
            $courses = DB::table("course")
                            ->where("title", "like", "%".$key."%")
                            ->get();
        }
        return view("search", ["courses"=>$courses, "key"=>$key]);
    }

    public function cart(){
        $cartdata = DB::table("cart")->get();
        $cartTotoal = 0;
        foreach($cartdata as $cart){
            $cartTotoal += $cart->price;
        }
        return view("cart", ["cart"=>$cartdata, "cartTotal"=>$cartTotoal]);
    }

    public function checkout(){
        $getAddress = AddressModel::getAddress();

        $cartdata = DB::table("cart")->get();
        $cartTotoal = 0;
        foreach($cartdata as $cart){
            $cartTotoal += $cart->price;
        }

        return view("checkout", ["address"=>$getAddress, "cartTotal"=>$cartTotoal]);
    }

    public function address(){
        $getAddress = AddressModel::getAddress();
        return view("address", ["address"=> $getAddress]);
    }

    public function updateAddress(Request $req, $key){
        $check = DB::table("address")
                        ->where("id", $key)
                        ->update(["address"=> $req->address, "city"=> $req->city, "state"=> $req->state, "pincode"=> $req->pincode]);
        if($check){
            return redirect("/address")->with(["alert"=>"alert-success", "message"=>"Address Updated Successfully"]);
        }
        else{
            return redirect("/address")->with(["alert"=>"alert-danger", "message"=>"Something Error"]);
        }
    }

    public function change_pass(){
        return view("change_password");
    } 

    public function profile(){
        return view("profile");
    }
    
    public function enrolled_courses(){
        return view("enrolled_courses");
    }

    public function saveCart(Request $req){
        $data = new CartModel();
        $data->product_id = $req->pro_id;
        $data->product_title = $req->pro_title;
        $data->price = $req->price;
        $data->image = $req->img;
        $data->category = $req->cat;
        $data->user_id = "rajat";
        $data->date = "12/12/2020";
        if($data->save()){
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function saveContact(Request $req){

        $req->validate([
            "name"=>"required",
            "email"=>"required",
            "mobile"=>"required",
            "subject"=>"subject",
            "message"=>"message"
        ]);

    }
}