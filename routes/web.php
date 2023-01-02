<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Log;

Route::get('/', function () {
    return view('blogs');
});
Route::get('/', function () {
  // DB::listen(function($query){
  //   logger($query->sql);
  // });
  //return $b;
    return view('blogs',[     //to blogs.blade.php
       //'arr1'=> Blog::with('Category','author')->get()  //eager load , lazy loading
       //  $blog=file_get_contents($path);
       'arr1'=>Blog::Latest()->get(),
       'categories'=>Category::all()
   ]);
  });
Route::get('/categories/{categ:slug}', function (Category $categ){
  return view('blogs',[
    'arr1'=> $categ->blogs2,  //blogs2 is function name
    'categories'=>Category::all(),
    'currentCategory'=>$categ
  ]);
});
Route::get('/users/{user:username}', function (User $user) {//wildcard ကdefaultက id,usernameထည့်မှep35
  return view('blogs', [
      'arr1'=>$user->blogs,    //
      'categories'=>Category::all()
  ]);
});
  Route::get('/route1/{blogfg:slug}', function (Blog $blogfg) {
   //$b=Blog::findorfail($blog);
     return view('blogw1',[
      'bloga2'=> $blogfg,
      'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
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