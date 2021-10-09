@extends('layouts.master')
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
@section('content')

<div class="container">
    <h2>Danh sach sinh vien</h2>
    <a class="btn btn-warning" href="{{ url('/sinh-vien/them') }}">Them sinh vien</a>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>MSSV</th>
          <th>Lớp</th>
          <th>Email</th>
          <th>Password</th>
          <th></th>

        </tr>
      </thead>
      <tbody>
        @foreach ($sinhviens as $key => $sinhvien)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $sinhvien->name }}</td>
                <td>{{ $sinhvien->code }}</td>
                <td>{{ $sinhvien->class }}</td>
                <td>{{ $sinhvien->email }}</td>
                <td>{{ $sinhvien->password }}</td>
                <td>
                    <a
                    class="btn btn-sm btn-success"
                    href="{{ url('sinh-vien/'.$sinhvien->id.'/edit') }}"
                    >Edit</a>

                    <a
                    class="btn btn-sm btn-danger"
                    href="{{ url('sinh-vien/'.$sinhvien->id.'/delete') }}"
                    onclick="return confirm('Are you sure you wish to delete this record?');"
                    >Delete</a>
                </td>

            </tr>
        @endforeach

      </tbody>
    </table>
  </div>


          <footer class="text-muted py-5">
            <div class="container">
              <p class="float-end mb-1">
                <a href="#">Back to top</a>
              </p>
            </div>
          </footer>

@endsection
