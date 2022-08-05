<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\stockin;
use App\Models\material;
use Illuminate\Support\Facades\DB;



class stockinController extends Controller
{
    
    public function index()
    {
        $stockin = stockin::all(); 
        return view('admin.stockin.index', compact('stockin'));
    }
    public function create()
    {
        $materials = material::all();
        ($materials);
        return view('admin.stockin.create',compact('materials'));
    }

    public function getstockin($id){
        $material= material::select('M_ID')->where('id',$id)->first();
        return response()->json($material);
        
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'M_ID' => 'required',
        //     'M_name' => 'required',
        //     'S_date' => 'required',
        //     'S_in' => 'required',
        //     'S_unit_count' => 'required',
        //     'S_cost' => 'required',
        // ]);

        $stockin = new stockin;
        $stockin->M_ID = $request->M_id;
        $stockin->M_name = $request->material_name;
        $stockin->S_date = $request->S_date;
        $stockin->S_in = $request->S_in;
        $stockin->S_unit_count = $request->S_unit_count;
        $stockin->S_cost = $request->S_cost;
        Alert::success('รับเข้า','รับเข้าวัตถุดิบเรียบร้อยแล้ว');
        $stockin-> save();
        return redirect('admin/stockin');

    }


}
