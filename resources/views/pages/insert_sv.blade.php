@extends('layouts.master')
@section('content')
      {{-- BEGIN  --}}
    <div class="mt-3">

      <div class="card-header text-danger text-center h3">THÊM SINH VIÊN</div>

      <div class="bg-dark">
        <p>BÁO LỖI HERE</p>
        {{--  ---------------------BEGIN MESSAGE -----------------------------------  --}}
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{--  ---------------------END MESSAGE -----------------------------------  --}}
      </div>


        {{-- <form method="POST"  action="{{ url('sinhvien/luu')  }}">
            @csrf

            <div class="form-group">
              <label for="name">Họ và tên</label>
              <input name="name" type="text" class="form-control" placeholder="Họ và tên" id="name">
            </div>
    
            <div class="form-group">
              <label for="code">Mã sinh viên</label>
              <input name="code" type="text" class="form-control" placeholder="Mã sinh viên" id="code">
            </div>
    
            <div class="form-group">
                <label for="class">Lớp</label>
                <input name="class" type="text" class="form-control" placeholder="Lớp" id="class">
            </div>
    
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" id="email">
            </div>
            
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            
          </form> --}}
    </div>
    {{-- END  --}}
@endsection