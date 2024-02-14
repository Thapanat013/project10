@extends('layouts.master_backend')
@section('content')
<!-- Content Start -->
<div class="content">
    
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Product Table</h6>
                    <div class="m-n2">
                        <a href="{{ route('p.create') }}" type="button" class="btn btn-outline-primary m-2">เพิ่มข้อมูล</a>
                    </div>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-borttom-0">

                            @foreach ($product as $pro)
                                <tr>
                                    <td>{{ $product->firstItem() + $loop->index }}</td>
                                    <td>{{ $pro->name }}</td>
                                    <td>
                                        <img src="{{ asset('backend/product/resize/'.$pro->image)}}" alt="">
                                    </td>
                                    <td>{{ $pro->price }}</td>
                                    <td>{{ $pro->description }}</td>
                                    <td>{{ $pro->created_at }}</td>
                                    <td>{{ $pro->updated_at }}</td>
                                    <td>
                                    <a href="{{ url('admin/product/edit/'.$pro->product_id) }}" class="btn btn-outline-primary">แก้ไข</a>
                                    <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-outline-danger mx-2">ลบ</a>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    <!-- Sale & Revenue End -->
<!-- Content End -->
@endsection