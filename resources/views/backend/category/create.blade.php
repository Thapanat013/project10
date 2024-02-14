@extends('layouts.master_backend')
@section('content')

<div class="content">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
      <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
      </a>
      <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
      </a>
      <form class="d-none d-md-flex ms-4">
          <input class="form-control border-0" type="search" placeholder="Search">
      </form>
      <div class="navbar-nav align-items-center ms-auto">
          <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fa fa-envelope me-lg-2"></i>
                  <span class="d-none d-lg-inline-flex">Message</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                  <a href="#" class="dropdown-item">
                      <div class="d-flex align-items-center">
                          <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                          <div class="ms-2">
                              <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                              <small>15 minutes ago</small>
                          </div>
                      </div>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item">
                      <div class="d-flex align-items-center">
                          <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                          <div class="ms-2">
                              <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                              <small>15 minutes ago</small>
                          </div>
                      </div>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item">
                      <div class="d-flex align-items-center">
                          <img class="rounded-circle" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                          <div class="ms-2">
                              <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                              <small>15 minutes ago</small>
                          </div>
                      </div>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item text-center">See all message</a>
              </div>
          </div>
          <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="fa fa-bell me-lg-2"></i>
                  <span class="d-none d-lg-inline-flex">Notificatin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                  <a href="#" class="dropdown-item">
                      <h6 class="fw-normal mb-0">Profile updated</h6>
                      <small>15 minutes ago</small>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item">
                      <h6 class="fw-normal mb-0">New user added</h6>
                      <small>15 minutes ago</small>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item">
                      <h6 class="fw-normal mb-0">Password changed</h6>
                      <small>15 minutes ago</small>
                  </a>
                  <hr class="dropdown-divider">
                  <a href="#" class="dropdown-item text-center">See all notifications</a>
              </div>
          </div>
          <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                  <img class="rounded-circle me-lg-2" src="{{ asset('backend/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                  <span class="d-none d-lg-inline-flex">{{ Auth::user()->username }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Profile
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Settings
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Activity Log
                              </a>
                              <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  this.closest('form').submit();" data-toggle="modal" data-target="#logoutModal">
                                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                      Logout
                                  </a>
                              </form>
                          </div>
          </div>
      </div>
  </nav>
  <!-- Navbar End -->

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
              <a href="{{ route('c.category') }}" class="btn btn-danger">ย้อนกลับ</a>
          </form>
      </div>
    </div>
  </div>
@endsection 