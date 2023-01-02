
<x-layout>
    <!-- single blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img
                    src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <h3 class="my-3">{{$bloga2->title}}</h3>
                <div>
                    <div>Author - <a href="/users/{{$bloga2->author->username}}">{{$bloga2->author->name}}</a></div>
                    <div><a href="/categories/{{$bloga2->category->slug}}"><span
                                class="badge bg-primary">{{$bloga2->category->name}}</span></a></div>
                    <div class="text-secondary">{{$bloga2->created_at->diffForHumans()}}</div>
                </div>
                <p class="lh-md mt-3">
                    {{$bloga2->body}}
                </p>
            </div>
        </div>
    </div>
blogw1.blade.php
    <x-subscribe />
    <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />
</x-layout>