<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
use App\Models\Transaction;

use App\Models\cart;


class RedirectkController extends Controller
{
    public function __invoke()
    {
        $usertype = Auth::user()->usertype;
        $current_user = User::find(Auth::id());
        $books = Book::all();
        if($usertype == 1){

            return view('admin.home',compact('current_user'));
        }else{
            


        return view('User.home',compact('current_user','books'));
        }
    }
    //
}
