<?php

require 'functions_karyawan.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // cek apakah data berhasil ditambahkan atau tidak
  if (tambah_saran($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'tambah_saran.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal ditambahkan!!');
    document.location.href = 'tambah_saran.php';
    </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="UMI, Universitas Methodist Indonesia, Methodist University of Indonesian, Medan, Hang tuah, Sumatera Utara, Sumut,  Indonesia, Universitas Kerakyatan, Universitas Medan, Teknologi, Teknik, Engineering, Insinyur, Pertanian, Kedokteran, Technology, Kuliah kerja nyata, peneltian, pengabdian pada masyarakat, Balairung, Mahasiswa, Universitas" />
  <meta name="description" content="Laundry UMI kreatif dan penuh inspirasi">
  <meta property="og:title" content="Laundry UMI: Laundry berkualitas">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
  <link rel="stylesheet" href="css2/css3.css">
  <link rel="stylesheet" href="css2/css2.css">
  <title>Saran dan kritik</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/logoy.png"> Laundry UMI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link  active" href="tentang.php"><i class="fas fa-eye"></i> Tentang <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="lokasi.php"><i class="fas fa-map-marked-alt"></i> Lokasi</a>
          <a class="nav-item nav-link" href="dryclean.php"><i class="fas fa-tshirt"></i> Laundry dry clean</a>
          <a class="nav-item nav-link" href="hubungi.php"><i class="fas fa-phone"></i> Hubungi</a>
          <a class="nav-item nav-link" href="tambah_saran.php"><i class="fas fa-comment"></i> Saran</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- saran -->
  <div class="container mb-5">
    <div class="row ">
      <div class="col-md-12">
        <h1 class="judul text-center">Saran dan kritik</h1>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <center>
              <i class="fas fa-envelope icon1 mt-4"></i>
            </center>
            <p class="card-text text-center">Jika anda ingin menghubungi kami atau ingin menyampaikan komentar anda
              silahkan isi formulir :)
            </p>
          </div>
        </div>
        <div class="card bawahkan">
          <div class="card-header">
            <h3 class="roboto text-center"> Kantor kami </h3>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Laundry UMI</li>
            <li class="list-group-item">Jln Hang tuah no.8 Medan</li>
            <li class="list-group-item">Sumatera utara</li>
          </ul>
        </div>
      </div>
      <div class="col-md-8">
        <form class="mb-4" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama">Nama lengkap</label>
            <input type="text" name="nama" class="form-control" id="nama" required>
          </div>
          <div class="form-group">
            <label for="jenkel">Jenis Kelamin</label>
            <select class="form-control" name="jenkel" id="jenkel" required>
              <option value="pilih">--silahkan pilih--</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="hp">No.Hp</label>
            <input type="hp" class="form-control" name="hp" id="hp" required>
          </div>
          <div class="form-group">
            <label for="gambar">Foto</label>
            <input type="file" class="form-control-file" name="gambar" id="gambar" required>
          </div>
          <div class="form-group">
            <label for="komentar">Komentar dan saran</label>
            <textarea class="form-control" name="komentar" id="komentar" rows="3" required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- akhir saran -->

  <!-- footer -->
  <footer class="bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 mt-4 mb-4 text-white">
          <img src="img/logoxxx.png" alt="Universitas methodist Indonesia">
          <div class="bawah">
            <h6 style="font-size:24px;">LAUNDRY MAHASISWA UMI</h6>
            <p>Jl. hangtuah no.8 Medan</p>
            <i class="fas fa-envelope"></i> febriwijaya@gmail.com <br>
            <i class="fas fa-phone"></i> +628972966375
          </div>
        </div>
        <div class="col-sm-3 mt-5 text-white">
          <div class="bawahx">
            <h6 style="font-size:20px;">Hubungi kami :</h6>
            <a href="#"><img src="img/fb.png" class="ikon"> Laundry_UMI</a> <br>
            <a href="#"><img src="img/ig.png" class="ikon"> Laundry_UMI</a> <br>
            <a href="#"><img src="img/tw.png" class="ikon"> LaundryUMI</a> <br>
            <a href="#"><img src="img/yt.png" class="ikon"> Web UMI </a>
          </div>
        </div>
        <div class="col-sm-3 mt-5 text-white">
          <div class="bawahx">
            <h6 style="font-size:20px">Jelajah :</h6>
            <a href="#"><i class="fas fa-video"></i> Video</a> <br>
            <a href="#"><i class="fas fa-music"></i> Musik</a> <br>
            <a href="#"><i class="fas fa-gamepad"></i> Game</a> <br>
            <a href="#"><i class="fas fa-portrait"></i> Fotografi</a>
          </div>
        </div>
        <div class="col-sm-3 mt-4 text-white">
          <img src="img/icon.png" style="width:200px; height:220px">
          <div class="bawah">
            <h6 class="gambarx">This is us</h6>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

  <!-- si pembuat website-->
  <div class="bawahxx">
    <div class="container">
      <div class="row justify-content-center">
        <p class="temaxx text-center mt-3">&copy; copyright 2019 | built by Febri wijaya hutagalung</p>
      </div>
    </div>
  </div>
  <!-- akhir si pembuat -->



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
  </script>
</body>

</html>