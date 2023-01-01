<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index($id)
    {
        $blogs = Blog::where('id')->get();
        return view('blogs',compact('blogs'));
    } 
    
    public function show($blog)
    {
        $blog = Blog::find(1);
        return view('blogs.show', ['blogs' => Blog::find($blog)]);
    }
}