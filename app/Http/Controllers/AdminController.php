<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    



    public function showAllUsers(){
        $users = User::all();
        $current_user = User::find(Auth::id());
        return view('admin.allusers',compact('users','current_user'));
    }

    public function userDetails($id){
        $current_user = User::find(Auth::id());

        $user = User::find($id);
        return view('admin.userDetails',compact('user','current_user'));
    }

    //

}
