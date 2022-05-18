<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Contracts\Routing\ResponseFactoryIlluminate\Contracts\Routing\ResponseFactory;
USE App\Services\BookService;


class BookController extends Controller
{

    
    public function showAllBooks(){

        $books = Book::all();
        $current_user = User::find(Auth::id());
        return view('admin.allbooks',compact('books','current_user'));
    }

    public function addBook(){

        return BookService::addBook();
        
    }

    public function uploadBook(Request $request){

        $data = new Book();
        $book = $request->book;
        $bookname = time() . '.' . $book->getClientOriginalExtension();
        $request->book->move('books',$bookname);

        $data->name = $request->book_name;
        $data->cost = $request->cost;
        $data->author = $request->author_name;
        $data->user_id = Auth::id();
        $data->file_path = $bookname;
        $data->save();
        return redirect('showUploadedBooks');
    }

    public function showPurchasedBooks(){


        return BookService::showPurchasedBooks();

    }

    public function showUploadedBooks(){

        return BookService::showUploadedBooks();

    }
    public function downloadBook(Request $request,$file){

        return response()->download(public_path('books/'.$file));

    }
    public function viewBook($id){

        $path = Book::find($id)->file_path;
        return response()->file(public_path('books/'.$path));

        
       

    }

    public function AllBooksView(){

        return Bookservice::AllBooksView();
        
    }

    public function FilterdBooksView($seller_id){

        return Bookservice::FilterdBooksView($seller_id);
        
    }

    //
}
