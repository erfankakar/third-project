<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatagoryBook;

class catagory_booksController extends Controller
{

    public function catagory(Request $request)
    {
        $query = $request->input('query');
        $cats = CatagoryBook::when($query, function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })->get();
    
        return view('admin.Catagory.catagory_books', compact('cats'));
    }


    
    public function add(){  
        return view('admin.Catagory.addcatagory');
    }




    
    public function store(Request $request){  

     $name = $request->name;
     $description = $request->description;

     $catagory = new CatagoryBook();
     $catagory->name = $name;
     $catagory->description = $description;
     $catagory->save();
     $cats = CatagoryBook::all();
        return redirect()->route('catagory_books',compact('cats'));





    }



    public function deletecatagory($id){
        $catagory = CatagoryBook::find($id);
        $catagory->delete();
        return redirect()->route('catagory_books');
    }

    public function editcatagory($id){
        $cats = CatagoryBook::find($id);
        return view('admin.Catagory.editcatagory',compact('cats'));

   
}

public function update(Request $request){
    $name = $request->name;
    $description = $request->description;

    $catagory = CatagoryBook::find($request->id);
    $catagory->name = $name;
    $catagory->description = $description;
    $catagory->save();
    $cats = CatagoryBook::all();
       return redirect()->route('catagory_books',compact('cats'));
dd($cats->id);
}



}

