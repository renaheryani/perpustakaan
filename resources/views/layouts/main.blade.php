<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Perpustakaan | @yield('title')</title>
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header" id="navbarSupportedContent">
        <h3>Perpustakaan Buku</h3>
      </div>
  
      <ul class="list-unstyled components">
        @if (Auth::user()->role_id == 1)
        <h5 style="padding-left: 10px;">>>Halaman Admin<<</h5>
        <li>
          <a href="dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif>Dashboard</a>
        </li>
        <li>
          <a href="books" @if(request()->route()->uri == 'books') class='active' @endif>Buku</a>
        </li>
        <li>
          <a href="categories" @if(request()->route()->uri == 'categories') class='active' @endif>Kategori</a>
        </li>
        <li>
          <a href="users" @if(request()->route()->uri == 'users') class='active' @endif>Pengguna</a>
        </li>
        <li>
          <a href="rent-logs" @if(request()->route()->uri == 'rent-logs') class='active' @endif>Log Peminjaman</a>
        </li>
        <li>
          <a href="logout">Logout</a>
        </li>
        @else
        <h5 style="padding-left: 10px;">>>Halaman User<<</h5>
        <li>
          <a href="profile" @if(request()->route()->uri == 'profile') class='active' @endif>Profil</a>
        </li>
        <li>
          <a href="logout">Logout</a>
        </li>
      </ul>
      @endif
    </nav>
  
   <!-- Page Content  -->
   <div id="content">
            <div class="content">
              @yield('content')
            </div>
          </div>
        </div>
      </nav> 
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 