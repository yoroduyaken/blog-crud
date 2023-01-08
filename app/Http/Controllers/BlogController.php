<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs',compact('blogs'));
    }

    public function create()
    {
        return view('blog');
    }

    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('blog');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('show',compact('blog'));
    }
}
