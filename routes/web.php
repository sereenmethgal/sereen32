<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route :: get('control',function(){
    $pro = DB :: table('products') -> get();

    return view('show',compact('pro'));
});

Route :: get('/control2/{id}',function($id){
    $pro2 = DB :: table('products') -> find($id);

    return view('show2',compact('pro2'));
});
Route::get('/about' ,[ProductsController::class,'index']);
Route::get('/about/{id}',[ProductsController::class,'show']);
Route::$_POST('/stor',[ProductsController::class,'stor']);
