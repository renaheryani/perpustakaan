<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Perpustakaan | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header" id="navbarSupportedContent">
        <h3>Perpustakaan Buku</h3>
      </div>
  
      <ul class="list-unstyled components">
        <?php if(Auth::user()->role_id == 1): ?>
        <h5 style="padding-left: 10px;">>>Halaman Admin<<</h5>
        <li>
          <a href="dashboard" <?php if(request()->route()->uri == 'dashboard'): ?> class='active' <?php endif; ?>>Dashboard</a>
        </li>
        <li>
          <a href="books" <?php if(request()->route()->uri == 'books'): ?> class='active' <?php endif; ?>>Buku</a>
        </li>
        <li>
          <a href="categories" <?php if(request()->route()->uri == 'categories'): ?> class='active' <?php endif; ?>>Kategori</a>
        </li>
        <li>
          <a href="users" <?php if(request()->route()->uri == 'users'): ?> class='active' <?php endif; ?>>Pengguna</a>
        </li>
        <li>
          <a href="rent-logs" <?php if(request()->route()->uri == 'rent-logs'): ?> class='active' <?php endif; ?>>Log Peminjaman</a>
        </li>
        <li>
          <a href="logout">Logout</a>
        </li>
        <?php else: ?>
        <h5 style="padding-left: 10px;">>>Halaman User<<</h5>
        <li>
          <a href="profile" <?php if(request()->route()->uri == 'profile'): ?> class='active' <?php endif; ?>>Profil</a>
        </li>
        <li>
          <a href="logout">Logout</a>
        </li>
      </ul>
      <?php endif; ?>
    </nav>
  
   <!-- Page Content  -->
   <div id="content">
            <div class="content">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div>
        </div>
      </nav> 
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> <?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>