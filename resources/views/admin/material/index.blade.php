@extends('layouts.master')
@section('title', 'material')

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>รายการวัตถุดิบ
                <a href="{{ url('admin/addmaterial') }}" class="btn btn-primary float-end">เพิ่มวัตถุดิบ</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class ="table-responsive my-3">
                <table class="table table-bordered">
                <tr>
                    <th>รหัสวัตถุดิบ</th>
                    <th>ชื่อวัตถุดิบ</th>
                    {{-- <th>จำนวนคงเหลือ</th>  ตัดออก--}} 
                    <th>หน่วยซื้อ</th>
                    <th>หน่วยใช้</th>
                    <th>จำนวนแปลงหน่วย</th>
                    <th>จัดการ</th>
                </tr>
                @foreach($material as $material)
                    <tr>
                        <td>{{ $material->M_ID }}</td>
                        <td>{{ $material->M_name }}</td>
                        {{-- <td>{{ $material->M_balane }}</td> --}}
                        <td>{{ $material->M_unit_pack }}</td>
                        <td>{{ $material->M_unit_use }}</td>
                        <td>{{ $material->M_number }}</td>
                        <td>
                            
                                <a href="{{ url('admin/editmaterial/'.$material->id) }}" class="btn btn-warning">แก้ไข</a>
                                @csrf
                                {{-- @method('DELETE') --}}
                                
{{--                                 <a href="{{ url('admin/deletematerial/'.$material->id)}}" class="btn btn-danger">ลบ</a> 
 --}}                           <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#material{{$material->id}}">
                                    ลบ
                                </button>

                                <div class="modal fade" id="material{{$material->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">ยืนยันการลบ</h4>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                {{-- <span aria-hidden="true">&times;</span> --}}
                                            </button>
                                        </div>
                                        <div class="modal-body">ยืนยันการลบข้อมูล&nbsp;<b>{{$material->M_ID}}</b>&nbsp;<b>{{$material->M_name}}</b>&nbsp;หรือไม่?</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                            <a href="{{ url('admin/deletematerial/'.$material->id)}}" class="btn btn-primary">ลบ</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

</div>

@endsection