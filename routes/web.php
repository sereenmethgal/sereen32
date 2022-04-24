<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('insert');
});

Route::post('/store',[PostController::class,'store']);
Route::get('/show',[PostController::class,'show']);
Route::get('/delete/{id}',[PostController::class,'destroy']);
Route::get('/edit/{id}',[PostController::class,'edit']);
Route::post('/update/{id}',[PostController::class,'update']);
}
Route::get('tasks',function(){
}};
           $task=DB::table('tasks')->get();
           //dd($tasks);
           return view ('tasks',compact('tasks'));
           }};
           Route::get('tasks/show/{id}', function ($id) {
          $task=DB::table('tasks')->find($id);
           //dd($tasks);
           return view ('show',compact('task'));
           }};
            Route::get('app',function(){
                //$tasks =DB::table('tasks')->get();
                $tasks =Task::all();
                dd( $tasks);
             return view ('todo',compact('tasks'));
            }};
                       
      Route::post('store', function (Request $request) {
 //DB::table('tasks')->insert({
    // 'title'=>$request->title ;
          $task =new Task;
       $task-> title = $request->title ;
$task->save();
         return redirect()->back();
          
                
                
                
                
                
                
                
                
                
                
                

            
          


