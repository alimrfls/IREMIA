<?php

namespace App\Http\Controllers;

use App\product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(Auth::user()){
            $role = Auth::user()->role;
            if($role == "member"){
                return view('welcome');
            }else{
                return view('home');
            }
        }
        return view('welcome');
    }



}
