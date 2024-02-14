@extends('layouts.master_backend')
@section('content')
<!-- Content Start -->
<div class="content" >


    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4" style="color: #000000">
        <div class="row g-4">
            
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4" style="color: #000000">Category Table</h6>
                    <div class="m-n2">
                        <a href="{{ route('c.create') }}" type="button" class="btn btn-outline-primary m-2">เพิ่มข้อมูล</a>
                    </div>
                    <br>
                    <table class="table table-striped" style="color: #000000">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $cat)
                            <tr style="color: #000000">
                                <td>{{ $category->firstItem() + $loop->index }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{$cat->created_at }}</td>
                                <td>{{$cat->updated_at }}</td>
                                <td>
                                    <a href="{{ url('admin/category/edit/'.$cat->category_id) }}" class="btn btn-outline-primary mx2">แก้ไข</a>
                                    <a href="{{ url('admin/category/delete/'.$cat->category_id) }}"class="btn btn-outline-danger mx-2">ลบ</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $category->links('pagination::bootstrap-5') }}
                    </div> 
                </div>   
            </div>
    <!-- Sale & Revenue End -->
<!-- Content End -->
@endsection 