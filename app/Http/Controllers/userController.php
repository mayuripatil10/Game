<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\model\user;

class userController extends Controller
{
    public function find()
    {

        $users = DB::table('users')->get();
         DB::table('users')->value('optradio');
        return view('retrive', ['users' => $users]);
//        return view('retrive')->with('users','$users');
        return $this->belongsTo('user');
    }

}
