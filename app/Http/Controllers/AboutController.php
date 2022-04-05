<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('about', [
            'title' => 'About',
            'active' => 'about',
            'name' => 'Reno',
            'email' => 'dafrenov@gmail.com',
            'image' => 'profil.jpg' 
        ]);
    }
}
