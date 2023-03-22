<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * ブログの一覧を表示する。
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs',compact('blogs'));
    }
    /**
     * ブログの新規作成画面を表示する。
     */
    public function create()
    {
        return view('blog');
    }
    /**
     * ブログを新規投稿する。
     */
    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('blog');
    }
    /**
     * 投稿したブログの一覧を表示する。
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('show',compact('blog'));
    }
    /**
     * 投稿したブログを編集する。
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit',compact('blog'));
    }
    /**
     * 投稿したブログを更新する。
     */
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
    /**
     * 投稿したブログを削除する。
     */
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
