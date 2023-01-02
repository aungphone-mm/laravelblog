
<x-layout>
    <x-hero />
    <x-blogs-section 
    :blogs="$arr1" 
    :categories="$categories"
    :currentCategory="$currentCategory ?? null"
    />
    <x-subscribe />
</x-layout>
blogs.blade.php
<!--    @dd($arr1)နဲ့ အပေါ်ဆုံးမှာစမ်းနိုင် 
    <x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach($arr1 as $b)
    <div>
        <h1><a href="route1/{{$b->slug}}">
                {{$b->title}}
            </a></h1>
            <h4>Author - <a href="/users/{{$b->author->username}}">{{$b->author->name}}</a></h4>
        <p>
            Category - <a href="/categories/{{$b->category->slug}}">{{$b->category->name}}</a>
        </p>
        
        <div>
            <p>
                published at -
                {{$b->created_at->diffForHumans()}}
            </p>
            <p>
                {{$b->intro}}
            </p>
            blogs.blade.php
        </div>
    </div>
    @endforeach
</x-layout> -->


