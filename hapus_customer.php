<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require "functions_karyawan.php";

$id_pel = $_GET["id_pel"];

if (hapus_pelanggan($id_pel) > 0) {
  echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href = 'customer.php';
        </script>";
} else {
  echo "
        <script>
        alert('data gagal dihapus!');
        document.location.href = 'customer.php';
        </script>";
}
