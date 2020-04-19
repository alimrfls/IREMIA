<?php

namespace App\Http\Controllers;

use App\Pemakaman;
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
        $pemakaman = Pemakaman::all();
        if(Auth::user()) {
            $role = Auth::user()->role;
            if ($role == "member") {

                return view('welcome')->with(["pemakaman"=>$pemakaman]);
            } else {
                return view('home');
            }
        }
        return view('welcome')->with(["pemakaman"=>$pemakaman]);
    }

    public function register(Request $request){

        $user = new User();
        $user->fullname = $request["fullname"];

    }

    public function TestFunction(){
        return Hash::check("", Auth::user()->password, []);
    }

}
