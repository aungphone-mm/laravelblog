<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Log;

// Route::get('/', function () {
//     return view('blogs');
// });
Route::get('/', function () {
  // DB::listen(function($query){
  //   logger($query->sql);
  // });
  //return $b;
    return view('blogs',[
       'arr1'=> Blog::with('Category','author')->get()  //eager load , lazy loading
       //  $blog=file_get_contents($path);
   ]);
   
  });
Route::get('/categories/{categ:slug}', function (Category $categ){
  return view('blogs',[
    'arr1'=> $categ->blogs2
  ]);
});
Route::get('/users/{user}', function (User $user) {
  return view('blogs', [
      'arr1'=>$user->blogs
  ]);
});
  Route::get('/route1/{blogfg:slug}', function (Blog $blogfg) {
   //$b=Blog::findorfail($blog);
     return view('blogw1',[
      'bloga2'=> $blogfg
      //'bloga2'=> $b  //$blog=<h1>data</h1>
      
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