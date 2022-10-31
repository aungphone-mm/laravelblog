<?php
namespace App\Models;
class Blog1{
    public static function find($slug)
    {
    //return __DIR__;
    //dd($slug);
    //$path=__DIR__."/../resources/blogs/$slug.html";
    
    $path = resource_path("route1/$slug.html");
    if(!file_exists($path)){
       abort(404);
       //return redirect('/');
    }
    //return cache()->remember("posts.$slug",1,function()use ($path){
      //var_dump('file_get_contents');
      return file_get_contents($path);

    //});
 
    }
}