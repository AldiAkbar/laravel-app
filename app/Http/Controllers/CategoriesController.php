<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index() {
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'Post Categories',
            'categories' => Category::all() 
        ]);
    }

    public function category(Category $category) {
        return view('blog', [
            'title' => "Post by Category : $category->name",
            'active' => 'Post Categories',
            'posts' => $category->posts->load('author', 'category'),
        ]);
    }
}
