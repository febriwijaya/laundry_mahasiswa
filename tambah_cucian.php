<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions_karyawan.php';
// definisikan tiap variabelnya 
$kode_jenis = "";
$pengerjaan = "";
$kemeja = "";
$kaos = "";
$celana_panjang = "";
$celana_pendek = "";
$celana_panjang_jeans = "";
$rok = "";
$blezer = "";
$jaket_sweater = "";
$daster = "";
$singlet = "";
$handuk = "";
$sarung = "";
$mukena = "";
$sajadah = "";
$jilbab = "";
$sapu_tangan = "";
$kain_pantai = "";
$kaos_kaki = "";
$baju_coass = "";
$bed_cover = "";
$sprei = "";
$sarung_bantal = "";
$gorden = "";
$kebaya = "";
$jas = "";
$boneka = "";
$gaun = "";
$selimut = "";
$teng_top = "";
$cd = "";
$karpet = "";
$pewangi = "";
$total_kilogram = "";
$dibayar = "";
$total_pcsx = "";
$total_pcs = "";
$harga = "";
$diskon = "";
$total_bayar = "";
$sisa = "";
$tglmasuk = "";
$tglkeluar = "";
$status = "";

if (isset($_POST["submit"])) {
  if (tambah_cucian($_POST) > 0) {
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'Cucian.php';
    </script>
    ";
  } else {
    echo "
    <script>
      alert('data gagal ditambahkan!');
      document.location.href = 'Cucian.php';
    </script>
    ";
  }
}

