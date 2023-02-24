<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Pimage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{
    public function allpartner()
    {
        $allpartner = Partner::all();
        return view('admin.Partner.Allpartner', compact('allpartner'));
    }
    public function addpartner()
    {
        return view('admin.Partner.Addpartner');
    }
    public function storepartner(Request $request)
    {


        $request->validate(
            [
                'title' => 'required',
                'short_description' => 'required',

            ],
            [
                'title.required' => 'Title Field is required',
                'short_description.required' => ' Short_Description Field is required',


            ]
        );
        Partner::insert(
            [
                'title' => $request->title,
                'short_description' => $request->short_description,

                'created_at' => Carbon::now(),
            ]
        );
        $notification = array(
            'message' => "Adding Footer Data successfully",
            'alert-type' => "success",
        );

        return redirect()->route('admin.all_partner')->with($notification);
    }
    public function editpartner($id)
    {
        $data = Partner::findorFail($id);
        return view('admin.Partner.EditPartner', compact('data'));
    }
    public function deletepartner($id)
    {
        Partner::findorFail($id)->delete();
        $notification = array(
            'message' => 'Partner Data Deleted Successfully',
            'status' => 'success',
        );
        return redirect()->route('admin.all_partner')->with($notification);
    }
    public function multiimage()
    {
        return view('admin.Partner.Partnerimage');
    }
    public function storemultiimage(Request $request)
    {
        $image = $request->multiimage;
        if ($request->multiimage) {
            foreach ($image as $multiimage) {

                $image_gen = hexdec(uniqid()) . "." . $multiimage->getClientOriginalExtension();
                Image::make($multiimage)->resize(220, 220)->save('admin/partner/' . $image_gen);
                $saveurl = 'admin/partner/' . $image_gen;

                Pimage::insert([
                    'multiimage' => $saveurl,
                    'created_at' => Carbon::now(),
                ]);
            }
            $notification = array(
                'message' => "Multi image  updated  successfully",
                'alert-type' => "success",
            );
            return redirect()->route('admin.showmultiimage')->with($notification);
        }
    }
    public function showmultipleimage()
    {
        $allmultiimage = Pimage::all();
        // dd($allmutliimage);
        return view('admin.Partner.showpartnerimage', compact('allmultiimage'));
    }
    public function editmultiimage($id)
    {
        $allmultiimage = Pimage::findorFail($id);
        return view('admin.Partner.editpartnerimage', compact('allmultiimage'));
    }
    public function updatemultiimage(Request $request)
    {
        $image_id = $request->id;

        if ($request->file('multiimage')) {
            $image = $request->file('multiimage');
            $image_gen = hexdec(uniqid()) . "." . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('admin/partner/' . $image_gen);
            $saveurl = 'admin/partner/' . $image_gen;

            Pimage::findorFail($image_id)->update([
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
        $data = Pimage::findorFail($id);
        $image = $data->multiimage;
        unlink($image);
        Pimage::findorFail($id)->delete();
        $notification = array(
            'message' => 'Image deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
