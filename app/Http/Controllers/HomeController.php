<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.dashboard');
    }

    public function checkLogin(Request $request)
    {
        $user = Auth::user();
        $u = User::findOrFail($user->id);
        if($user->verified==1)
        {
            if($user->type=='admin')
            {
               return redirect('admin/dashboard')->with('success','Login successfully');
            }

            return redirect('user/dashboard')->with('success','Login successfully');
            
        }else{
            Auth::logout();
            return redirect('login')->with('error_message','Account not verified');
        }
    }
}
