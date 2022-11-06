<?php
namespace App\Models;
use Illuminate\Support\Facades\file;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Blog1
{
  public $title;
  public $slug;
  public $intro;
  public $body;
  public function __construct($title,$slug,$intro,$body,$date)
  {
    $this->title=$title;
    $this->slug=$slug;
    $this->intro=$intro;
    $this->body=$body;
    $this->date=$date;
  }
  public static function all()   //ep-14
  {
    return collect(File::files(resource_path("route1")))
     ->map(function ($f)
  {                                         
    $obj=YamlFrontMatter::parseFile($f);
    return new Blog1($obj->title, $obj->slug, $obj->intro, $obj->body(),$obj->date);
    
  })->sortbydesc("date");
  
}
      //dd($obj)->matter('title');  //obj->title  body()
     // //dd($Fi[1]->getPathname()); //getContents getPathname
    // return array_map(function ($Fi){
    //   return $Fi->getContents();  //var_damp($Fi)
    // }, $Fi);
  
  public static function find($slug)
  {
   $blogs=static::all();
   //dd($blogs->first());
   return $blogs->firstWhere('slug',$slug); 
  }
//     public static function find($slug)
//     {
//       //return __DIR__;
//       //dd($slug);
//       //$path=__DIR__."/../resources/blogs/$slug.html";
    
//      $path = resource_path("route1/$slug.html");
     
//       if(!file_exists($path)){
//        //abort(404);
//        return redirect('/');
//      }
//      return cache()->remember("posts.$slug",1,function()use ($path){
//         //var_dump('file_get_contents');
//         return file_get_contents($path);
    
//     });
// }

}