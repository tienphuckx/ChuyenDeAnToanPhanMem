@extends('layouts.master')
@section('content')
      {{-- BEGIN  --}}
    <div class="mt-3">

      <div class="card-header text-danger text-center h3">EDIT SINH VIÊN</div>

      <div class="pt-3">
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


         <form method="POST"  action="{{ url('sinh-vien/'.$sinhvien->id.'/update') }}" >
            @method('PUT')
            @csrf

            <div class="form-group">
              <label for="name">Họ và tên</label>
              <input
                name="name"
                type="text"
                class="form-control"
                placeholder="Họ và tên"
                id="name"
                value="{{ $sinhvien->name }}">
            </div>

            <div class="form-group">
              <label for="code">Mã sinh viên</label>
              <input
                    name="code"
                    type="text"
                    class="form-control"
                    placeholder="Mã sinh viên"
                    id="code"
                    value="{{ $sinhvien->code }}">
            </div>

            <div class="form-group">
                <label for="class">Lớp</label>
                <input
                        name="class" type="text"
                        class="form-control"
                        placeholder="Lớp"
                        id="class"
                        value="{{ $sinhvien->class }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    name="email"
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    id="email"
                    value="{{ $sinhvien->email }}">
            </div>

            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input
                name="password"
                type="password"
                class="form-control"
                placeholder="Password"
                id="password"
                value="{{ $sinhvien->password }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

          </form>
    </div>
    {{-- END  --}}
@endsection