if (isset($_POST["hitung"])) {
  $kode_jenis = $_POST["kode_jenis"];
  $pengerjaan = $_POST["pengerjaan"];
  $tglmasuk = $_POST["tglmasuk"];
  $tglkeluar = $_POST["tglkeluar"];
  $status = $_POST["status"];
  $kemeja = $_POST["kemeja"];
  if (empty($kemeja)) {
    $kemeja = 0;
  }
  $kaos = $_POST["kaos"];
  if (empty($kaos)) {
    $kaos = 0;
  }
  $celana_panjang = $_POST["celana_panjang"];
  if (empty($celana_panjang)) {
    $celana_panjang = 0;
  }
  $celana_pendek = $_POST["celana_pendek"];
  if (empty($celana_pendek)) {
    $celana_pendek = 0;
  }
  $celana_panjang_jeans = $_POST["celana_panjang_jeans"];
  if (empty($celana_panjang_jeans)) {
    $celana_panjang_jeans = 0;
  }
  $rok = $_POST["rok"];
  if (empty($rok)) {
    $rok = 0;
  }
  $blezer = $_POST["blezer"];
  if (empty($belzer)) {
    $blezer = 0;
  }
  $jaket_sweater = $_POST["jaket_sweater"];
  if (empty($jaket_sweater)) {
    $jaket_sweater = 0;
  }
  $daster = $_POST["daster"];
  if (empty($daster)) {
    $daster = 0;
  }
  $singlet = $_POST["singlet"];
  if (empty($singlet)) {
    $singlet = 0;
  }
  $handuk = $_POST["handuk"];
  if (empty($handuk)) {
    $handuk = 0;
  }
  $sarung = $_POST["sarung"];
  if (empty($sarung)) {
    $sarung = 0;
  }
  $mukena = $_POST["mukena"];
  if (empty($mukena)) {
    $mukena = 0;
  }
  $sajadah = $_POST["sajadah"];
  if (empty($sajadah)) {
    $sajadah = 0;
  }
  $jilbab = $_POST["jilbab"];
  if (empty($jilbab)) {
    $jilbab = 0;
  }
  $sapu_tangan = $_POST["sapu_tangan"];
  if (empty($sapu_tangan)) {
    $sapu_tangan = 0;
  }
  $kain_pantai = $_POST["kain_pantai"];
  if (empty($kain_pantai)) {
    $kain_pantai = 0;
  }
  $kaos_kaki = $_POST["kaos_kaki"];
  if (empty($kaos_kaki)) {
    $kaos_kaki = 0;
  }
  $baju_coass = $_POST["baju_coass"];
  if (empty($baju_coass)) {
    $baju_coass = 0;
  }
  $bed_cover = $_POST["bed_cover"];
  if (empty($bed_cover)) {
    $bed_cover = 0;
  }
  $sprei = $_POST["sprei"];
  if (empty($sprei)) {
    $sprei = 0;
  }
  $sarung_bantal = $_POST["sarung_bantal"];
  if (empty($sarung_bantal)) {
    $sarung_bantal = 0;
  }
  $gorden = $_POST["gorden"];
  if (empty($gorden)) {
    $gorden = 0;
  }
  $kebaya = $_POST["kebaya"];
  if (empty($kebaya)) {
    $kebaya = 0;
  }
  $jas = $_POST["jas"];
  if (empty($jas)) {
    $jas = 0;
  }
  $boneka = $_POST["boneka"];
  if (empty($boneka)) {
    $boneka = 0;
  }
  $gaun = $_POST["gaun"];
  if (empty($gaun)) {
    $gaun = 0;
  }
  $selimut = $_POST["selimut"];
  if (empty($selimut)) {
    $selimut = 0;
  }
  $teng_top = $_POST["teng_top"];
  if (empty($teng_top)) {
    $teng_top = 0;
  }
  $cd = $_POST["cd"];
  if (empty($cd)) {
    $cd = 0;
  }
  $karpet = $_POST["karpet"];
  if (empty($karpet)) {
    $karpet = 0;
  }
  $pewangi = $_POST["pewangi"];
  if (empty($pewangi)) {
    $pewangi = 0;
  }
  $total_kilogram = $_POST["total_kilogram"];
  if (empty($total_kilogram)) {
    $total_kilogram = 0;
  }
  $total_pcs = $_POST["total_pcs"];

  $harga = $_POST["harga"];
  $diskon = $_POST["diskon"];
  $total_bayar = $_POST["total_bayar"];
  $total_pcsx = "";

  $total_pcsx = $kemeja + $kaos + $celana_panjang + $celana_pendek + $celana_panjang_jeans + $rok + $blezer + $jaket_sweater + $daster + $singlet + $handuk + $sarung + $mukena + $sajadah + $jilbab + $sapu_tangan + $kain_pantai + $kaos_kaki + $baju_coass + $bed_cover + $sprei + $sarung_bantal + $gorden + $kebaya + $jas + $boneka + $gaun + $selimut + $teng_top + $cd + $karpet;

  if ($pengerjaan == 'Express') {
    $hkilo = $total_kilogram * 6000;
  } else if ($pengerjaan == 'Reguler') {
    $hkilo = $total_kilogram * 3000;
  } else {
    $hkilo = 0;
  }


  $harga = $total_pcsx * $hkilo;

  if ($harga >= 100000) {
    $diskon = 0.25 * $harga;
  } else if ($harga >= 500000) {
    $diskon = 0.3 * $harga;
  } else {
    $diskon = 0;
  }

  $total_bayar = $harga - $diskon;
  // $sisa = $dibayar - $total_bayar;
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

  <title>Tambah Cucian</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    label {
      padding: 15px 0px;
    }
  </style>

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Tambah Cucian</h3>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Cucian</h6>
            </div>
            <div class="container">
              <form method="post" action="" enctype="multipart/form-data">
                <div class="row mt-3">
                  <div class="col-md-4">
                    <label for="kode_jenis">Kode jenis</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kode_jenis" value="<?= $kode_jenis; ?>" class="form-control" id="kode_jenis" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="pengerjaan">Pengerjaan</label>
                  </div>
                  <div class="col-md-6">
                    <select name="pengerjaan" id="pengerjaan" class="form-control" required>
                      <?php $options = array('--silahkan pilih--', 'Express', 'Reguler');
                      foreach ($options as $pengerjaan) {
                        $selected = @$_POST['pengerjaan'] == $pengerjaan ? ' selected ="selected"' : '';
                        echo '<option value="'  . $pengerjaan . '"' . $selected . '>' . $pengerjaan . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="tglmasuk">Tanggal masuk</label>
                  </div>
                  <div class="col-md-6">
                    <input type="date" name="tglmasuk" class="form-control" id="tglmasuk" value="<?= $tglmasuk; ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="tglkeluar">Tanggal Keluar</label>
                  </div>
                  <div class="col-md-6">
                    <input type="date" name="tglkeluar" class="form-control" id="tglkeluar" value="<?= $tglkeluar; ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="kemeja">Kemeja</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kemeja" class="form-control" id="kemeja" value="<?= $kemeja; ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <label for="kaos">Kaos</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kaos" class="form-control" id="kaos" value="<?= $kaos; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="celana_panjang">Celana panjang</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="celana_panjang" class="form-control" id="celana_panjang" value="<?= $celana_panjang; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="celana_pendek">Celana Pendek</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="celana_pendek" value="<?= $celana_pendek; ?>" class="form-control" id="celana_pendek">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="celana_panjang_jeans">Celana panjang Jeans</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="celana_panjang_jeans" value="<?= $celana_panjang_jeans; ?>" class="form-control" id="celana_panjang_jeans"><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="rok">Rok</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="rok" class="form-control" value="<?= $rok; ?>" id="rok">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="blezer">Blezer</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="blezer" class="form-control" value="<?= $blezer; ?>" id="blezer"><br>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="jaket_sweater">Jaket/sweater</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="jaket_sweater" value="<?= $jaket_sweater; ?>" class="form-control" id="jaket_sweater">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="daster">Daster</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="daster" value="<?= $daster; ?>" class="form-control" id="daster">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="singlet">Singlet</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="singlet" value="<?= $singlet; ?>" class="form-control" id="singlet">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="handuk">Handuk</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="handuk" value="<?= $handuk; ?>" class="form-control" id="handuk">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="sarung">Sarung</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="sarung" value="<?= $sarung; ?>" class="form-control" id="sarung">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="mukena">Mukena</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="mukena" value="<?= $mukena; ?>" class="form-control" id="mukena">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="sajadah">Sajadah</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="sajadah" value="<?= $sajadah; ?>" class="form-control" id="sajadah">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="jilbab">Jilbab</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="jilbab" value="<?= $jilbab; ?>" class="form-control" id="jilbab">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="sapu_tangan">Sapu tangan</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="sapu_tangan" value="<?= $sapu_tangan; ?>" class="form-control" id="sapu_tangan">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="kain_pantai">Kain pantai</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kain_pantai" value="<?= $kain_pantai; ?>" class="form-control" id="kain_pantai">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="kaos_kaki">Kaos Kaki</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kaos_kaki" value="<?= $kaos_kaki; ?>" class="form-control" id="kaos_kaki">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="baju_coass">Baju coass</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="baju_coass" value="<?= $baju_coass; ?>" class="form-control" id="baju_coass">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="bed_cover">Bed cover</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="bed_cover" value="<?= $bed_cover; ?>" class="form-control" id="bed_cover">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="sprei">Sprei</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="sprei" value="<?= $sprei; ?>" class="form-control" id="sprei">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="sarung_bantal">Sarung bantal</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="sarung_bantal" value="<?= $sarung_bantal; ?>" class="form-control" id="sarung_bantal">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="gorden">Gorden</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="gorden" value="<?= $gorden; ?>" class="form-control" id="gorden">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="kebaya">Kebaya</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="kebaya" value="<?= $kebaya; ?>" class="form-control" id="kebaya">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="jas">Jas</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="jas" value="<?= $jas; ?>" class="form-control" id="jas">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="boneka">Boneka</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="boneka" value="<?= $boneka; ?>" class="form-control" id="boneka">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="gaun">Gaun</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="gaun" value="<?= $gaun; ?>" class="form-control" id="gaun">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="selimut">Selimut</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="selimut" value="<?= $selimut; ?>" class="form-control" id="selimut">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="teng_top">Teng top</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="teng_top" value="<?= $teng_top; ?>" class="form-control" id="teng_top">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="cd">CD</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="cd" value="<?= $cd; ?>" class="form-control" id="cd">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="karpet">Karpet</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="karpet" value="<?= $karpet; ?>" class="form-control" id="karpet">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="pewangi">Pewangi</label>
                  </div>
                  <div class="col-md-6">
                    <select name="pewangi" id="pewangi" class="form-control" value="<?= $pewangi; ?>">
                      <?php $options = array('--silahkan pilih--', 'Eude toilette', 'downy black', 'lavender');
                      foreach ($options as $pewangi) {
                        $selected = @$_POST['pewangi'] == $pewangi ? ' selected ="selected"' : '';
                        echo '<option value="'  . $pewangi . '"' . $selected . '>' . $pewangi . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="total_kilogram">Total kilogram</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="total_kilogram" value="<?= $total_kilogram; ?>" class="form-control" id="total_kilogram" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="status">Status</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="status" class="form-control" id="status" value="<?= $status; ?>" required>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-12">
                    <button type="submit" name="hitung" class="btn btn-success">Hitung</button>
                    <p class="text-danger">Jangan isi form dibawah ini</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="total_pcs">Total pcs</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="total_pcs" value="<?= $total_pcsx; ?>" class="form-control" id="total_pcs">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="harga">Harga</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="harga" value="<?= $harga; ?>" class="form-control" id="harga">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="diskon">Diskon</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="diskon" value="<?= $diskon; ?>" class="form-control" id="diskon">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="total_bayar">Total bayar</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="total_bayar" value="<?= $total_bayar; ?>" class="form-control" id="total_bayar">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    <a href="Cucian.php" class="btn btn-danger">Batal</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <!-- /.container-fluid -->


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