<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
use App\Models\Transaction;


class UserController extends Controller
{
    public function getProfile(){
        $current_user = User::find(Auth::id());
        $user_uploaded_books = Book::where('user_id',$current_user->id)->get();
        $user_sales = Transaction::where('seller_id',$current_user->id)->get();

       
        return view('user.profile',compact('current_user','user_uploaded_books','user_sales'));
        
    }

    public function userDetails($id){
        $current_user = User::find(Auth::id());
        $user_uploaded_books = Book::where('user_id',$id)->get();
        $user_sales = Transaction::where('seller_id',$id)->get();

        $clicked_user = User::find($id);
        return view('user.userDetails',compact('clicked_user','current_user','user_sales','user_uploaded_books'));
    }

    //
}
