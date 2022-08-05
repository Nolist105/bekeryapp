@extends('layouts.master')
@section('title', 'material')

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>รายการวัตถุดิบที่รับเข้า
                <a href="{{ url('admin/addstockin') }}" class="btn btn-primary float-end">รับเข้าวัตถุดิบ</a>
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
                    <th>จำนวนที่รับเข้า</th>
                    <th>หน่วยนับ</th>
                    <th>ต้นทุนที่รับเข้า</th>
                    <th>วันที่รับเข้า</th>
                </tr>
                @foreach($stockin as $stockin)
                    <tr>
                        <td>{{ $stockin->M_ID }}</td>
                        <td>{{ $stockin->M_name }}</td>
                        <td>{{ $stockin->S_in }}</td>
                        <td>{{ $stockin->S_unit_count }}</td>
                        <td>{{ $stockin->S_cost }}</td>
                        <td>{{ $stockin->S_date }}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>

</div>

@endsection