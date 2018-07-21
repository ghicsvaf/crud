<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class AuthController extends Controller
{
    protected function login(Request $request)
    {
        $email =  $request['email'];
        $password =  $request['password'];

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return view ('loginform.thanhcong',['user'=>Auth::user()]);
        }
        else
        { 
            return view ('loginform.dangnhap',['error'=>'login error']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return view ('loginform.dangnhap');
    }
    public function index()
    {
        return view('da_ta');
    }
    public function create()
    {
        return view('loginform.register');
    }
    public function store(Request $request)
    {   
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }
}
