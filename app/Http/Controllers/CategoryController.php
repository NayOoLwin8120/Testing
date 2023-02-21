<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function all_blog_category()
    {

        $allcategory = Category::latest()->get();
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
                'category_name' => 'required',
            ],
            [
                'category_name.required' => 'Category Field is required',
            ]
        );


        Category::insert(
            [
                'category_name' => $request->category_name,

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
        $category = Category::findorFail($id);
        return view('admin.Blog.edit_blog_category', compact('category'));
    }
    public function update_blog_category(Request $request, $id)
    {
        Category::findorFail($id)->update([
            'category_name' => $request->blog_category_name,

        ]);
        $notification = array(
            'message' => "Updating Blog_Category successfully",
            'alert-type' => "success",
        );
        return redirect(route('admin.all_blog_category'))->with($notification);
    }

    public function delete_blog_category($id)
    {
        Category::findorFail($id)->delete();
        $notification = array(
            'messge' => 'Blog_Category deleted successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}
