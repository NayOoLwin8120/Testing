<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function allservice()
    {
        $alldata = Service::all();
        return view('admin.Service.allservice', compact('alldata'));
    }
    public function addservice()
    {
        return view('admin.Service.addservice');
    }
    public function storeservice(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'button' => 'required',
                'service_image' => 'required',

            ],
            [
                'title.required' => 'Service Title Field is required',
                'description.required' => 'Service Description Filed is required',
                'button.required' => 'Service button Field is required',
                'service_image.required' => 'Service image Field is required',

            ]
        );



        $image = $request->file('service_image');
        $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
        Image::make($image)->resize(850, 430)->save('admin/Service/' . $image_gen);
        $save_url = '/admin/Service/' . $image_gen;

        Service::insert(
            [
                'title' => $request->title,
                'description' => $request->description,

                'button' => $request->button,

                'service_image' => $save_url,
                'created_at' => Carbon::now(),
            ]
        );
        $notification = array(
            'message' => "Service with image successfully",
            'alert-type' => "success",
        );
        return redirect()->route('admin.allservice')->with($notification);
    }
    public function editservice($id)
    {
        $servicedata = Service::find($id);
        return view('admin.Service.editservice', compact('servicedata'));
    }
    public function update_service(Request $request)
    {
        $image_id = $request->id;

        if ($request->file('service_image')) {
            $image = $request->file('service_image');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(850, 430)->save('admin/Service/' . $image_gen);
            $saveurl = 'admin/Service/' . $image_gen;

            Service::findorFail($image_id)->update([
                'title' => $request->title,
                'description' => $request->description,

                'button' => $request->button,

                'service_image' => $saveurl,
                "updated_at" => Carbon::now()

            ]);
            $notification = array(
                'message' => "Service Data updated  successfully",
                'alert-type' => "success",
            );
            return redirect(route('admin.allservice'))->with($notification);
        }
    }
    public function deleteservice($id)
    {
        $data = Service::findorFail($id);
        $image = $data->service_image;
        if (is_file($image)) {
            unlink($image);
        }

        Service::findorFail($id)->delete();
        $notification = array(
            'message' => 'Service data deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function service_detail($id)
    {
        $service = Service::find($id);
        $footer = Footer::first()->get();
        return view('frontend.services_detail', compact('service', 'footer'));
    }
}
