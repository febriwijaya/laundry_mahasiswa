<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions_karyawan.php';
$id = $_GET["id"];
$cucian = query("SELECT * FROM cucian WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Cucian</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
          <i class="fas fa-tshirt"></i>
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
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Cucian</h6>
            </div>
            <div class="container">
              <h3 class="text-center mt-4 mb-2">Detail Data Cucian</h3>
              <form action="" method="post" enctype="multipart/form-data">
                <table class="table table-bordered table-dark">
                  <thead>
                    <tr>
                      <td>kode jenis</td>
                      <td><?= $cucian["kode_jenis"]; ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>pengerjaan</td>
                      <td><?= $cucian["pengerjaan"]; ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal masuk</td>
                      <td><?= $cucian["tglmasuk"]; ?></td>
                    </tr>
                    <tr>
                      <td>Tanggal keluar</td>
                      <td><?= $cucian["tglkeluar"]; ?></td>
                    </tr>
                    <tr>
                      <td>kemeja</td>
                      <td><?= $cucian["kemeja"]; ?></td>
                    </tr>
                    <tr>
                      <td>kaos</td>
                      <td><?= $cucian["kaos"]; ?></td>
                    </tr>
                    <tr>
                      <td>celana panjang</td>
                      <td><?= $cucian["celana_panjang"]; ?></td>
                    </tr>
                    <tr>
                      <td>celana pendek</td>
                      <td><?= $cucian["celana_pendek"]; ?></td>
                    </tr>
                    <tr>
                      <td>celana panjang jeans</td>
                      <td><?= $cucian["celana_panjang_jeans"]; ?></td>
                    </tr>
                    <tr>
                      <td>rok</td>
                      <td><?= $cucian["rok"]; ?></td>
                    </tr>
                    <tr>
                      <td>Blezer</td>
                      <td><?= $cucian["blezer"]; ?></td>
                    </tr>
                    <tr>
                      <td>jaket / sweater</td>
                      <td><?= $cucian["jaket_sweater"]; ?></td>
                    </tr>
                    <tr>
                      <td>Daster</td>
                      <td><?= $cucian["daster"]; ?></td>
                    </tr>
                    <tr>
                      <td>Singlet</td>
                      <td><?= $cucian["singlet"]; ?></td>
                    </tr>
                    <tr>
                      <td>Handuk</td>
                      <td><?= $cucian["handuk"]; ?></td>
                    </tr>
                    <tr>
                      <td>Sarung</td>
                      <td><?= $cucian["sarung"]; ?></td>
                    </tr>
                    <tr>
                      <td>Mukena</td>
                      <td><?= $cucian["mukena"]; ?></td>
                    </tr>
                    <tr>
                      <td>Sajadah</td>
                      <td><?= $cucian["sajadah"]; ?></td>
                    </tr>
                    <tr>
                      <td>Jilbab</td>
                      <td><?= $cucian["jilbab"]; ?></td>
                    </tr>
                    <tr>
                      <td>Sapu tangan</td>
                      <td><?= $cucian["sapu_tangan"]; ?></td>
                    </tr>
                    <tr>
                      <td>Kain pantai</td>
                      <td><?= $cucian["kain_pantai"]; ?></td>
                    </tr>
                    <tr>
                      <td>Kaos Kaki</td>
                      <td><?= $cucian["kaos_kaki"]; ?></td>
                    </tr>
                    <tr>
                      <td>Baju coass</td>
                      <td><?= $cucian["baju_coass"]; ?></td>
                    </tr>
                    <tr>
                      <td>Bed cover</td>
                      <td><?= $cucian["bed_cover"]; ?></td>
                    </tr>
                    <tr>
                      <td>Sprei</td>
                      <td><?= $cucian["sprei"]; ?></td>
                    </tr>
                    <tr>
                      <td>Sarung bantal + guling </td>
                      <td><?= $cucian["sarung_bantal"]; ?></td>
                    </tr>
                    <tr>
                      <td>Gorden</td>
                      <td><?= $cucian["gorden"]; ?></td>
                    </tr>
                    <tr>
                      <td>Kebaya</td>
                      <td><?= $cucian["kebaya"]; ?></td>
                    </tr>
                    <tr>
                      <td>Jas</td>
                      <td><?= $cucian["jas"]; ?></td>
                    </tr>
                    <tr>
                      <td>Boneka</td>
                      <td><?= $cucian["boneka"]; ?></td>
                    </tr>
                    <tr>
                      <td>Gaun</td>
                      <td><?= $cucian["gaun"]; ?></td>
                    </tr>
                    <tr>
                      <td>Selimut</td>
                      <td><?= $cucian["selimut"]; ?></td>
                    </tr>
                    <tr>
                      <td>Teng top</td>
                      <td><?= $cucian["teng_top"]; ?></td>
                    </tr>
                    <tr>
                      <td>CD</td>
                      <td><?= $cucian["cd"]; ?></td>
                    </tr>
                    <tr>
                      <td>Segala jenis karpet / ambal</td>
                      <td><?= $cucian["karpet"]; ?></td>
                    </tr>
                    <tr>
                      <td>Pewangi yang digunakan</td>
                      <td><?= $cucian["pewangi"]; ?></td>
                    </tr>
                    <tr>
                      <td>Total kilogram</td>
                      <td><?= $cucian["total_kilogram"]; ?></td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td><?= $cucian["status"]; ?></td>
                    </tr>
                    <tr>
                      <td>Total pcs</td>
                      <td><?= $cucian["total_pcs"]; ?></td>
                    </tr>
                    <tr>
                      <td>Harga</td>
                      <td><?= $cucian["harga"]; ?></td>
                    </tr>
                    <tr>
                      <td>Diskon</td>
                      <td><?= $cucian["diskon"]; ?></td>
                    </tr>
                    <tr>
                      <td>Total bayar</td>
                      <td><?= $cucian["total_bayar"]; ?></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <a href="hapus_cucian.php?id=<?= $cucian["id"]; ?>" class="btn btn-danger mx-1">Hapus</a>
                        <a href="Cucian.php" class="btn btn-warning">Batal</a>
                      </td>
                    </tr>
                  </tbody>
                  <br>
                </table>
              </form>
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
            <span>Copyright &copy; Spotless Febri 2019</span>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>