@extends('layouts.master_backend')
@section('content')

<div class="content">
  <div class="container-fluid pt-4 px-4">
    <div class="row g-4">


      <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Category</h6>
          <form method="POST" action="{{ url('admin/category/insert') }}">
            @csrf
            <div class="row mb-3">
              <label for="defaultFormControlInput" class="form-label">&nbsp;Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="กรุณากรอกประเภทสินค้า" aria-describedby="defaultFormControlHelp">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
              <input type="submit" value="บันทึก" class="btn btn-primary">
              <a href="{{ route('c.index') }}" class="btn btn-danger">ย้อนกลับ</a>
          </form>
      </div>
    </div>
  </div>
@endsection 