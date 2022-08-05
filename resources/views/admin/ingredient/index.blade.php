@extends('layouts.master')
@section('title', 'Ingredient')

@section('content')

<div class="card-body">
    @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>
    @endif

    <div class ="table-responsive my-3">
        <table class="table table-bordered">
        
        <tr>
            <th>เลือก</th>
            <th width="280px">รหัสวัตถุดิบ</th>
            <th width="280px">ชื่อวัตถุดิบ</th>
            <th>จำนวนใช้</th>
            <th>หน่วยใช้</th>
            
        </tr>
        @foreach($material as $material)
            <tr>
                <th scope="col">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                      <td>{{ $material->M_ID }}</td>
                      <td>{{ $material->M_name }}</td>
                      <td>
                        <input type="number" name="Ing_use" class="form-control" placeholder="จำนวนใช้">
                      </td>
                      <td>{{ $material->M_unit_use }}</td>
                    
                    </div>
                </th>
            </tr>
        @endforeach
    </table>
    

</div>
</div>

</div>

@endsection