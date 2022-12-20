<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();
        return view('blogs',compact('blogs'));
    } 
}
