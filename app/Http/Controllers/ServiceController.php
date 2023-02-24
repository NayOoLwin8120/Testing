<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
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
        Image::make($image)->resize(1020, 520)->save('admin/Service/' . $image_gen);
        $save_url = '/admin/Service/' . $image_gen;

        Service::insert(
            [
                'title' => $request->title,
                'description' => $request->description,

                'button' => $request->button,

                'service_image' => $save_url,
            ]
        );
        $notification = array(
            'message' => "Service with image successfully",
            'alert-type' => "success",
        );
        return redirect(route('allservice'))->with($notification);
    }
    public function editservice($id)
    {
        $servicedata = Service::find($id);
        return view('admin.Service.editservice', compact('servicedata'));
    }
}
