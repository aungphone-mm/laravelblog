<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //protected $fillable=['title'];
    protected $with=['category','author']; //blog တစ်ခုဆွဲရင် category, author ပါဆွဲ
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Author()//user လို့ရေးရင် user_id ကိုခေါ်
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}

