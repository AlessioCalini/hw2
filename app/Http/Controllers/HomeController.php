<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Routing\Controller;
    use App\Models\User;

    class HomeController extends Controller{
        public function index(){
            $session_id=session('user_id');
            $user=User::find($session_id);
            if(!isset($user))
                return view('welcome');
            return view('home');

        }
    }