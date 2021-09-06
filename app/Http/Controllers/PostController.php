<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Home',
            'active' => 'Home',
            'nama' => 'Aldi'
        ]);
    }

    public function about() {
        return view('about', [
            'title' => 'About',
            'active' => 'About',
        ]);
    }

    public function blog() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request(('category')));
            $title = 'in ' . $category->name;
        } elseif (request('author')) {
            $author = User::firstWhere('username', request(('author')));
            $title = 'by ' . $author->name;
        }

        return view('blog', [
            'title' => 'All Posts ' . $title,
            'active' => 'Blog',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function post(Post $post) {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'Blog',
            'post' => $post
        ]);
    }
}
