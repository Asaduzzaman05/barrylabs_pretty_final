<?php

namespace App\Http\Controllers;

use App\Models\AdminService;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function index2($module, $submodule)
    {
        // Fetching aisItems from the database
        $aisItems = AdminService::all();

        // Passing both aisItems and module/submodule data to the view
        return view('admin.service_details.admin_service', [
            'aisItems' => $aisItems,
            'module' => $module,
            'submodule' => $submodule,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'module' => 'required|string',
        'submodule' => 'required|string',
        'module_title' => 'required|string',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    if ($request->has('id') && $request->id) {
        $aisItem = AdminService::find($request->id);
        if ($aisItem) {
            $aisItem->title = $validated['title'];
            $aisItem->description = $validated['description'];
            $aisItem->module = $validated['module'];
            $aisItem->submodule = $validated['submodule'];
            $aisItem->module_title = $validated['module_title'];

            if ($request->hasFile('image')) {
                $image_path = $request->file('image');
                $filename = time() . '_' . $image_path->getClientOriginalName();
                $destinationPath = public_path('uploads/ais_images');
                $image_path->move($destinationPath, $filename);
                $aisItem->image_path = 'public/uploads/ais_images/' . $filename;
            }

            $aisItem->save();
            return redirect()->back()->with('success', 'Ais post updated successfully!');
        }
    } else {

        $aisPost = new AdminService();
        $aisPost->title = $validated['title'];
        $aisPost->description = $validated['description'];
        $aisPost->module = $validated['module'];
        $aisPost->submodule = $validated['submodule'];
        $aisPost->module_title = $validated['module_title'];

        if ($request->hasFile('image')) {
            $image_path = $request->file('image');
            $filename = time() . '_' . $image_path->getClientOriginalName();
            $destinationPath = public_path('uploads/ais_images');
            $image_path->move($destinationPath, $filename);
            $aisPost->image_path = 'public/uploads/ais_images/' . $filename;
        }

        $aisPost->save();
        return redirect()->back()->with('success', 'Ais post created successfully!');
    }

    return redirect()->back()->with('error', 'An error occurred while saving the item.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aisItem = AdminService::find($id);
        if (!$aisItem) {
            return redirect()->back()->with('error', 'Item not found');
        }

        return view('admin.service_details.admin_service', [
            'aisItem' => $aisItem,
            'module' =>  $aisItem->module,
            'submodule' =>  $aisItem->submodule,
            'aisItems' => AdminService::all(),
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function update(Request $request, $id)
     {
         $validated = $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'module' => 'required|string',
             'submodule' => 'required|string',
             'module_title' => 'required|string',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         $aisItem = AdminService::find($id);

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

             return redirect()->route('admin-service.index')->with('success', 'Ais post updated successfully!');
         } else {
             return redirect()->back()->with('error', 'Item not found');
         }
     }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aisItem = AdminService::find($id);

        if ($aisItem) {
            // Optionally delete the image file if it exists
            if ($aisItem->image_path) {
                $imagePath = public_path($aisItem->image_path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $aisItem->delete();

            return redirect()->back()->with('success', 'Ais post deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Item not found');
        }
    }
}
