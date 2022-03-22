@extends('admin.main')
@section('content')
<div class="card">
    <div class="table-responsive text-nowrap" >
      <h5 class="card-header" style="display: inline-block;margin-right:60%">Danh sách người dùng</h5>
      <a href="{{route('admin/add')}}" class="btn btn-primary">
        <span class="tf-icons bx bx-plus"></span>&nbsp; Add
      </a>
    </div>
    <hr class="my-5" />
    <div class="table-responsive text-nowrap">
       @include('admin.slider.list') 
      <hr class="my-5" />
    </div>
  </div>

@endsection