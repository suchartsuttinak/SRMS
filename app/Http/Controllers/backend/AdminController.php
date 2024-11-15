<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData =User::findOrFail($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileUpdate (Request $request){
        // dd($request->all());
        $id = Auth::user()->id;
        $admin = User::findOrFail($id);
        $admin->name = $request->name;
        $admin->email = $request->email;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            @unlink(public_path('uploads/admin_profiles/'.$admin->photo));// (กรณีไม่มีการเปลี่ยนแปลงรูปภาพ)
            $imageName = date('YmdHi').'.'.$file->getClientOriginalName(); // 20240202.admin.png
            $file->move(public_path('uploads/admin_profiles'), $imageName);
            $admin['photo'] = $imageName;
        }

        $admin->save();

        // toastr Alert Message
        $notification = array(
            'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว !',
            'alert-type' => 'success'
        );
        // toastr Alert Message

        return redirect()->back()->with($notification);
    }

    public function AdminPasswordChange(){
        return view('admin.admin_password_change');
       
       
    } // End method
            
}