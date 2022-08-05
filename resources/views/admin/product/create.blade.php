@extends('layouts.master')
@section('title', 'product')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">เพิ่มสินค้า</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div {{'$error'}}</div>
                    @endforeach
            </div>
            @endif
        

            <form action="{{ url('admin/addproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="container" style="margin-top: 20px;"></div>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ชื่อสินค้า</span>
                    </div> 
                    <input type="text" name="P_name" class="form-control"> 
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">รูปภาพสินค้า</span>
                    </div> 
                    <input type="file" name="P_image" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ราคาต่อหน่วยผลิต</span>
                    </div> 
                    <input type="number" name="Price" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">จำนวน</span>
                    </div> 
                    <input type="number" name="P_quantity" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">หน่วยผลิต</span>
                    </div> 
                    <select class="form-select form-select" aria-label=".form-select example" name="P_unit_pro">
                        <option selected>เลือกหน่วยผลิต</option>
                        <option name="P_unit_pro" value="ถาด">ถาด</option>
                        <option name="P_unit_pro" value="ปอนด์">ปอนด์</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">จำนวนแปลงหน่วย</span>
                    </div> 
                    <input type="number" name="P_number" class="form-control">
                </div>
                
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a href="{{ url('admin/product')  }}" class="btn btn-danger">กลับ</a>
                </div>
                

            </form>

        </div>
    </div>


</div>

@endsection