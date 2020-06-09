<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "aslablah");
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $agama = htmlspecialchars($data["agama"]);


  // query insert data
  $query = "INSERT INTO identitas VALUES ('', '$nama', '$kelas', '$agama')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}




function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM identitas WHERE id = $id");
  return mysqli_affected_rows($conn);
}



function ubah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $agama = htmlspecialchars($data["agama"]);

  // query insert data
  $query = "UPDATE identitas SET
            nama = '$nama',
            kelas = '$kelas',
            agama = '$agama'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
