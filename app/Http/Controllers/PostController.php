<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function index() {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        } elseif (request('author')) {
            $author =  User::firstWhere('username', request('author'))->name;
            $title = ' by ' . $author;
        }

        return view('posts',[
            'title' => 'All Post' . $title,
            'active' => 'posts',
            'posts' =>  Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
}
