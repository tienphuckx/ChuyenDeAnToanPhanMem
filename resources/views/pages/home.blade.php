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
    <h2>Hoverable Dark Table</h2>
    <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên</th>
          <th>MSSV</th>
          <th>Lớp</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Doe</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>
              <button class="btn-sm btn-primary">Edit</button>
              <button class="btn-sm btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Doe</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>
                <button class="btn-sm btn-primary">Edit</button>
                <button class="btn-sm btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Doe</td>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>
                <button class="btn-sm btn-primary">Edit</button>
                <button class="btn-sm btn-danger">Delete</button>
            </td>
        </tr>
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