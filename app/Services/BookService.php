<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use App\Models\Book;
use App\Models\Transaction;   
use App\Models\User;    
use Illuminate\Support\Facades\Auth;
use App\Services\SellerFilter;

/**
 * Class PaymentService.
 */
class BookService 
{
    public static function AllBooksView(){

        $all_books = Book::all();
        $current_user = User::find(Auth::id());
        $all_users = User::all();
        return view('user.allbooks' ,compact('all_books','current_user','all_users'));

    }
    
    public static function FilterdBooksView($id){

        return SellerFilter::ReturnFilteredBooks($id);
    }

    public static function addBook(){

        if(Auth::id()){
            $current_user = User::find(Auth::id());
            return view('User.addBook',compact('current_user'));
        }else{
            return redirect('/login')->with('message','you have to log in or register to be able to add books');
        }
        
    }

    public static function showPurchasedBooks(){

        $current_user = User::find(Auth::id());

        $purchased_books = Transaction::where('buyer_id',$current_user->id)->get();

        return view('user.purchasedBooks',compact('purchased_books','current_user'));

    }
    public static function showUploadedBooks(){

        $current_user = User::find(Auth::id());
        $uploaded_books = Book::where('user_id',$current_user->id)->get();
        return view('user.uploadedbooks',compact('current_user','uploaded_books'));

    }
   
}
