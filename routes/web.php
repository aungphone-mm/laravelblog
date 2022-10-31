<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog1;

Route::get('/', function () {
    return view('blogs');
});
Route::get('/route1/{blogfg}', function ($slug) {
   $b=Blog1::find($slug);
   //return $b;
     return view('blogw1',[
        'blogaa'=> $b  //$blog=<h1>data</h1>
      //  $blog=file_get_contents($path);
    ]);
    
})->where('blog','[A-z\d\-_]+'); //wherealpha wherenumber 
//})->wherenumber('blog');

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