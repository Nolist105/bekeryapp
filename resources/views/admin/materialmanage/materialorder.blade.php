@extends('layouts.master')
@section('title', 'materialorder')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>วัตถุดิบที่ต้องสั่งซื้อ</h4>
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
                        <th>วันที่สั่งซื้อ</th>
                        <th>จัดการ</th>
                    </tr>
                     @foreach($materialorder as $materialorder)
                    <tr>
                        <td>{{ $materialorder->M_ID }}</td>
                        <td>{{ $materialorder->M_name }}</td>
                        <td>{{ $materialorder->MO_date }}</td>
                    </tr>
                @endforeach 
                </table>
            </div>
        </div>
    </div>
</div>
@endsection