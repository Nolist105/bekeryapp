@extends('layouts.master')
@section('title', 'stockin')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">รับเข้าวัตถุดิบ</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div {{'$error'}}</div>
                @endforeach
            </div>
            @endif


            <form action="{{ url('admin/addstockin') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container" style="margin-top: 20px;"></div>
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text "><i class="fa-solid fa-calendar-days"></i>&nbsp;วันที่รับเข้า</span>
                            <input type="date" name="S_date" class="form-control">
                          </div>
                        @error('S_date')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">รหัสวัตถุดิบ</span>
                        </div>
                        <input readonly type="text" name="M_id" id="M_id" class="M_id" >
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ชื่อวัตถุดิบ</span>
                        </div>
                        <select name="material_name" id="material_name" class="material_name"">
                            <option value="0" disabled="true" selected="true">----เลือก----</option>
                            @foreach($materials as $material)
                            <option value="{{$material->id}}">{{$material->M_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">จำนวนที่รับเข้า</span>
                        </div>
                        <input type="number" name="S_in" class="form-control" value="{{ old('S_in')}}">
                        @error('S_in')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">หน่วยนับ</span>
                        </div>
                        <select class="form-select form-select" aria-label=".form-select example" name="S_unit_count" value="{{ old('S_unit_count')}}">
                            <option selected>----เลือก----</option>
                            <option name="S_unit_count" value="กิโลกรัม">กิโลกรัม</option>
                            <option name="S_unit_count" value="กรัม">กรัม</option>
                            <option name="S_unit_count" value="ขวด">ขวด</option>
                        </select>
                        @error('S_unit_count')
                                <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ต้นทุนต่อหน่วยนับ</span>
                        </div>
                        <input type="number" name="S_cost" class="form-control" value="{{ old('S_cost')}}">
                        @error('S_cost')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <a href="{{ url('admin/stockin') }}" class="btn btn-danger">กลับ</a>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>

@endsection