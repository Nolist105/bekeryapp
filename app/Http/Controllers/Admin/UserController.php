<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        
        $user = User::where('u_delete',1)->where('role_as',0)->get();
        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        Alert::success('เพิ่ม','เพิ่มผู้ใช้เรียบร้อยแล้ว');
        $user-> save();
        return redirect('admin/user');
    }

    public function destroy($id) {
        $user = user::find($id);
        $user->u_delete='0';
        Alert::success('ลบ','ลบเรียบร้อยแล้ว');
        $user->save();
        return redirect('admin/user');
    }
}
