<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
//    protected $redirectTo = '/login';

    public function __construct()
    {

    }
    public function login()
    {
        return view('login');
    }
    public function  login_action (Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (User::where('username',$request->username)->where('password',$request->password)->count()==1){
            $id=User::where('username',$request->username)->where('password',$request->password)->first()->id;
            Auth::loginUsingId($id);
            return redirect()->route('sales');
        }
        return redirect("login")->with('login','');
    }

    public function logout()
    {
        if (Auth::check()){
            Auth::logout();
        }
        return redirect("login");

    }
}
