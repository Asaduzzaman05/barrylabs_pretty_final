<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){

        return view('admin.blogs.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blogPost = new BlogPost();
        $blogPost->title = $validated['title'];
        $blogPost->description = $validated['description'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('uploads/blog_images');
            $image->move($destinationPath, $filename);
            $blogPost->image_path = 'public/uploads/blog_images/' . $filename;
        }

        $blogPost->views = 0;
        $blogPost->save();

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully!');
    }


    public function allblogs(){

        $choose = BlogPost::all();
        return response()->json($choose);
      }

      public function edit($id){

        $choose = BlogPost::find($id);
        return response()->json($choose);
     }
}
