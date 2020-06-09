<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions_karyawan.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (tambah_penerimaan($_POST) > 0) {
    echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'penerimaan.php';
        </script>";
  } else {
    echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'penerimaan.php';
        </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Detail penerimaan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index2.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-code" style="font-size:50px;"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrator</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Navigasi dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-users"></i>
          <span>Manajemen user</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manajemen user</h6>
            <a class="collapse-item" href="manajemen_karyawan.php">Karyawan</a>
            <a class="collapse-item" href="manajemen_admin.php">Admin</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="customer.php">
          <i class="fas fa-user-circle"></i>
          <span>Customer</span></a>
      </li>

      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="Cucian.php">
          <i class="fas fa-dollar-sign"></i>
          <span>Cucian</span></a>
      </li>


      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="penerimaan.php">
          <i class="fas fa-book-reader"></i>
          <span>Penerimaan</span></a>
      </li>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="saran.php">
          <i class="fas fa-comment"></i>
          <span>Saran dan kritik</span></a>
      </li>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="manajemen_pesan.php">
          <i class="fas fa-inbox"></i>
          <span>Pesan customer</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Febri wijaya</span>
                <img class="img-profile rounded-circle" src="img/a.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Tambah Detail Penerimaan</h3>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penerimaan</h6>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <form class="mb-4 mt-2" method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="no_order">No. order</label>
                      <input type="text" name="no_order" class="form-control" id="no_order">
                    </div>
                    <div class="form-group">
                      <label for="id_pel">ID pelanggan</label>
                      <input type="text" name="id_pel" class="form-control" id="id_pel">
                    </div>
                    <div class="form-group">
                      <label for="nama_pel">Nama pelanggan</label>
                      <input type="text" name="nama_pel" class="form-control" id="nama_pel">
                    </div>
                    <div class="form-group">
                      <label for="tglmasuk">Tanggal masuk</label>
                      <input type="date" name="tglmasuk" class="form-control" id="tglmasuk">
                    </div>
                    <div class="form-group">
                      <label for="tglkeluar">Tanggal keluar</label>
                      <input type="date" name="tglkeluar" class="form-control" id="tglkeluar">
                    </div>
                    <div class="form-group">
                      <label for="berat">Berat(kg)</label>
                      <input type="text" name="berat" class="form-control" id="berat">
                    </div>
                    <div class="form-group">
                      <label for="pcs">Pcs</label>
                      <input type="text" name="pcs" class="form-control" id="pcs">
                    </div>
                    <div class="form-group">
                      <label for="pengerjaan">Lama pengerjaan (hari)</label>
                      <select name="pengerjaan" id="pengerjaan" class="form-control">
                        <option value="pilih">--Silahkan pilih--</option>
                        <option value="1hari">1 Hari</option>
                        <option value="3hari">3 Hari</option>
                        <option value="5hari">5 hari</option>
                        <option value="7hari">7 hari</option>
                        <option value="lebihsatuminggu">Lebih dari satu minggu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="harga">Total Bayar</label>
                      <input type="text" name="harga" class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                      <label for="diskon">Diskon</label>
                      <input type="text" name="diskon" class="form-control" id="diskon">
                    </div>
                    <div class="form-group">
                      <label for="dibayar">Di Bayar</label>
                      <input type="text" name="dibayar" class="form-control" id="dibayar">
                    </div>
                    <div class="form-group">
                      <label for="sisa">Sisa</label>
                      <input type="text" name="sisa" class="form-control" id="sisa">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="text" name="status" class="form-control" id="status">
                    </div>
                    <button type="button" name="Hitung" class="btn btn-success">Hitung</button>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    <a href="penerimaan.php" class="btn btn-danger">Batal</a>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Spotless 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>