<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function index()
    {
        
        $product = product::where('P_delete',1)->paginate(5);
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'P_ID' => 'disabled',
            'P_name' => 'required',
            'P_image' => 'nullable|mimes:jpg,jpeg,png,gif',
            'Price' => 'required',
            'P_quantity' => 'required',
            'P_unit_pro' => 'required',
            'P_number' => 'required',
        ]);

        $product = new product;
        if($request->hasFile('P_image')){
            $file = $request-> file('P_image');
            $filename = time().'.'.$file-> getClientOriginalExtension();
            $location = public_path('/images');
            $file-> move($location, $filename);
            $product-> P_image = $filename;
        }
        $product->P_ID = $request->P_ID;
        $product->P_name = $request->P_name;
        $product->P_image = $filename;
        $product->Price = $request->Price;
        $product->P_quantity = $request->P_quantity;
        $product->P_unit_pro = $request->P_unit_pro;
        $product->P_number = $request->P_number;
        Alert::success('เพิ่ม','เพิ่มสินค้าเรียบร้อยแล้ว');
        $product-> save();
        return redirect('admin/product');
        
    }

    public function edit($id)
    {
        $product = product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'P_ID' => 'disabled',
            'P_name' => 'required',
            'Price' => 'required',
            'P_quantity' => 'required',
            'P_unit_pro' => 'required',
            'P_number' => 'required',
        ]);
        $product = product::find($id);
        if($request->hasFile('P_image')){
            $file = $request-> file('P_image');
            $filename = time().'.'.$file-> getClientOriginalExtension();
            $location = public_path('/images');
            $file-> move($location, $filename);
            $product-> P_image= $filename;
        }
        /* $product->P_ID = $request->P_ID; */
        $product->P_name = $request->P_name;
        $product->Price = $request->Price;
        $product->P_quantity = $request->P_quantity;
        $product->P_unit_pro = $request->P_unit_pro;
        $product->P_number = $request->P_number;
        Alert::success('แก้ไข','แก้ไขเรียบร้อยแล้ว');
        $product-> save();
        return redirect('admin/product');
    }

    public function destroy($id) {
        $product = product::find($id);
        $product->P_delete='0';
        Alert::success('ลบ','ลบเรียบร้อยแล้ว');
        $product->save();
        return redirect('admin/product');
    }


}
