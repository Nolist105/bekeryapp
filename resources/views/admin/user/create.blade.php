@extends('layouts.master')
@section('title', 'user')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">เพิ่มผู้ใช้</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <div {{'$error'}}</div>
                    @endforeach
            </div>
            @endif
        

            <form action="{{ url('admin/adduser') }}" method="POST" enctype="multipart/form-data">
                @csrf

                    <div class="container" style="margin-top: 20px;"></div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ชื่อผู้ใช้</span>
                        </div> 
                        <input type="text" name="name" class="form-control">
                                @error('name')
                                    <div class="alert alert-danger alert-block">
                                            <strong>{{ $message}}</strong>
                                    </div>
                                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">อีเมล์</span>
                        </div> 
                        <input type="email" name="email" class="form-control">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">รหัสผ่าน</span>
                        </div> 
                        <input type="password" name="password" class="form-control">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message}}</div>
                                @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection