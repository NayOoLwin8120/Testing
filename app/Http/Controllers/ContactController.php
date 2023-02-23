<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Contact;
use App\Models\Contactme;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class ContactController extends Controller
{
    public function allcontact()
    {
        $alldata = Contact::all();
        return view('admin.Contactme.allmycontact', compact('alldata'));
    }
    public function adddata()
    {
        $footer = Footer::all();
        return view('admin.Contactme.adddata', compact('footer'));
    }
    public function storedata(Request $request)
    {

        $request->validate(
            [
                'location' => 'required',
                'footer_id' => 'required',
            ],
            [
                'location.required' => 'Location Filed is Required. Please enter your location',
                'footer_id.required' => 'Contact mail  is Required. Please choose your Email',
            ]
        );
        Contact::insert([
            'footer_id' => $request->footer_id,
            'location' => $request->location,
            'created_at' => Carbon::now(),
        ]);
        $notification = array([
            'message' => 'Contact Added Successfully',
            'alert-type' => 'success',
        ]);

        return redirect()->route('admin.allcontactdata')->with($notification);
    }
    public function editcontact($id)
    {
        $data = Contact::FindorFail($id);
        $footer = Footer::orderBy('email', 'ASC')->get();
        return view('admin.Contactme.editcontact', compact('data', 'footer'));
    }
    public function updatecontact(Request $request, $id)
    {
        Contact::findorFail($id)->update([
            'footer_id' => $request->footer_id,
            'location' => $request->location,

            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => "Contact Data Updated successfully",
            'status' => "success",
        );
        return redirect()->route('admin.allcontactdata')->with($notification);
    }
    public function deletecontact($id)
    {
        Contact::findorFail($id)->delete();
        $notification = array(
            'message' => "Contact Data Delete successfully",
            'status' => "success",
        );
        return redirect()->route('admin.allcontactdata')->with($notification);
    }

    // For Contact Frontend
    public function contact()
    {
        $alldata = Contact::find(4);

        return view('frontend.Contact.Contact', compact('alldata'));
    }

    public function StoreMessage(Request $request)
    {
        @dd('hit');

        Contactme::insert([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Your Message Submited Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ContactMessage()
    {

        $contacts = Contactme::latest()->get();
        return view('admin.Contactme.allcontact', compact('contacts'));
    } // end mehtod


    public function DeleteMessage($id)
    {

        Contactme::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Your Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end mehtod
}
