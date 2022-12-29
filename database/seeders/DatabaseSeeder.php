<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Blog::truncate();
        Category::truncate();

        $frontend=Category::factory()->create(['name'=>'frontend']);//category table မှာ 2ကြောင်းဝင်
        $backend=Category::factory()->create(['name'=>'backend']);

        Blog::factory(2)->create(['category_id'=>$frontend->id]);//blog table မှာ ၄ကြောင်းဝင်
        Blog::factory(2)->create(['category_id'=>$backend->id]);
    }
}