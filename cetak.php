<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions_karyawan.php';
// ambil data dari tabel mahasiswa
$terima = query("SELECT pl.kode_jenis, kode_pel, nama_pel, tglmasuk, tglkeluar, total_kilogram, total_pcs, total_bayar, status FROM cucian pl JOIN pelanggan pn ON pl.kode_jenis = pn.kode_jenis");

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css2/css3.css">
  <title>DAFTAR TRANSAKSI</title>
</head>
<body>
  <h1>DAFTAR TRANSAKSI</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Kode jenis</th>
      <th>Kode pelanggan</th>
      <th>Nama pelanggan</th>
      <th>Tanggal masuk</th>
      <th>Tanggal keluar</th>
      <th>Total kilogram</th>
      <th>Total pcs</th>
      <th>Total bayar</th>
      <th>Status</th>
    </tr>';

foreach ($terima as $row) {
  $html .= '<tr>
        <td>' . $row["kode_jenis"] . '</td>
        <td>' . $row["kode_pel"] . '</td>
        <td>' . $row["nama_pel"] . '</td>
        <td>' . $row["tglmasuk"] . '</td>
        <td>' . $row["tglkeluar"] . '</td>
        <td>' . $row["total_kilogram"] . '</td>
        <td>' . $row["total_pcs"] . '</td>
        <td>' . $row["total_bayar"] . '</td>
        <td>' . $row["status"] . '</td>
      </tr>';
}



$html .= '</table>
</body>
</html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
// buat nama file dan destinasi donwload
$mpdf->Output('daftar_transaksi.pdf', \Mpdf\Output\Destination::INLINE);
