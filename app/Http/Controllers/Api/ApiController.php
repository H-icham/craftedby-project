<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
 //Register API
    public function register(Request $request){

        $request->validate([
            "lastname"=>"required",
            "firstname"=>"required",
            "email"=>"required|email|unique:users",
            "password"=>"required|confirmed"

        ]);
        User::create([
            "lastname" =>$request->lastname,
            "firstname" =>$request->firstname,
            "email" =>$request->email,
            "password" => Hash::make ($request->password)
        ]);

        return response()->json([
            "status"=>true,
            "message"=>"User created successfully"
        ]);
    }

    //Login API
    public function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $user = User::where("email", $request->email)->first();
        if (!empty($user)){
            if(Hash::check($request->password, $user->password)){
                $token = $user->createToken("myToken")->plainTextToken;
                return response()->json([
                    "status" => true,
                    "message" => "User logged in successfully",
                    "token" => $token,
                ]);
            }
            return response()->json([
                "status"=>false,
                "message"=>"Wrong password"
            ]);
        }
    }

    //Profile API
    public function profile(){
        $data = auth()->user(); //Auth::user();
        return response()->json([
            "status"=>true,
            "message"=>"Profile info",
            "user"=>$data
        ]);

    }

    //Logout API
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json([
            "status"=>true,
            "message"=>"Logged out successfully"
        ]);
    }






}
