@extends('layouts.master')
@section('title', 'product')

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">แก้ไขสินค้า</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div {{'$error'}}</div>
                    @endforeach
            </div>
            @endif
        

            <form action="{{ url('admin/updateproduct/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- {{ method_field('put') }} --}}

                <div class="container" style="margin-top: 20px;"></div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">รหัสสินค้า</span>
                    </div> 
                    <input type="text" name="P_ID" value="{{ $product->P_ID}}" class="form-control" disabled>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ชื่อสินค้า</span>
                    </div> 
                    <input type="text" name="P_name" value="{{ $product->P_name}}" class="form-control"  >
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">รูปภาพสินค้า  &nbsp; <input type="file" name="P_image" value="{{ $product->P_image}}" class="form-control">
                            @error('P_image')
                            <div class="alert alert-danger">{{ $message}}</div>
                            @enderror</span>
                    </div> 
                </div>
                <input type="hidden" name="old_image" value="{{ $product->P_image}}" class="form-control">
                <img src="/images/{{ $product->P_image }}" width="300px">

                <br><br>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ราคาต่อหน่วยผลิต</span>
                    </div> 
                    <input type="number" name="Price" value="{{ $product->Price}}" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">จำนวน</span>
                    </div> 
                    <input type="number" name="P_quantity" value="{{ $product->P_quantity}}" class="form-control">
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
                    <input type="number" name="P_number" value="{{ $product->P_number}}" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <a href="{{ url('admin/product')  }}" class="btn btn-success">กลับ</a>
                </div>

                </div>

            </form>

        </div>
    </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection