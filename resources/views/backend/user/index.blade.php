@extends('layouts.master_backend')
@section('content')
<!-- Content Start -->
<div class="content">
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4" >
                        <h6 class="mb-0" style="color: #000000">User Table</h6>
                        <a href=""></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0" style="color: #000000">
                            <thead>
                                <tr class="text-dark" >
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $u )
                                    <tr>
                                        <td>{{ $u->id }}</td>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->phone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    <!-- Sale & Revenue End -->
<!-- Content End -->
@endsection 

