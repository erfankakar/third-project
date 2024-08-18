<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatagoryBook;

class HomeController extends Controller
{
    public function welcome(){
        return view('admin.index');
    }
    public function index(){
        return view('admin.index');
    }
}
