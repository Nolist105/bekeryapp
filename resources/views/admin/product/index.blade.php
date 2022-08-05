@extends('layouts.master')
@section('title', 'product')

<?php 
$connect = new mysqli('localhost', 'root', '', 'bekery-app');
$sql = "SELECT * FROM menu";
$result = $connect->query($sql);
?>

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>รายการสินค้า
                <a href="{{ url('admin/addproduct') }}" class="btn btn-primary float-end">เพิ่มสินค้า</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class ="table-responsive my-3">
                <table class="table table-bordered">
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>รูปภาพสินค้า</th>
                    <th>ราคาต่อหน่วยผลิต</th>
                    <th>จำนวน</th>
                    <th>หน่วยผลิต</th>
                    <th>จำนวนแปลงหน่วย</th>
                    <th>จัดการ</th>
                </tr>
                @foreach($product as $product)
                    <tr>
                        <td>{{ $product->P_ID }}</td>
                        <td>{{ $product->P_name }}</td>
                        <td> 
                            <img src="{{ asset('images/'.$product->P_image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{ $product->Price }}</td>
                        <td>{{ $product->P_quantity }}</td>
                        <td>{{ $product->P_unit_pro }}</td>
                        <td>{{ $product->P_number }}</td>
                        <td>
                            
                                <a href="{{ url('admin/editproduct/'.$product->id) }}" class="btn btn-warning">แก้ไข</a>
                                @csrf
                                {{-- @method('DELETE') --}}
                                
                                {{-- <a href="{{ url('admin/deleteproduct/'.$product->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#product{{$product->id}}">ลบ</a>  --}}
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#product{{$product->id}}">
                                    ลบ
                                  </button>

                                <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">ยืนยันการลบ</h4>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                                </button>
                                            </div>
                                            <div class="modal-body">ยืนยันการลบข้อมูล&nbsp;<b>{{$product->P_ID}}</b>&nbsp;<b>{{$product->P_name}}</b>&nbsp;หรือไม่?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                                <a href="{{ url('admin/deleteproduct/'.$product->id)}}" class="btn btn-primary">ลบ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('admin/ingredient')}}" class="btn btn-success"><i class="fas fa-folder-plus"></i></a>
                        </td>
                        
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection