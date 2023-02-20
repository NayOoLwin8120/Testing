<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function allblog()
    {
        $allblog = Blog::latest()->get();
        return view('admin.Blog.allblog', compact('allblog'));
    }
    public function addblog()
    {
        return view('admin.Blog.addblog');
    }
    public function storeblog(Request $request)
    {
        $request->validate(
            [
                'blog_title' => 'required',
                'blog_button' => 'required',
                'blog_description' => 'required',
                'blog_image' => 'required',


            ],
            [
                'blog_title.required' => 'Blog Title Field is required',
                'blog_button.required' => 'Blog Button Field is required',
                'blog_description.required' => 'Blog Description fieis required',
                'blog_image.required' => 'Blog Image is required',

            ]
        );



        $image = $request->file('blog_image');
        $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
        Image::make($image)->resize(850, 430)->save('admin/blog_image/' . $image_gen);
        $save_url = 'admin/blog_image/' . $image_gen;

        Blog::insert(
            [
                'blog_title' => $request->blog_title,
                'blog_button' => $request->blog_button,
                'blog_description' => $request->blog_description,

                'blog_image' => $save_url,
                'created_at' => Carbon::now(),
            ]
        );
        $notification = array(
            'message' => "Home Slider with image successfully",
            'alert-type' => "success",
        );
        return redirect(route('admin.allblogs'))->with($notification);
    }
    public function editblog($id)
    {
        $blog = Blog::findorFail($id);
        return view('admin.editblog', compact('blog'));
    }
}
