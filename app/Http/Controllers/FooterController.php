<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FooterController extends Controller
{
    public function footer()
    {
        $allfooter = Footer::all();
        return view('admin.Footer.Allfooter', compact('allfooter'));
    }
    public function addfooter()
    {
        return view('admin.Footer.AddFooter');
    }
    public function storefooter(Request $request)
    {


        $request->validate(
            [
                'phone_number' => 'required',
                'short_description' => 'required',
                'Country' => 'required',
                'address' => 'required',
                'email' => 'required',
                'facebook_link' => 'required',
                'twitter_link' => 'required',
                'Linked_in' => 'required',
                'Instrgram' => 'required',
                'copyright' => 'required',
            ],
            [
                'phone_number.required' => 'Phone number Field is required',
                'short_description.required' => ' Short_Description Field is required',
                'Country.required' => 'Country Field is required',
                'address.required' => 'Address Field is required',
                'email.required' => 'Email field is required',
                'facebook_link.required' => 'Facebook Filed is required',
                'twitter_link.required' => 'Twitter Filed is required',
                'Linked_in.required' => 'Linked_in Filed is required',
                'Instrgram.required' => 'Instrgram Field is required',
                'copyright.required' => 'CopyRight Filed is required',

            ]
        );
        Footer::insert(
            [
                'phone_number' => $request->phone_number,
                'short_description' => $request->short_description,
                'Country' => $request->Country,
                'address' => $request->address,
                'email' => $request->email,
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'Linked_in' => $request->Linked_in,
                'Instrgram' => $request->Instrgram,
                'copyright' => $request->copyright,
                'created_at' => Carbon::now(),
            ]
        );
        $notification = array(
            'message' => "Adding Footer Data successfully",
            'alert-type' => "success",
        );

        return redirect()->route('admin.all_footer')->with($notification);
    }

    public function editfooter($id)
    {
        $data = Footer::findorFail($id);
        return view('admin.Footer.EditFooter', compact('data'));
    }
    public function updatefooter(Request $request, $id)
    {
        Footer::findorFail($id)->update([
            'phone_number' => $request->phone_number,
            'short_description' => $request->short_description,
            'Country' => $request->Country,
            'address' => $request->address,
            'email' => $request->email,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'Linked_in' => $request->Linked_in,
            'Instrgram' => $request->Instrgram,
            'copyright' => $request->copyright,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => "Footer Updated successfully",
            'status' => "success",
        );
        return redirect()->route('admin.all_footer')->with($notification);
    }
    public function deletefooter($id)
    {
        Footer::findorFail($id)->delete();
        $notification = array(
            'message' => 'Footer Deleted Successfully',
            'status' => 'success',
        );
        return redirect()->route('admin.all_footer')->with($notification);
    }
}
