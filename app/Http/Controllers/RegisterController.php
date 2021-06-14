<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

    class RegisterController extends Controller{
        
        public function create(){
            $data=request();
            if(isset($data['username']) && isset($data['password']) && 
            isset($data['name']) && 
            isset($data['surname']) && isset($data['email'])){
                $newUser=User::create([
                'username' => $data['username'],
                'password' =>password_hash($data['password'],PASSWORD_BCRYPT),
                'name' => $data['name'],
                'surname' => $data['surname'],
                'email' => $data['email'],
                'propic' => null,
                ]);
                if($newUser){
                    Session::put('user_id',$newUser->id);
                    return redirect('home');
                }else{
                    return redirect('register')->withInput();
                }
            }else{
                return redirect('register')->withInput();
            }
        }

            public function index() {
                return view('register')->with('csrf_token', csrf_token());
            } 

            public function checkUsername(Request $request){
                $user=$request->username;
                $exist=User::where('username',$user)->exists();
                return ['exists'=>$exist];
            }
        
        
    }

    ?>