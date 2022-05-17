<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Book;
use App\Models\Transaction;

use App\Models\cart;

class HomeController extends Controller
{

    public function index (){

        if (Auth::id()){
            return redirect('redirect');
        }else{

            
        $books = Book::all();
        return view('User.home',compact('books'));
        }
    }

    public function search(Request $request){

        $search = $request->search;
        if($search==''){
            $data = product::paginate(3);

            return view('User.home',compact('data'));
        }
        $data  = product::where('title','Like','%'.$search.'%')->get();
        return view('user.home',compact('data'));

    }
    public function addcart(Request $request,$id){

        if(Auth::id()){
            $product = product::find($id);

            $user = Auth()->user();
            $cart = new cart();
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->save();

            
            return redirect()->back();

        }else{
            return redirect('login');
        }


    }
    public function getProfile(){
        $current_user = User::find(Auth::id());
        $user_uploaded_books = Book::where('user_id',$cur_user->id)->get();
        $user_sales = Transaction::where('seller_id',$cur_user->id)->get();

       
        return view('user.profile',compact('current_user','user_uploaded_books','user_sales'));
        
    }

    public function userDetails($id){
        $current_user = User::find(Auth::id());

        $user = User::find($id);
        return view('user.userDetails',compact('user','current_user'));
    }
    //
}
