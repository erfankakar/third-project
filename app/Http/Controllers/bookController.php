<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatagoryBook;
use App\Models\Book;


class bookController extends Controller
{


    public function books(Request $request){
        $query = $request->input('query');
        $books = Book::leftjoin('catagory_books', 'catagory_books.id' , 'books.cat_id')
        ->select('books.*', 'catagory_books.name as catagory_name')->
        when($query, function ($q) use ($query) {
            $q->where('books.name', 'like', '%' . $query . '%');})->get();
        
        return view('admin.Books.books', compact('books'));
    }



    public function addbook(){
        $allcatagories = CatagoryBook::all();
        return view('admin.Books.addbook',compact('allcatagories'));
    }



    public function storebook(Request $request){
       


        $book = new Book();
        $book->name = $request->name;
        $book->writer = $request->writer;
        $book->page_count =$request->page_count;
        $book->description =$request->description;
        $book->cat_id =$request->cat_id;
        $book->save();

             $books = Book::all();
             return redirect()->route('books', compact('books'));

    }


    
    public function deletebook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books');
    }


    public function editbook($id){
        $books = Book::find($id);
        $allcatagories = CatagoryBook::all();
         return view('admin.Books.editbook',compact('books','allcatagories'));

      

   
}


public function updatebook(Request $request){
    $name = $request->name;
    $writer = $request->writer;
    $page_count = $request->page_count;
    $description = $request->description;
    $cat_id = $request->cat_id;


    $book = Book::find($request->id);
    $book->name = $name;
    $book->writer = $writer;
    $book->page_count =$page_count;
    $book->description =$description;
    $book->cat_id =$cat_id;
    $book->save();
    $books = Book::all();
       return redirect()->route('books',compact('books'));

}

}
