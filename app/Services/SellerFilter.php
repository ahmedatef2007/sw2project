<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\Book;
use App\Models\User;    
use Illuminate\Support\Facades\Auth;
use App\Interfaces\booksFilter;

/**
 * Class PaymentService.
 */
class SellerFilter implements booksFilter 
{
    public static function ReturnFilteredBooks($id){

        $all_books = Book::where('user_id',$id)->get();
        $current_user = User::find(Auth::id());
        $all_users = User::all();
        return view('user.allbooks' ,compact('all_books','current_user','all_users'));
    }
   
}
