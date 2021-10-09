<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center  mb-md-0">

            <li><a href="{{ url('/') }}" class="nav-link px-2 text-white">Trang chủ</a></li>
            <li><a href="{{ url('/sinh-vien') }}" class="nav-link px-2 text-white">Quản lý sinh viên</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Quản lý giáo viên</a></li>

            </ul>



            <div class="text-end">
                <a class="btn btn-outline-light me-2" href="{{ url('/dang-nhap') }}">Lien he</a>
                <a class="btn btn-warning" href="{{ url('/dang-nhap') }}">Login</a>

            </div>

        </div>
    </div>
  </header>
