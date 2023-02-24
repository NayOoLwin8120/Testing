<?php

namespace App\Http\Controllers;

use App\Models\Portfilio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class PortfilioController extends Controller
{


    public function allportfilio()
    {
        $allportfilio = Portfilio::latest()->get();
        return view('admin.portfilio.allportfilio', compact('allportfilio'));
    }
    public function addportfilio()
    {
        return view('admin.Portfilio.addportfilio');
    }
    public function storeportfilio(Request $request)
    {
        $request->validate(
            [
                'portfilio_name' => 'required',
                'portfilio_title' => 'required',
                'portfilio_button' => 'required',
                'portfilio_image' => 'required',
                'portfilio_description' => 'required',

            ],
            [
                'portfilio_name.required' => 'Portfilio Name is required',
                'portfilio_title.required' => 'Portfilio title is required',
                'portfilio_button.required' => 'Portfilio button is required',
                'portfilio_image.required' => 'Portfilio image is required',
                'portfilio_description.required' => 'Portfilio description is required',
            ]
        );



        $image = $request->file('portfilio_image');
        $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
        Image::make($image)->resize(1020, 520)->save('admin/portfilio_image/' . $image_gen);
        $save_url = '/admin/portfilio_image/' . $image_gen;

        Portfilio::insert(
            [
                'portfilio_name' => $request->portfilio_name,
                'portfilio_title' => $request->portfilio_title,
                'portfilio_button' => $request->portfilio_button,
                'portfilio_description' => $request->portfilio_description,

                'portfilio_image' => $save_url,
            ]
        );
        $notification = array(
            'message' => "Home Slider with image successfully",
            'alert-type' => "success",
        );
        return redirect(route('admin.allportfilio'))->with($notification);
    }
    public function editportfilio($id)
    {
        $portfilio = Portfilio::find($id);
        return view('admin.Portfilio.editportfilio', compact('portfilio'));
    }
    public function updateportfilio(Request $request)
    {
        $data_id = $request->id;

        if ($request->file('portfilio_image')) {
            $image = $request->file('portfilio_image');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('admin/portfilio_image/' . $image_gen);
            $saveurl = 'admin/portfilio_image/' . $image_gen;

            Portfilio::findorFail($data_id)->update([
                'portfilio_name' => $request->portfilio_name,
                'portfilio_title' => $request->portfilio_title,
                'portfilio_button' => $request->portfilio_button,
                'portfilio_description' => $request->portfilio_description,
                'portfilio_image' => $saveurl,

                "updated_at" => Carbon::now()

            ]);
            $notification = array(
                'message' => "Portfilio Data updated  successfully",
                'alert-type' => "success",
            );
            return redirect(route('admin.allportfilio'))->with($notification);
        }
    }
    public function deleteportfilio($id)
    {
        $data = Portfilio::findorFail($id);

        // $image = $data->portfilio_image;
        if (isset($data->portfilio_image)) {
            unlink($data->portfilio_image);
        }

        Portfilio::findorFail($id)->delete();
        $notification = array(
            'message' => 'Image deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function portfilio_detail($id)
    {
        $portfilio = Portfilio::find($id);
        return view('frontend.portfilio_detail', compact('portfilio'));
    }
    //for all
    public function HomePortfolio()
    {

        $portfolio = Portfilio::latest()->get();
        return view('frontend.portfilio', compact('portfolio'));
    }
}
