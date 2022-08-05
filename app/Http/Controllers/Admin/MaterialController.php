<?php

namespace App\Http\Controllers\Admin;
use App\Models\material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MaterialController extends Controller
{
    public function index()
    {
        
        $material = material::where('M_delete',1)->paginate(5);
        return view('admin.material.index', compact('material'));
    }

    /* public function manage()
    {
        
        $material = material::all();
        return view('admin.materialmanage.managematerial', compact('material'));
    } */

    public function create()
    {
        return view('admin.material.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'M_ID' => 'disabled',
            'M_name' => 'required|unique:material',
            'M_balane' => 'required',
            'M_unit_use' => 'required',
            'M_point' => 'required',
            'M_unit_pack' => 'required',
            'M_number' => 'required',
            'M_d' => 'required',
            'M_LT' => 'required',
            'M_Yield' => 'required',
        ],
        [
            'M_name.unique' => 'คุณกรอกชื่อวัตถุดิบนี้ไปแล้ว'
        ]);

        $material = new material;
        $material->M_ID = $request->M_ID;
        $material->M_name = $request->M_name;
        $material->M_balane = $request->M_balane;
        $material->M_unit_use = $request->M_unit_use;
        $material->M_point = $request->M_point;
        $material->M_unit_pack = $request->M_unit_pack;
        $material->M_number = $request->M_number;
/*         $material->M_d = $request->M_d;
        $material->M_LT = $request->M_LT;
        $material->M_Yield = $request->M_Yield; */
        Alert::success('เพิ่ม','เพิ่มสินค้าเรียบร้อยแล้ว');
        $material-> save();
        return redirect('admin/material');
        
    }

    public function edit($id)
    {
        $material = material::find($id);
        return view('admin.material.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'M_ID' => 'required',
            'M_name' => 'required',
            'M_balane' => 'required',
            'M_unit_use' => 'required',
            'M_point' => 'required',
            'M_unit_pack' => 'required',
            'M_number' => 'required',
        ]);
        $material = material::find($id);
        $material->M_ID = $request->M_ID;
        $material->M_name = $request->M_name;
        $material->M_balane = $request->M_balane;
        $material->M_unit_use = $request->M_unit_use;
        $material->M_point = $request->M_point;
        $material->M_unit_pack = $request->M_unit_pack;
        $material->M_number = $request->M_number;
        Alert::success('แก้ไข','แก้ไขเรียบร้อยแล้ว');
        $material-> save();
        return redirect('admin/material');
    }

    public function destroy($id) {
        $material = material::find($id);
        $material->M_delete='0';
        Alert::success('ลบ','ลบข้อมูลเรียบร้อยแล้ว');
        $material->save();
        return redirect('admin/material');
    }
}
