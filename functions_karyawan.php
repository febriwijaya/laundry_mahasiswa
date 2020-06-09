<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "laundry");
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
  $jenkel = htmlspecialchars($data["jenkel"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);


  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO karyawan VALUES ('', '$nama', '$jenkel', '$alamat', '$telepon', '$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_pelanggan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $kode_pel = htmlspecialchars($data["kode_pel"]);
  $nama_pel = htmlspecialchars($data["nama_pel"]);
  $kode_jenis = htmlspecialchars($data["kode_jenis"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);

  // query insert data
  $query = "INSERT INTO pelanggan VALUES ('','$kode_pel', '$nama_pel', '$kode_jenis', '$alamat', '$telepon')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_cucian($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $kode_jenis = htmlspecialchars($data["kode_jenis"]);
  $pengerjaan = htmlspecialchars($data["pengerjaan"]);
  $tglmasuk = htmlspecialchars($data["tglmasuk"]);
  $tglkeluar = htmlspecialchars($data["tglkeluar"]);
  $kemeja = htmlspecialchars($data["kemeja"]);
  $kaos = htmlspecialchars($data["kaos"]);
  $celana_panjang = htmlspecialchars($data["celana_panjang"]);
  $celana_pendek = htmlspecialchars($data["celana_pendek"]);
  $celana_panjang_jeans = htmlspecialchars($data["celana_panjang_jeans"]);
  $rok = htmlspecialchars($data["rok"]);
  $blezer = htmlspecialchars($data["blezer"]);
  $jaket_sweater = htmlspecialchars($data["jaket_sweater"]);
  $daster = htmlspecialchars($data["daster"]);
  $singlet = htmlspecialchars($data["singlet"]);
  $handuk = htmlspecialchars($data["handuk"]);
  $sarung = htmlspecialchars($data["sarung"]);
  $mukena = htmlspecialchars($data["mukena"]);
  $sajadah = htmlspecialchars($data["sajadah"]);
  $jilbab = htmlspecialchars($data["jilbab"]);
  $sapu_tangan = htmlspecialchars($data["sapu_tangan"]);
  $kain_pantai = htmlspecialchars($data["kain_pantai"]);
  $kaos_kaki = htmlspecialchars($data["kaos_kaki"]);
  $baju_coass = htmlspecialchars($data["baju_coass"]);
  $bed_cover = htmlspecialchars($data["bed_cover"]);
  $sprei = htmlspecialchars($data["sprei"]);
  $sarung_bantal = htmlspecialchars($data["sarung_bantal"]);
  $gorden = htmlspecialchars($data["gorden"]);
  $kebaya = htmlspecialchars($data["kebaya"]);
  $jas = htmlspecialchars($data["jas"]);
  $boneka = htmlspecialchars($data["boneka"]);
  $gaun = htmlspecialchars($data["gaun"]);
  $selimut = htmlspecialchars($data["selimut"]);
  $teng_top = htmlspecialchars($data["teng_top"]);
  $cd = htmlspecialchars($data["cd"]);
  $karpet = htmlspecialchars($data["karpet"]);
  $pewangi = htmlspecialchars($data["pewangi"]);
  $total_kilogram = htmlspecialchars($data["total_kilogram"]);
  $status = htmlspecialchars($data["status"]);
  $total_pcs = htmlspecialchars($data["total_pcs"]);
  $harga = htmlspecialchars($data["harga"]);
  $diskon = htmlspecialchars($data["diskon"]);
  $total_bayar = htmlspecialchars($data["total_bayar"]);
  // query insert data
  $query = "INSERT INTO cucian VALUES ('','$kode_jenis', '$pengerjaan', '$tglmasuk', '$tglkeluar', '$kemeja', '$kaos', '$celana_panjang', '$celana_pendek', '$celana_panjang_jeans', '$rok', '$blezer', '$jaket_sweater', '$daster', '$singlet', '$handuk', '$sarung', '$mukena', '$sajadah', '$jilbab', '$sapu_tangan', '$kain_pantai', '$kaos_kaki', '$baju_coass', '$bed_cover', '$sprei', '$sarung_bantal', '$gorden', '$kebaya', '$jas', '$boneka', '$gaun', '$selimut', '$teng_top', '$cd', '$karpet', '$pewangi', '$total_kilogram', '$status', '$total_pcs', '$harga', '$diskon', '$total_bayar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function tambah_penerimaan($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $no_order = htmlspecialchars($data["no_order"]);
  $id_pel = htmlspecialchars($data["id_pel"]);
  $nama_pel = htmlspecialchars($data["nama_pel"]);
  $tglmasuk = htmlspecialchars($data["tglmasuk"]);
  $tglkeluar = htmlspecialchars($data["tglkeluar"]);
  $berat = htmlspecialchars($data["berat"]);
  $pcs = htmlspecialchars($data["pcs"]);
  $pengerjaan = htmlspecialchars($data["pengerjaan"]);
  $harga = htmlspecialchars($data["harga"]);
  $diskon = htmlspecialchars($data["diskon"]);
  $dibayar = htmlspecialchars($data["dibayar"]);
  $sisa = htmlspecialchars($data["sisa"]);
  $status =  htmlspecialchars($data["status"]);

  // query insert data
  $query = "INSERT INTO penerimaan VALUES ('$no_order', '$id_pel', '$nama_pel', '$tglmasuk', '$tglkeluar', '$berat', '$pcs', '$pengerjaan', '$harga', '$diskon', '$dibayar', '$sisa', '$status')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function tambah_saran($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $jenkel = htmlspecialchars($data["jenkel"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $email = htmlspecialchars($data["email"]);
  $hp = htmlspecialchars($data["hp"]);
  $komentar = htmlspecialchars($data["komentar"]);

  // upload gambar
  $gambar = upload_saran();
  if (!$gambar) {
    return false;
  }

  // query insert data
  $query = "INSERT INTO saran VALUES('', '$nama', '$jenkel', '$alamat', '$email', '$hp', '$gambar', '$komentar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function tambah_hubungi($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $nohp = htmlspecialchars($data["nohp"]);
  $komentar = htmlspecialchars($data["komentar"]);

  // query insert data
  $query = "INSERT INTO hubungi VALUES('', '$nama', '$email', '$nohp', '$komentar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);
  return $namaFileBaru;
}

function upload_saran()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }
  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
            alert('pilih gambar terlebih dahulu!');
            </script>";
    return false;
  }

  // cek jika ukurannya terlalu besar
  if ($ukuranFile > 1000000) {
    echo "<script>
            alert('ukuran gambar terlalu besar!');
            </script>";
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);
  return $namaFileBaru;
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_pesan($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM hubungi WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_admin($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM admin WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_penerimaan($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM penerimaan WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_pelanggan($id_pel)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pel = $id_pel");
  return mysqli_affected_rows($conn);
}

function hapus_saran($id)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  mysqli_query($conn, "DELETE FROM saran WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function hapus_cucian($id)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  mysqli_query($conn, "DELETE FROM cucian WHERE id = $id");
  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $jenkel = htmlspecialchars($data["jenkel"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query insert data
  $query = "UPDATE karyawan SET
            nama = '$nama',
            jenkel = '$jenkel',
            alamat = '$alamat',
            telepon = '$telepon',
            gambar = '$gambar'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_cucian($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $kode_jenis = htmlspecialchars($data["kode_jenis"]);
  $pengerjaan = htmlspecialchars($data["pengerjaan"]);
  $kemeja = htmlspecialchars($data["kemeja"]);
  $kaos = htmlspecialchars($data["kaos"]);
  $celana_panjang = htmlspecialchars($data["celana_panjang"]);
  $celana_pendek = htmlspecialchars($data["celana_pendek"]);
  $celana_panjang_jeans = htmlspecialchars($data["celana_panjang_jeans"]);
  $rok = htmlspecialchars($data["rok"]);
  $blezer = htmlspecialchars($data["blezer"]);
  $jaket_sweater = htmlspecialchars($data["jaket_sweater"]);
  $daster = htmlspecialchars($data["daster"]);
  $singlet = htmlspecialchars($data["singlet"]);
  $handuk = htmlspecialchars($data["handuk"]);
  $sarung = htmlspecialchars($data["sarung"]);
  $mukena = htmlspecialchars($data["mukena"]);
  $sajadah = htmlspecialchars($data["sajadah"]);
  $jilbab = htmlspecialchars($data["jilbab"]);
  $sapu_tangan = htmlspecialchars($data["sapu_tangan"]);
  $kain_pantai = htmlspecialchars($data["kain_pantai"]);
  $kaos_kaki = htmlspecialchars($data["kaos_kaki"]);
  $baju_coass = htmlspecialchars($data["baju_coass"]);
  $bed_cover = htmlspecialchars($data["bed_cover"]);
  $sprei = htmlspecialchars($data["sprei"]);
  $sarung_bantal = htmlspecialchars($data["sarung_bantal"]);
  $gorden = htmlspecialchars($data["gorden"]);
  $kebaya = htmlspecialchars($data["kebaya"]);
  $jas = htmlspecialchars($data["jas"]);
  $boneka = htmlspecialchars($data["boneka"]);
  $gaun = htmlspecialchars($data["gaun"]);
  $selimut = htmlspecialchars($data["selimut"]);
  $teng_top = htmlspecialchars($data["teng_top"]);
  $cd = htmlspecialchars($data["cd"]);
  $karpet = htmlspecialchars($data["karpet"]);
  $pewangi = htmlspecialchars($data["pewangi"]);
  $total_kilogram = htmlspecialchars($data["total_kilogram"]);
  $total_pcs = htmlspecialchars($data["total_pcs"]);
  $harga = htmlspecialchars($data["harga"]);
  $diskon = htmlspecialchars($data["diskon"]);
  $total_bayar = htmlspecialchars($data["total_bayar"]);

  // query insert data
  $query = "UPDATE cucian SET
            kode_jenis = '$kode_jenis',
            pengerjaan = '$pengerjaan',
            kemeja = '$kemeja',
            kaos = '$kaos',
            celana_panjang = '$celana_panjang',
            celana_pendek = '$celana_pendek',
            celana_panjang_jeans = '$celana_panjang_jeans',
            rok = '$rok',
            blezer = '$blezer',
            jaket_sweater = '$jaket_sweater',
            daster = '$daster',
            singlet = '$singlet',
            handuk = '$handuk',
            sarung = '$sarung',
            mukena = '$mukena',
            sajadah = '$sajadah',
            jilbab = '$jilbab',
            sapu_tangan = '$sapu_tangan',
            kain_pantai = '$kain_pantai',
            kaos_kaki = '$kaos_kaki',
            baju_coass = '$baju_coass',
            bed_cover = '$bed_cover',
            sprei = '$sprei',
            sarung_bantal = '$sarung_bantal',
            gorden = '$gorden',
            kebaya = '$kebaya',
            jas = '$jas',
            boneka = '$boneka',
            gaun = '$gaun',
            selimut = '$selimut',
            teng_top = '$teng_top',
            cd = '$cd',
            karpet = '$karpet',
            pewangi = '$pewangi',
            total_kilogram = '$total_kilogram',
            total_pcs = '$total_pcs',
            harga = '$harga',
            diskon = '$diskon',
            total_bayar = '$total_bayar',
            WHERE id = $id
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_penerimaan($data)
{
  global $conn;

  $no_order = htmlspecialchars($data["no_order"]);
  $id_pel = htmlspecialchars($data["id_pel"]);
  $nama_pel = htmlspecialchars($data["nama_pel"]);
  $tglmasuk = htmlspecialchars($data["tglmasuk"]);
  $tglkeluar = htmlspecialchars($data["tglkeluar"]);
  $berat = htmlspecialchars($data["berat"]);
  $pcs = htmlspecialchars($data["pcs"]);
  $pengerjaan = htmlspecialchars($data["pengerjaan"]);
  $harga = htmlspecialchars($data["harga"]);
  $diskon = htmlspecialchars($data["diskon"]);
  $dibayar = htmlspecialchars($data["dibayar"]);
  $sisa = htmlspecialchars($data["sisa"]);
  $status =  htmlspecialchars($data["status"]);

  // query insert data
  $query = "UPDATE penerimaan SET
            id_pel = '$id_pel',
            nama_pel = '$nama_pel',
            tglmasuk = '$tglmasuk',
            tglkeluar = '$tglkeluar',
            berat = '$berat',
            pcs = '$pcs',
            pengerjaan = '$pengerjaan', 
            harga = '$harga',
            diskon = '$diskon',
            dibayar = '$dibayar',
            sisa = '$sisa',
            status = '$status'
            WHERE no_order = $no_order
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_pelanggan($data)
{
  global $conn;

  $id_pel = $data["id_pel"];
  $kode_pel = htmlspecialchars($data["kode_pel"]);
  $nama_pel = htmlspecialchars($data["nama_pel"]);
  $kode_jenis = htmlspecialchars($data["kode_jenis"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);
  // query insert data
  $query = "UPDATE pelanggan SET
            kode_pel = '$kode_pel',
            nama_pel = '$nama_pel',
            kode_jenis = '$kode_jenis'
            alamat = '$alamat',
            telepon = '$telepon'
            WHERE id_pel = $id_pel
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function ubah_saran($data)
{
  global $conn;
  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $jenkel = htmlspecialchars($data["jenkel"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $email = htmlspecialchars($data["email"]);
  $hp = htmlspecialchars($data["hp"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);
  $komentar = htmlspecialchars($data["komentar"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }

  // query ubah data
  $query = "UPDATE saran SET
    nama = '$nama',
    jenkel = '$jenkel',
    alamat = '$alamat',
    email = '$email',
    hp = '$hp',
    gambar = '$gambar',
    komentar = '$komentar'
    WHERE id = $id
  ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);
  $jenkel = htmlspecialchars($data["jenkel"]);
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belom
  $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!');
        </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO admin VALUES('', '$nama', '$alamat', '$telepon', '$jenkel','$username', '$password')");

  return mysqli_affected_rows($conn);
}

function ubah_admin($data)
{
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $telepon = htmlspecialchars($data["telepon"]);
  $jenkel = htmlspecialchars($data["jenkel"]);
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belom
  $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!');
        </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  $queryx = "UPDATE admin SET
  nama = '$nama',
  alamat = '$alamat',
  telepon = '$telepon',
  jenkel = '$jenkel',
  username = '$username',
  password = '$password'
  WHERE id = $id
  ";
  // tambahkan user baru ke database
  mysqli_query($conn, $queryx);

  return mysqli_affected_rows($conn);
}
