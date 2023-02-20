<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }
    public function showprofile()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('admin.profile', compact('admindata'));
    }
    public function editprofile()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('admin.editprofile', compact('admindata'));
    }

    public function storeprofile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Y-m-d H:i:s') .  $file->getClientOriginalName();
            $file->move(public_path('admin/profileimage'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => "Profile updated successfully",
            'alert-type' => "success",
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function changepassword()
    {
        return view('admin.updatepassword');
    }
    public function updatepassword(Request $request)
    {
        $validatedata = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);
        $hashpassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashpassword)) {
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Old Password is not correct');
            return redirect()->back();
        }
    }
}
