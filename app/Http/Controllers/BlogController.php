<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){

        $aisItems = BlogPost::select('*')
                            ->orderByDesc('created_at')
                            ->get();

        return view('admin.blogs.index', compact('aisItems'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',
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

     public function destroy($id)
     {
         $aisItem = BlogPost::find($id);

         if ($aisItem) {
             // Optionally delete the image file if it exists
             if ($aisItem->image_path) {
                 $imagePath = public_path($aisItem->image_path);
                 if (file_exists($imagePath)) {
                     unlink($imagePath);
                 }
             }

             $aisItem->delete();

             return redirect()->back()->with('success', 'Post deleted successfully!');
         } else {
             return redirect()->back()->with('error', 'Item not found');
         }
     }

     public function update(Request $request, $id)
     {

         $validated = $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'module' => 'required|string',
             'submodule' => 'required|string',
             'module_title' => 'required|string',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480',
         ]);
        //  dd($request->all());
         $aisItem = BlogPost::find($id);

         if ($aisItem) {
             $aisItem->title = $validated['title'];
             $aisItem->description = $validated['description'];
             $aisItem->module = $validated['module'];
             $aisItem->submodule = $validated['submodule'];
             $aisItem->module_title = $validated['module_title'];

             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $filename = time() . '_' . $image->getClientOriginalName();
                 $destinationPath = public_path('uploads/ais_images');
                 $image->move($destinationPath, $filename);
                 $aisItem->image_path = 'public/uploads/ais_images/' . $filename;
             }

             $aisItem->save();

             return redirect()->route('admin.blogs.index')->with('success', 'Ais post updated successfully!');
         } else {
             return redirect()->back()->with('error', 'Item not found');
         }
     }
}
