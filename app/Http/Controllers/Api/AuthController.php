<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
     function register(Request $request){
              $validator = Validator::make($request->all(),[
                       'name'=>'required|max:150',
                       'email'=> 'required|email|max:191|unique:users,email',
                       'password'=>'required|min:6'

              ]);

              if($validator->fails()){
                       
                return response()->json([
                       'validator_errors'=>$validator->messages(),
                ]);
              }
              else{
                   $user = User::create([
                       'name'=>$request->name,
                       'email'=>$request->email,
                       'password'=>Hash::make($request->password),
                   ]);

                  $token=  $user->createToken($user->email.'_Token')->plainTextToken;

                  return response()->json([
                      'status'=>200,
                      'username'=>$user->name,
                      'token'=>$token,
                      'message'=>'Registration Successfull',
                  ]);
              }
     }
}
