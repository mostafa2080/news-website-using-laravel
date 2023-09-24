<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully!',
            'alert-type' => 'info',
        );

        return redirect('/admin/logout/page')->with($notification);
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }
    public function AdminLogoutPage()
    {
        return view('admin.admin_logout');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $notification = array(
            'message' => 'Your Profile Updated Successfully!',
            'alert-type' => 'success',
        );
        $data->save();
        return redirect()->back()->with($notification);
    } //end method



    public function AdminChangePassword()
    {
        return view('admin.admin_change_password');
    } //end method

    public function AdminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
        //match old password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with('error', "Old Password Doesn't Match!!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with('status', "Password Change Successfully");
    }

    public function AllAdmin()
    {
        $alladminuser = User::where('role', 'admin')->latest()->get();

        return view('backend.admin.all_admin', compact('alladminuser'));
    }

    public function AddAdmin()
    {
        $roles = Role::all();
        return view('backend.admin.add_admin', compact('roles'));
    } // End Method

    public function StoreAdmin(Request $request)
    {

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'inactive';
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'New Admin User Created Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.admin')->with($notification);
    } // End Method


    public function EditAdmin($id)
    {
        $roles = Role::all();
        $adminuser = User::findOrFail($id);
        return view('backend.admin.edit_admin', compact('adminuser', 'roles'));
    } // End Method

    public function UpdateAdmin(Request $request)
    {

        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = 'admin';
        $user->status = 'inactive';
        $user->save();
        
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'Admin User Updated Successfully',
            'alert-type' => 'success'

        );
        return redirect()->route('all.admin')->with($notification);
    } // End Method


    public function DeleteAdmin($id)
    {

        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    } // End Mehtod

    public function InactiveAdminUser($id)
    {

        User::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Admin User Inactivated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    } // End Mehtod


    public function ActiveAdminUser($id)
    {
        // dd($id);
        User::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Admin User Activated Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    } // End Mehtod
}
