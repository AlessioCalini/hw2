<?php

namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Routing\Controller;
    use Illuminate\Support\Facades\Session;

    class LoginController extends Controller{

        public function login(){
            if(session('user_id')!=null){
                return redirect('home');
            }else{
                return view('login')->with('csrf_token', csrf_token());
            }
        }

        public function checkLogin(){
            $data=request();
            if(isset($data['username']) && isset($data['password'])){
                if($data['username']=='' || $data['password']==''){
                    return redirect('login')->withErrors(['Inserisci username e password']);
                }
                $user=User::where('username',$data['username'])->first();
                if($user!==null){
                    if(password_verify($data['password'],$user->password)){
                        Session::put('user_id',$user->id);
                        return redirect('home');
                    }else{
                        return redirect("login")->withErrors(['Username e/o password errati']);
                    }
                }else{
                    return redirect("login")->withErrors(['Username e/o password errati']);
                }
                
            }
        }

        public function logout() {
            Session::flush();
            return redirect('login');
        }

    }