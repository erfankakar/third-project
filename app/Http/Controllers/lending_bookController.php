<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\lending_book;


class lending_bookController extends Controller
{
    // public function lending(){ $lends = lending_book::all();
    //     return view('admin.lendings.lending_book',compact('lending_book'));

    public function checkExpiredBooks()
    {
        $lends = lending_book::all();

        foreach ($lends as $lend) {
            if ($lend->expire_date <= now()) {
                $lend->transferToExpiredBook();
            }
        }

        return redirect()->route('lending_book');
    }


    
    public function lending(Request $request){
        $query = $request->input('query');
        $lends = lending_book::leftjoin('books', 'books.id' , 'lending_books.books_id')
        ->select('lending_books.*', 'books.name as book_name')->  
            when($query, function ($q) use ($query) {
            $q->where('lending_books.p_name', 'like', '%' . $query . '%');})->get();
        return view('admin.lendings.lending_book', compact('lends'));
    }



    public function addlendingbook(){
        $books = Book::all();
        
        return view('admin.lendings.addlendingbook',compact('books'));
    }



    public function storelendingbook(Request $request){
       


        $lend = new lending_book();
        // $lend->id = $request->id;
        $lend->p_name = $request->p_name;
        $lend->p_last_name = $request->p_last_name;
        $lend->lend_date =$request->lend_date;
        $lend->expire_date =$request->expire_date;
        $lend->description =$request->description;
        $lend->statusa =$request->statusa;
        $lend->books_id =$request->books_id;
        $lend->save();

             $lends = Book::all();
             return redirect()->route('lending_book', compact('lends'));

    }
   

    public function deletelendingbook($id){
        $lend = lending_book::find($id);
        $lend->delete();
        return redirect()->route('lending_book');
    }


    public function editlendingbook($id){
        $lends = lending_book::find($id);
        $books = Book::all();
        return view('admin.lendings.editlendingbook',compact('lends','books'));

   
}




public function updatelendingbook(Request $request){
    $p_name = $request->p_name;
    $p_last_name = $request->p_last_name;
    $lend_date = $request->lend_date;
    $expire_date = $request->expire_date;
    $description = $request->description;
    $statusa = $request->statusa;
    $books_id = $request->books_id;

    // dd($books_id);
    $lend = lending_book::find($request->id);
    $lend->p_name = $p_name;
    $lend->p_last_name = $p_last_name;
    $lend->lend_date =$lend_date;
    $lend->expire_date =$expire_date;
    $lend->description =$description;
    $lend->statusa =$statusa;
    $lend->books_id =$books_id;
    $lend->save();
    $lends = lending_book::all();
    return redirect()->route('lending_book',compact('lends'));

$lend = Book::find(); // Assuming you're fetching a specific book

$currentTime = now(); // Get the current time

if ($lend->expire_date < $currentTime) {
    // Book has expired, set the status to 'delivered'
    $lend->statusa = 'delivered';
    $lends->save();
    return redirect()->route('lending_book', compact('lends'));
} else {
    // Book has not expired, set the status to 'not_delivered'
    $lend->statusa = 'not_delivered';
    $lends->save();
    return redirect()->route('lending_book', compact('lends'));
}

}

}



