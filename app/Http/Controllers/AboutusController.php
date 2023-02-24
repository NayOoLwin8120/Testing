<?php

namespace App\Http\Controllers;



use App\Models\MultiImage;
use App\Models\Home\Aboutus;
use App\Models\Portfilio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


use Intervention\Image\Facades\Image;



class AboutusController extends Controller
{
    public function aboutus()
    {
        $aboutus = Aboutus::find(1);
        $multiimg = MultiImage::all();
        // @dd($multiimg[0]);s
        return view('admin.About_us.about_us', compact(['aboutus', 'multiimg']));
    } //end
    public function storeaboutus(Request $request)
    {
        $aboutus_id = $request->id;

        if ($request->file('aboutus_image')) {
            $image = $request->file('aboutus_image');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(523, 625)->save('admin/about_us/' . $image_gen);
            $saveurl = '/admin/about_us/' . $image_gen;

            Aboutus::findorFail($aboutus_id)->update([
                "title" => $request->title_name,
                'short_title' => $request->short_title_name,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'aboutus_image' => $saveurl,

            ]);
            $notification = array(
                'message' => "About_us updated with image successfully",
                'alert-type' => "success",
            );
            return redirect()->back()->with($notification);
        } else {
            Aboutus::findorFail($aboutus_id)->update([
                "title" => $request->title_name,
                'short_title' => $request->short_title_name,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,


            ]);
            $notification = array(
                'message' => "About_us updated without image successfully",
                'alert-type' => "success",
            );
            return redirect()->back()->with($notification);
        }
    } //end
    public function aboutmain()
    {
        $aboutus = Aboutus::find(1);
        return view('frontend.aboutus_main', compact('aboutus'));
    }
    public function multiimage()
    {
        return view('admin.About_us.multiimage');
    }
    public function storemultiimage(Request $request)
    {
        $image = $request->multiimage;
        if ($request->multiimage) {
            foreach ($image as $multiimage) {

                $image_gen = hexdec(uniqid()) . "." . $multiimage->getClientOriginalExtension();
                Image::make($multiimage)->resize(220, 220)->save('admin/multi_image/' . $image_gen);
                $saveurl = 'admin/multi_image/' . $image_gen;

                MultiImage::insert([
                    'multiimage' => $saveurl,
                    'created_at' => Carbon::now(),
                ]);
            }
            $notification = array(
                'message' => "Multi image  updated  successfully",
                'alert-type' => "success",
            );
            return redirect()->back()->with($notification);
        }
    }
    public function showmultipleimage()
    {
        $allmultiimage = MultiImage::all();
        // dd($allmutliimage);
        return view('admin.About_us.showmultiimage', compact('allmultiimage'));
    }
    public function editmultiimage($id)
    {
        $allmultiimage = MultiImage::findorFail($id);
        return view('admin.About_us.editmultiimage', compact('allmultiimage'));
    }
    public function updatemultiimage(Request $request)
    {
        $image_id = $request->id;

        if ($request->file('multiimage')) {
            $image = $request->file('multiimage');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('admin/multi_image/' . $image_gen);
            $saveurl = 'admin/multi_image/' . $image_gen;

            MultiImage::findorFail($image_id)->update([
                "multiimage" => $saveurl,
                "updated_at" => Carbon::now()

            ]);
            $notification = array(
                'message' => "Multiimage updated  successfully",
                'alert-type' => "success",
            );
            return redirect(route('admin.showmultiimage'))->with($notification);
        }
    }
    public function deletemultiimage($id)
    {
        $data = MultiImage::findorFail($id);
        $image = $data->multiimage;
        unlink($image);
        MultiImage::findorFail($id)->delete();
        $notification = array(
            'message' => 'Image deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
