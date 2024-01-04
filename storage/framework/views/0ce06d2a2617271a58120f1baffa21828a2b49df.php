<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> Perpustakaan</title>
</head>
<body>

    <style>
        /*
    DEMO STYLE
*/

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
  font-family: 'Poppins', sans-serif;
  background: #fafafa;
}

p {
  font-family: 'Poppins', sans-serif;
  font-size: 1.1em;
  font-weight: 300;
  line-height: 1.7em;
  color: #999;
}

a,
a:hover,
a:focus {
  text-decoration: none;
  transition: all 0.3s;
}

.navbar {
  padding: 15px 10px;
  background: #fff;
  border: none;
  border-radius: 0;
  margin-bottom: 40px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
  box-shadow: none;
  outline: none !important;
  border: none;
}

.line {
  width: 100%;
  height: 1px;
  border-bottom: 1px dashed #ddd;
  margin: 40px 0;
}


/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
  display: flex;
  align-items: stretch;
}

#sidebar {
  min-width: 250px;
  max-width: 250px;
  background: #7386D5;
  color: #fff;
  transition: all 0.3s;
}

#sidebar a,
#sidebar a:hover,
#sidebar a:focus {
  color: inherit;
}

#sidebar.active {
  margin-left: -250px;
}

#sidebar .sidebar-header {
  padding: 20px;
  background: #6d7fcc;
}

#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #47748b;
}

#sidebar ul p {
  color: #fff;
  padding: 10px;
}

#sidebar ul li a {
  padding: 10px;
  font-size: 1.1em;
  display: block;
}

#sidebar ul li a:hover {
  color: #7386D5;
  background: #fff;
}

#sidebar ul li.active > a,
a[aria-expanded="true"] {
  color: #fff;
  background: #6d7fcc;
}

a[data-toggle="collapse"] {
  position: relative;
}

a[aria-expanded="false"]::before,
a[aria-expanded="true"]::before {
  content: '\e259';
  display: block;
  position: absolute;
  right: 20px;
  font-family: 'Glyphicons Halflings';
  font-size: 0.6em;
}

a[aria-expanded="true"]::before {
  content: '\e260';
}

ul ul a {
  font-size: 0.9em !important;
  padding-left: 30px !important;
  background: #6d7fcc;
}

ul.CTAs {
  padding: 20px;
}

ul.CTAs a {
  text-align: center;
  font-size: 0.9em !important;
  display: block;
  border-radius: 5px;
  margin-bottom: 5px;
}

a.download {
  background: #fff;
  color: #7386D5;
}

a.article,
a.article:hover {
  background: #6d7fcc !important;
  color: #fff !important;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
  padding: 20px;
  min-height: 100vh;
  transition: all 0.3s;
}

#content p a {
  color:
}

.search {
 float: left;
 margin-right: 10px;
 box-shadow:0px 2px 2px 1px rgba(14, 71, 109, 0.3);
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
  #sidebar {
    margin-left: -250px;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #sidebarCollapse span {
    display: none;
  }
}
    </style>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Perpustakaan</h3>
      </div>
  
      <ul class="list-unstyled components">
        <li>
          <a href="/peminjaman">Peminjaman</a>
        </li>
        <li>
          <a href="/anggota">Anggota</a>
        </li>
        <li>
          <a href="/buku">Buku</a>
        </li>
        <li>
          <a href="/report">Report</a>
        </li>
      </ul>
  
      <ul class="list-unstyled CTAs">
        <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Customer Services</a></li>
      </ul>
    </nav>
  
    <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <form action="" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="cari.." aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
                    <div class="input-group-append">
                        <button type="submit" name="cari" class="btn btn-info" type="button">
                            <i class="fas fa-search fa-sm">cari</i>
                        </button>
                    </div>
                </div>
            </form>
      </nav>
    </div>
  </div>

  <script>
    $(document).ready(function() {
  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });
});
  </script><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/index.blade.php ENDPATH**/ ?>