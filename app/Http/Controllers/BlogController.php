<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('admin.blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'published_date' => 'nullable|date',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->published_date = $request->published_date;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/blog', 'public');
            $blog->image = $imagePath;
        }

        $blog->save();

        return redirect()->route('blogs.create')->with('success', 'Blog post created successfully!');
    }
}
