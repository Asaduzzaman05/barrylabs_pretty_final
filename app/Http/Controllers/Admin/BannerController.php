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

    public function update(Request $request,$id){


        $request->validate([
            'slider_title_one'  => 'required',
            'image'  => 'image|mimes:jpg,png,gif',
        ]);


       try{

            DB::beginTransaction();
            $sliders = Slider::find($id);
            $sliders->slider_title_one = $request->slider_title_one;
            $sliders->slider_title_two = $request->slider_title_two;
            $slider_image = '';
            if($request->hasFile('image')){
                if (file_exists($sliders->image )) {
                    @unlink($sliders->image);
                }
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = rand(111, 99999) . '.' . $extension;
            $imageResize = Image::make($image->getRealPath());
            $imageResize->resize(1435,350);
            $imageResize->save(public_path('uploads/slider/' . $fileName));
            $slider_image  = 'uploads/slider/' . $fileName;
            }
            else{
            $slider_image = $sliders->image;
            }
            $sliders->image = $slider_image;
            $sliders->save();

            DB::commit();
            Session::flash('success','Slider Update Seccessfuly');
            return redirect()->route('slider.create');
       }catch(Exception $e){
           DB::rollBack();
           return $e->getMessage();
           Session::flash('error','Something Is worng');
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
