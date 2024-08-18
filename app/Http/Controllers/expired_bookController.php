<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\expiredbook;
use App\Models\lending_book;



class expired_bookController extends Controller
{
    public function expired_book(Request $request)
    {
        $query = $request->input('query');

        // dd('book');
        $currentTime = now();
        $expiredbooks = lending_book::leftjoin('books', 'books.id' , 'lending_books.books_id')
        ->select('lending_books.*', 'books.name as book_name')
        ->where('lending_books.expire_date', '<' , $currentTime)->
        when($query, function ($q) use ($query) {
            $q->where('lending_books.p_name', 'like', '%' . $query . '%');}) ->get();

        // dd($expiredbooks);
        return view('admin.expireds.expired_book', compact('expiredbooks'));
    }
  





    
    public function storeexpiredbook(Request $request){
       


        $expiredbook = new expiredbook();
        $expiredbook->p_name = $request->p_name;
        $expiredbook->p_last_name = $request->p_last_name;
        $expiredbook->lend_date =$request->lend_date;
        $expiredbook->expire_date =$request->expire_date;
        $expiredbook->description =$request->description;
        $expiredbook->lending_book_id =$request->lending_book_id;
        $expiredbook->save();

             $expiredbooks = lending_book::all();
             return redirect()->route('expired_book', compact('expiredbooks'));

    }

    
    public function deleteexpiredbook($id){
        $expiredbook = expiredbook::find($id);
        if($expiredbook){

        
        $expiredbook->delete();
        return redirect()->route('expired_book')->with('success', 'delete');
    }
     
    }


    // public function editexpiredbook($id){
    //     $expiredbook = expiredbook::find($id);
    //     $lends = lending_book::all();
    //     return view('admin.expireds.editexpiredbook', compact('expiredbook','lends'));
    // }

    // public function updateexpiredbook(Request $request){
    //     $expiredbook = expiredbook::find($id);
    //     $expiredbook->p_name = $request->p_name;
    //     $expiredbook->p_last_name = $request->p_last_name;
    //     $expiredbook->lend_date =$request->lend_date;
    //     $expiredbook->expire_date =$request->expire_date;
    //     $expiredbook->description =$request->description;
    //     $expiredbook->lending_book_id =$request->lending_book_id;
    //     $expiredbook->save();
    //     $expiredbooks = expiredbook::all();
    //     return redirect()->route('expired_book','expiredbooks');

    // }
}
