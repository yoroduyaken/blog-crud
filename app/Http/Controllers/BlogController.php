<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog');
    }

    public function store(Request $request)
    {
        $blog = Blog::create([
            'title' => $request->title,
        ]);

        return redirect()->route('blog');
    }
}
