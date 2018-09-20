<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

//    use AuthenticatesUsers;

    public function __construct()
{
    $this->middleware('auth');
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//

        $users = DB::table('users')->get();
//        DB::table('users')->value('optradio');
//        DB::table('users')->value('email');
        return view('home', ['users' => $users]);
//        return view('retrive')->with('users','$users');
//        return $this->belongsTo('user');
//        $user = Auth::id();
//        $request = Request::all();
//
//        $user = User::where('email', $request['email']);

//        return view('home');

    }
}

