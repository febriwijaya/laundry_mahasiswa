<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions_karyawan.php';

$id = $_GET["id"];
if (hapus_cucian($id) > 0) {
  echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = 'Cucian.php';
  </script>";
} else {
  echo "
  <script>
  alert('data gagal dihapus!');
  document.location.href = 'Cucian.php';
  </script>
  ";
}