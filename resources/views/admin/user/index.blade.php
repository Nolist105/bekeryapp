@extends('layouts.master')
@section('title', 'user')

@section('content')
@include('sweetalert::alert')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>รายการผู้ใช้ (พนักงาน)
                <a href="{{ url('admin/adduser') }}" class="btn btn-primary float-end">เพิ่มผู้ใช้</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class ="table-responsive my-3">
                <table class="table table-bordered">
                <tr>
                    <th>ชื่อผู้ใช้</th>
                    {{-- <th>สถานะ</th> --}}
                    <th width="260px">จัดการ</th>
                </tr>
                @foreach($user as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    {{-- <td>{{ $user->role_as}}</td> --}}
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#user{{$user->id}}">
                            ลบ
                          </button>
                        <div class="modal fade" id="user{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">ยืนยันการลบ</h4>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            {{-- <span aria-hidden="true">&times;</span> --}}
                                        </button>
                                    </div>
                                    <div class="modal-body">ยืนยันการลบข้อมูล <b>{{$user->name}}</b> หรือไม่?</div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                                        <a href="{{ url('admin/deleteuser/'.$user->id)}}" class="btn btn-primary">ลบ</a>
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