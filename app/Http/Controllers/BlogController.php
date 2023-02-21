<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function allblog()
    {
        $allblog = Blog::latest()->get();
        // $category = Blog::has('blog_category')->first()->get();
        // $category = Blog::with('blog_category.blog_category_name')->latest()->get();

        return view('admin.Blog.allblog', compact('allblog'));
    }
    public function addblog()
    {
        $allcategory = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.Blog.addblog', compact('allcategory'));
    }
    public function storeblog(Request $request)
    {
        $request->validate(
            [
                'blog_title' => 'required',
                'category_id' => 'required',
                'blog_button' => 'required',
                'blog_tags' => 'required',
                'blog_description' => 'required',
                'blog_image' => 'required',


            ],
            [
                'blog_title.required' => 'Blog Title Field is required',
                'category_id.required' => ' Category Field is required',
                'blog_button.required' => 'Blog Button Field is required',
                'blog_tags.required' => 'Blog Tags Field is required',
                'blog_description.required' => 'Blog Description fieis required',
                'blog_image.required' => 'Blog Image is required',

            ]
        );



        $image = $request->file('blog_image');
        $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
        Image::make($image)->resize(430, 327)->save('admin/blog_image/' . $image_gen);
        $save_url = 'admin/blog_image/' . $image_gen;

        Blog::insert(
            [
                'blog_title' => $request->blog_title,
                'category_id' => $request->category_id,
                'blog_button' => $request->blog_button,
                'blog_tags' => $request->blog_tags,
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
        $allcategory = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.Blog.editblog', compact('blog', 'allcategory'));
    }
    public function updateblog(Request $request)
    {

        $data_id = $request->id;


        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('admin/blog_image/' . $image_gen);
            $saveurl = 'admin/blog_image/' . $image_gen;

            Blog::findorFail($data_id)->update([
                'blog_title' => $request->blog_title,
                'blog_button' => $request->blog_button,
                'blog_image' => $saveurl,
                'blog_description' => $request->blog_description,


                "updated_at" => Carbon::now()

            ]);

            $notification = array(
                'message' => "Blog Data updated  successfully",
                'alert-type' => "success",
            );

            return redirect(route('admin.allblogs'))->with($notification);
        }
    }


    public function deleteblog($id)
    {
        $data = Blog::findorFail($id);

        // $image = $data->portfilio_image;
        if (isset($data->blog_image)) {
            unlink($data->blog_image);
        }

        Blog::findorFail($id)->delete();
        $notification = array(
            'message' => 'Image deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
