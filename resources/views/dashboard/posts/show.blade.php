@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success" ><span data-feather="arrow-left"></span> Back</a>
                <a href="/dashboard/posts/{{ $post->id }}" class="btn btn-warning" ><span data-feather="edit"></span> Edit</a>
                <a href="/dashboard/posts/{{ $post->id }}" class="btn btn-danger" ><span data-feather="x-circle"></span> Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
                <article>
                    {!! $post->body  !!}
                </article>
        </div>
    </div>
</div>
    
@endsection