<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\materialorder;

use App\Models\material;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MaterialorderController extends Controller
{
    public function index()
    {
        $materialorder = materialorder::all();
        return view('admin.materialmanage.materialorder', compact('materialorder'));
    }

    public function manage()
    {
        
        $material = material::all();
        return view('admin.materialmanage.managematerial', compact('material'));
    }

    public function order() //วัตถุดิบที่ต้องสั่งซื้อ
    {
        
        $material = material::all();
        return view('admin.materialmanage.materialorder', compact('material'));
    }

    
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
             'M_ID' => 'required',
             'M_name' => 'required',
             'MO_date' => 'required',
         ]);

        $materialorder = new materialorder;
        $materialorder->M_ID = $request->M_ID;
        $materialorder->M_name = $request->M_name;
        $materialorder->MO_date = $request->MO_date;
        /* Alert::success('เพิ่ม','เพิ่มสินค้าเรียบร้อยแล้ว'); */
        $materialorder-> save();
        return redirect('admin/materialorder');
        
    }
}
