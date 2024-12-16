<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function showPageRegister(){
        $data['title'] =  'Register';
        return
            view('auth.header', $data) .
            view('auth.register', $data) .
            view('auth.footer');
    }

    public function showPageLogin(){
        $data['title'] = 'Login';
        return
            view('auth.header', $data) .
            view('auth.login', $data) .
            view('auth.footer');
    }
    public function register(Request $request){
        try {
            $user_id = $this->generateUniqueID($request->input('id'));
            $data = [
                'user_id' => $user_id,
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => hash('sha256', $request->input('password'))
            ];

            DB::table('users')->insert($data);
            return 'success';
        } catch (Exception $e){
            return $e;
        }
    }

    public function login(Request $request){
        try {
            $data = [
                'username' => $request->input('username'),
                'password' => hash('sha256', $request->input('password'))
            ];
            $data_login = DB::selectOne("
                SELECT * FROM users WHERE username = '$data[username]' AND password = '$data[password]'
            ");
            // dd($data_login);
            if (!empty($account)){
                $data_user = collect($data_login);
            }
            Session::push('users', $data_user);
            
        }catch(Exception $e){
            return $e;
        }
    }

    public function generateUniqueID($id){
        return 'USER_' . uniqid();
    }
}
