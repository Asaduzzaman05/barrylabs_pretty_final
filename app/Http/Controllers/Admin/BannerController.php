<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Slider;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function index(){
       $sliders = Slider::latest()->get();
       return view('admin.banner.index',compact('sliders'));
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'slider_title_one'  => 'required',
            'image'  => 'required|image|mimes:jpg,png,gif',
        ]);

        try {

            DB::beginTransaction();
            $slider = new Slider();
            $slider->slider_title_one = $request->slider_title_one;
            $slider->slider_title_two = $request->slider_title_two;
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(111, 99999) . '.' . $extension;
            $imageResize = Image::make($image->getRealPath());
            $imageResize->resize(1349,759);
            $imageResize->save(public_path('uploads/slider/' . $fileName));
            $sliderImage  = 'uploads/slider/' . $fileName;

            $slider->image = $sliderImage;
            $slider->save();
            DB::commit();
            Session::flash('success', 'Slider Added Successfully');
            return back();
        } catch (\Throwable $th) {
            DB::rollBack();
            Session::flash('error', 'Slider Not Added');
            return back();
        }

    }

    public function edit($id){
        $sliders = Slider::find($id);
        return view('admin.banner.edit',compact('sliders'));
    }
public function update(Request $request, $id)
{
        $validated = $request->validate([
        'slider_title_one' => 'required|string|max:255',
        'slider_title_two' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,png,gif|max:20480',
    ]);
    try {
        DB::beginTransaction();
        $slider = Slider::findOrFail($id);
        $slider->slider_title_one = $validated['slider_title_one'];
        $slider->slider_title_two = $validated['slider_title_two'];

        if ($request->hasFile('image')) {
            if (file_exists(public_path($slider->image))) {
                @unlink(public_path($slider->image));
            }
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $imageResize = Image::make($image->getRealPath());
            $imageResize->resize(1435, 350);
            $imageResize->save(public_path('uploads/slider/' . $fileName));
            $slider->image = 'uploads/slider/' . $fileName;
        }
        $slider->save();
        DB::commit();
        Session::flash('success', 'Slider updated successfully');
        return redirect()->route('slider.create');
    } catch (Exception $e) {
        DB::rollBack();
        Session::flash('error', 'Something went wrong: ' . $e->getMessage());
        return redirect()->route('slider.create');
    }
}

    public function delete($id){
        try{

            $slider = Slider::find($id);
            if(!empty($slider->image) && file_exists($slider->image)){
                unlink($slider->image);
            }
            $slider->delete();
            Session::flash('success','Slider Delete Successfully');
            return back();

        }catch(Exception $e){
             return back();
        }

    }

}
