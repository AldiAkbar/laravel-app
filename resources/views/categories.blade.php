@extends('layouts.main')

@section('container')
    <h1 class="text-center mb-3">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/blog?category={{ $category->slug }}">
                        <div class="card text-white">
                            <img src="https://source.unsplash.com/200x100?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgb(0, 0, 0, 0.5)">
                                <h5 class="card-title text-center flex-fill" >{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>



    
@endsection