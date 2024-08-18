<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\catagory_booksController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\lending_bookController;
use App\Http\Controllers\expired_bookController;
use App\Http\Controllers\usersController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class , 'welcome'] );

Route::get('/index',[catagory_booksController::class , 'index'] )->name('index');
Route::get('/admin/dashboard', [catagory_booksController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/catagory_books',[catagory_booksController::class, 'catagory'])->name('catagory_books');
Route::post('/storecatagory',[catagory_booksController::class, 'store'])->name('storecatagory');
Route::get('/addcatagory',[catagory_booksController::class, 'add'])->name('addcatagory');
Route::get('/deletecatagory/{id}',[catagory_booksController::class, 'deletecatagory'])->name('deletecatagory');
Route::get('/editcatagory/{id}',[catagory_booksController::class, 'editcatagory'])->name('editcatagory');
Route::post('/updatecatagory',[catagory_booksController::class, 'update'])->name('updatecatagory');






Route::get('/books',[bookController::class, 'books'])->name('books');
Route::get('/addbook',[bookController::class, 'addbook'])->name('addbook');
Route::post('/storebook',[bookController::class, 'storebook'])->name('storebook');
Route::get('/deletebook/{id}',[bookController::class, 'deletebook'])->name('deletebook');
Route::get('/editbook/{id}',[bookController::class, 'editbook'])->name('editbook');
Route::post('/updatebook',[bookController::class, 'updatebook'])->name('updatebook');















Route::get('/lending_book',[lending_bookController::class, 'lending'])->name('lending_book');
Route::get('/addlendingbook',[lending_bookController::class, 'addlendingbook'])->name('addlendingbook');
Route::post('/storelendingbook',[lending_bookController::class, 'storelendingbook'])->name('storelendingbook');
Route::get('/deletelendingbook/{id}',[lending_bookController::class, 'deletelendingbook'])->name('deletelendingbook');
Route::get('/editlendingbook/{id}',[lending_bookController::class, 'editlendingbook'])->name('editlendingbook');
Route::post('/updatelendingbook',[lending_bookController::class, 'updatelendingbook'])->name('updatelendingbook');












Route::get('/expiredbook',[expired_bookController::class, 'expired_book'])->name('expiredbook');
Route::post('/storeexpiredbook',[expired_bookController::class, 'storeexpiredbook'])->name('storeexpiredbook');
Route::get('/deleteexpiredbook/{id}',[expired_bookController::class, 'deleteexpiredbook'])->name('deleteexpiredbook');








Route::get('/users',[usersController::class, 'users']);

