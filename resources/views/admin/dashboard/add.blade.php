@extends('admin.main')
@section('content')
{{-- @if (sesstion('msg'))
    <div class='alers alert-seccess'>{{session('msg')}}</div>
@endif --}}
@if ($errors->any())
<div class='alers alert-danger'>Dữ liệu không hợp lệ, vui lòng kiểm tra lại</div>
@endif


<div class="card">
    <div class="table-responsive text-nowrap" >
      <h5 class="card-header" style="display: inline-block;margin-right:60%">Thêm người dùng</h5>
      
    </div>
    <div class="table-responsive text-nowrap">
        <div class="card-body">
            <form>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="bx bx-user"></i
                  ></span>
                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="John Doe"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                  />

                </div>
                @error('email')
                    <span style="color:#red;">{{$message}}</span>
                    
                @enderror
              </div>
              
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input
                    type="text"
                    id="basic-icon-default-email"
                    class="form-control"
                    placeholder="john.doe"
                    aria-label="john.doe"
                    aria-describedby="basic-icon-default-email2"
                  />
                  <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                </div>
                <div class="form-text">You can use letters, numbers & periods</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-phone2" class="input-group-text"
                    ><i class="bx bx-phone"></i
                  ></span>
                  <input
                    type="text"
                    id="basic-icon-default-phone"
                    class="form-control phone-mask"
                    placeholder="658 799 8941"
                    aria-label="658 799 8941"
                    aria-describedby="basic-icon-default-phone2"
                  />
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Send</button>
              <a href="{{route('admin')}}" class="btn btn-warning">Back</a>
            </form>
          </div>
    </div>
  </div>

@endsection