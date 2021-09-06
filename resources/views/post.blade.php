@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mb-4">
                    <h2>{{ $post->title }}</h2>
                    <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                    <article>
                        {!! $post->body  !!}
                    </article>
                <a href="/blog" class="btn btn-danger d-block mt-3">Back to Blog</a>
            </div>
        </div>
    </div>



    
@endsection