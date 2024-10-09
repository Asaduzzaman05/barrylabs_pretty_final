<?php

namespace App\Http\Controllers;
use App\Models\HcmModel;
use App\Models\Slider;
use App\Models\Management;
use App\Models\PhotoGellary;
use App\Models\Project;
use App\Models\Counter;
use App\Models\Service;
use App\Models\WhyChoose;
use App\Models\BlogPost;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\ReplyComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\AisModel;
use App\Models\ScmModel;


class HomeController extends Controller
{
    public function home(){

        $sliders = Slider::latest()->get();
        $clients = Project::latest()->get();
        $services = Service::latest()->get();
        $team = Management::all();
        $counter1 = Counter::take(1)->first();
        $counter2 = Counter::take(1)->skip(1)->first();
        $counter3 = Counter::take(1)->skip(2)->first();
        $choose1 = WhyChoose::take(1)->first();
        $choose2 = WhyChoose::take(1)->skip(1)->first();
        $choose3 = WhyChoose::take(1)->skip(2)->first();
        $choose4 = WhyChoose::take(1)->skip(3)->first();
        return view('website.index',compact('choose1','choose2','choose3','choose4','sliders','clients','counter1','counter2','counter3','services','team'));
    }

    public function support(){
        return view('website.support');
    }

    public function PhotoGellary(){
        $photo = PhotoGellary::latest()->get();
        return view('website.PhotoGallery',compact('sliders'));
    }

    public function photodetails($id){

        $photoDetails = PhotoGellary::find($id);
        return view('website.photoDetails',compact('photoDetails'));
    }

    public function products(){

        return view('website.products');
    }

    public function service(){
        $service = Service::all();
       return view('website.service',compact('service'));
    }

    public function contact(){

        return view('website.contact');
    }

    public function about(){

        return view('website.about');
    }

    public function blog(){
        $data['blogs'] = BlogPost::select('*')->orderBy('id', 'DESC')->get();

        return view('website.blog')->with($data);
    }

    public function blogdetails($id){
        $blog = BlogPost::findOrFail($id);
        // Increment view count
        $blog->increment('views');
        $data['blog'] = $blog;
        $data['blogs'] = BlogPost::find($id);
        $data['commentCount'] = Comment::where('blog_id', $id)->count();
        $data['comments'] = Comment::orderBy('id', 'desc')->where('blog_id', $id)->get();
        foreach ($data['comments'] as $comment) {
            $comment->replies = ReplyComment::orderBy('id', 'desc')->where('comment_id', $comment->id)->get();
        }
        return view('website.blogdetails')->with($data);
    }


    public function storeComment(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email|required_without:phone',
            'phone' => 'nullable|required_without:email',
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'comnt_or_reply' => 'required|string',
            'blog_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->phone = $request->input('phone');
        $comment->comment = $request->input('comment');
        $comment->comnt_or_reply = $request->input('comnt_or_reply');
        $comment->blog_id = $request->input('blog_id');
        $comment->save();
        return redirect()->back()->with('success', 'Your comment/reply has been posted!');
    }
    public function replyComment(Request $request) {
        // Validate input, ensuring either email or phone is provided
        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email|required_without:phone',
            'phone' => 'nullable|required_without:email',
            'name' => 'required|string|max:255',
            'reply' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $reply = new ReplyComment();
        $reply->name = $request->input('name');
        $reply->email = $request->input('email');
        $reply->phone = $request->input('phone');
        $reply->reply = $request->input('reply');
        $reply->comment_id = $request->input('comment_id');
        $reply->save();
        return redirect()->back()->with('success', 'Your reply has been posted! ');
    }
        // webside
    public function ais(){

        $data['ais_web'] = AisModel::orderBy('id', 'desc')->first();

        return view('website.ais')->with( $data);
    }
    public function hcm(){
        $data['hcm_web'] = HcmModel::orderBy('id', 'desc')->first();
        return view('website.hcm')->with( $data);

    }
    public function plm(){
        $data['plm_web'] = HcmModel::orderBy('id', 'desc')->first();
        return view('website.plm')->with( $data);
    }
    public function scm(){
        $data['scm_web'] = ScmModel::orderBy('id', 'desc')->first();
        return view('website.scm')->with( $data);
    }

    // Admin

}


