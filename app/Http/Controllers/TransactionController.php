<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Book;
use App\Models\Payment;

class TransactionController extends Controller
{
    public function showAllTransactions(){

        $transactions = Transaction::all();

        $current_user = User::find(Auth::id());
        return view('admin.alltransactions',compact('transactions','current_user'));

    }
    public function purchaseBookView($id){
        if(Auth::id()){
            $current_user = User::find(Auth::id());
            $purchased_book = Book::find($id);
            $all_payments_type = Payment::all();
            return view('User.purchaseView',compact('current_user','purchased_book','all_payments_type'));

        }else{
            return redirect('/login')->with('message','You have to log in or register to be able to purchase books');
        }

    }

    public function makeTransaction(Request $request){

        $data = new Transaction();
        $data->seller_id = $request->seller_id;
        $data->book_id = $request->book_id;
        $data->buyer_id = $request->buyer_id;
        $data->payment_id = $request->payment_type;
        $data->save();

        return redirect('/showPurchasedBooks')->with('message','you transaction has ben made successfuly');
    }

}
