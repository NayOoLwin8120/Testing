<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    public function homeslider()
    {
        $homeslider = Home::find(1);

        // @dd($homeslider);
        return view('admin.homeslider', compact('homeslider'));
    }
    public function storehomeslider(Request $request)
    {
        $slider_id = $request->id;

        if ($request->file("slider_image")) {
            $image = $request->file('slider_image');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(636, 852)->save('admin/Home_slider_image/' . $image_gen);
            $save_url = 'admin/Home_slider_image/' . $image_gen;

            Home::findorFail($slider_id)->update(
                [
                    'title' => $request->title_name,
                    'short_title' => $request->short_title_name,
                    'slide_image' => $save_url,
                    'video_url' => $request->slider_video,
                ]
            );
            $notification = array(
                'message' => "Home Slider with image successfully",
                'alert-type' => "success",
            );
            return redirect()->back()->with($notification);
        } else {
            Home::findorFail($slider_id)->update(
                [
                    'title' => $request->title_name,
                    'short_title' => $request->short_title_name,
                    // 'slide_image' => $request->slider_image,
                    'video_url' => $request->slider_video,
                ]
            );
            $notification = array(
                'message' => "Home Slider without image successfully",
                'alert-type' => "success",
            );
            return redirect()->back()->with($notification);
        }
    }
}
