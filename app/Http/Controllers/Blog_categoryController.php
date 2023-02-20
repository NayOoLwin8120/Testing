<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog_category;
use Illuminate\Support\Carbon;

class Blog_categoryController extends Controller
{

    public function all_blog_category()
    {

        $allcategory = Blog_category::latest()->get();
        return view('admin.Blog.all_category_blog', compact('allcategory'));
    }
    public function add_blog_category()
    {
        return view('admin.Blog.addblogcategory');
    }
    public function  store_blog_category(Request $request)
    {
        $request->validate(
            [
                'blog_category_name' => 'required',
            ],
            [
                'blog_category_name.required' => 'Blog Title Field is required',
            ]
        );


        Blog_category::insert(
            [
                'blog_category_name' => $request->blog_category_name,

                'created_at' => Carbon::now(),
            ]
        );
        $notification = array(
            'message' => "Adding Blog_Category successfully",
            'alert-type' => "success",
        );
        return redirect(route('admin.all_blog_category'))->with($notification);
    }
    public function edit_blog_category($id)
    {
        $category = Blog_category::findorFail($id);
        return view('admin.Blog.edit_blog_category', compact('category'));
    }
    public function update_blog_category(Request $request, $id)
    {
        Blog_category::findorFail($id)->update([
            'blog_category_name' => $request->blog_category_name,

        ]);
        $notification = array(
            'message' => "Updating Blog_Category successfully",
            'alert-type' => "success",
        );
        return redirect(route('admin.all_blog_category'))->with($notification);
    }

    public function delete_blog_category($id)
    {
        Blog_category::findorFail($id)->delete();
        $notification = array(
            'messge' => 'Blog_Category deleted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
