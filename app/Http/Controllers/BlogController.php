<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

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
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('blog');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('show',compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (Auth::id() === $blog->user_id) {
            $blog->update([
                "title" => $request->title,
                "body" => $request->body,
            ]);
        } else {
            abort(403);
        }
        

        return redirect()->route('blog');

    }

    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (Auth::id() === $blog->user_id) {
            $blog->delete();

        } else {
            abort(403);
        }

        return redirect()->route('blog');
    }
}
