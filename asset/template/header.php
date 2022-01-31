<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Resmi Desa Kedai Durian</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- bootsrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="<?= base_url();?>asset/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url();?>asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>asset/css/style.css" rel="stylesheet">

  <!-- Chart Js -->
  <script type="text/javascript" src="<?= base_url();?>asset/js/Chart.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <?php 
          $dataSession = $this->session->userdata('halaman');
          if($dataSession == "informasiPublikDetail"){?>
            <div class="logo" style="margin-left:-2%; font-weight:bold;" >
            <img src="../../asset/img/logoDeliSerdang.png" height=100 style="float:left; margin-right:4%;margin-top:4%;">  
        </div>            
        <?php
        }else{ ?>
          <div class="logo" style="margin-left:-2%; font-weight:bold;" >
          <img src="../asset/img/logoDeliSerdang.png" height=100 style="float:left; margin-right:4%;margin-top:4%;">  
        </div>
        <?php  
        }
        ?>
        <p style="color:white; margin-left:-17%; margin-top:1.5%;">
          Kabupaten Deli Serdang <br> Desa Kedai Durian
        </p>
      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url();?>landingPage">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url();?>halaman/profilWilayahDesa">Profil Wilayah Desa</a></li>
              <li><a href="<?= base_url();?>halaman/sejarahDesa">Sejarah Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Pemerintah Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url();?>halaman/visiMisi">Visi dan Misi</a></li>
              <li><a href="<?= base_url();?>halaman/pemerintahDesa">Pemerintah Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Data Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url();?>halaman/DataPendidikanKeluarga">Data pendidikan dalam keluarga</a></li>
              <li><a href="<?= base_url();?>halaman/DataPekerjaan">Data pekerjaan</a></li>
              <li><a href="<?= base_url();?>halaman/DataAgama">Data agama</a></li>
              <li><a href="<?= base_url();?>halaman/DataJenisKelamin">Data jenis kelamin</a></li>
              <li><a href="<?= base_url();?>halaman/DataWargaNegara">Data warga negara</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Regulasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url();?>halaman/produkHukum">Produk hukum</a></li>
              <li><a href="<?= base_url();?>halaman/informasiPublik">Informasi Publik</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url();?>halaman/peta">Peta</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
