<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show(){
    	return view('test.post');
    }
    public function store(){
    	Post::create([
    		'body'=>request('body'),
    	]);

    	return redirect('/');
    }
}
