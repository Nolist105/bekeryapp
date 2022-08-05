@extends('layouts.master')
@section('title', 'material')

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>จัดการข้อมูลวัตถุดิบ</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            
            
                @csrf

                <div class ="table-responsive my-3">
                    <table class="table table-bordered">
                    <tr>
                        <th>รหัสวัตถุดิบ</th>
                        <th>ชื่อวัตถุดิบ</th>
                        <th>จำนวนคงเหลือ</th>
                        <th>หน่วยใช้</th>
                        <th>จุดสั่งซื้อ</th>
                        <th>จัดการ</th>
                    </tr>
                    @foreach($material as $material)
                    <tr>
                        <td>{{ $material->M_ID }}</td>
                        <td>{{ $material->M_name }}</td>
                        <td>{{ $material->M_balane }}</td>
                        <td>{{ $material->M_unit_use }}</td>
                        <td>{{ $material->M_point }}</td>
                        
                         @if($material->M_balane <= $material->M_point)         
                            <td>
                                
                                <button type="button" class="btn btn-danger">สั่งซื้อ</button>
                            </td>         
                        @else
                            <td> - </td>        
                        @endif 

                    </tr>
                    @endforeach
                    </table>
                </div>
                {{-- <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                
                </div> --}}
        </div>
    </div>

</div>

@endsection