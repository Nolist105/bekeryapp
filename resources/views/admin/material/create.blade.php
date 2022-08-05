@extends('layouts.master')
@section('title', 'material')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">เพิ่มวัตถุดิบ</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div {{'$error'}}</div>
                @endforeach
            </div>
            @endif
        

            <form action="{{ url('admin/addmaterial') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="container" style="margin-top: 20px;"></div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ชื่อวัตถุดิบ</span>
                        </div> 
                        <input type="text" name="M_name" class="form-control">
                                @error('M_name')
                                    <div class="alert alert-danger alert-block">
                                            <strong>{{ $message}}</strong>
                                    </div>
                                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">หน่วยซื้อ</span>
                        </div> 
                        <select class="form-select form-select" aria-label=".form-select example" name="M_unit_pack">
                            <option selected>เลือกหน่วยซื้อ</option>
                            <option name="M_unit_pack" value="กรัม">กรัม</option>
                            <option name="M_unit_pack" value="ช้อนโต๊ะ">ช้อนโต๊ะ</option>
                            <option name="M_unit_pack" value="ฟอง">ฟอง</option>
                            <option name="M_unit_pack" value="มิลลิลิตร">มิลลิลิตร</option>
                        </select>
                        @error('M_unit_use')
                                <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">หน่วยใช้</span>
                        </div> 
                        <select class="form-select form-select" aria-label=".form-select example" name="M_unit_use">
                            <option selected>เลือกหน่วยใช้</option>
                            <option name="M_unit_use" value="กรัม">กรัม</option>
                            <option name="M_unit_use" value="ช้อนโต๊ะ">ช้อนโต๊ะ</option>
                            <option name="M_unit_use" value="ฟอง">ฟอง</option>
                        </select>
                        @error('M_unit_use')
                                <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">จำนวนแปลงหน่วย</span>
                        </div> 
                        <input type="number" name="M_number" class="form-control">
                        @error('M_number')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">d</span>
                        </div> 
                        <input type="number" name="M_d" class="form-control">
                                @error('M_d')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">LT</span>
                        </div> 
                        <input type="number" name="M_LT" class="form-control">
                                @error('M_LT')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">yield</span>
                        </div> 
                        <input type="number" name="M_Yield" class="form-control">
                                @error('M_Yield')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ url('admin/material') }}" class="btn btn-danger">กลับ</a>
                    </div>
                    

                </div>
            </form>
        </div>
    </div>
</div>

@endsection