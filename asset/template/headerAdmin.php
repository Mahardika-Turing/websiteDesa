<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Website</title>


 <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();?>asset/asset3/plugin/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url();?>asset/asset3/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>asset/asset3/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php 
            if($this->session->userdata('status') != "superAdmin" ){?>
              <a href="<?= base_url('halamanAdmin/dashboard'); ?>" class="d-block">Admin <?= $this->session->userdata("lokasi"); ?></a>
          <?php
            }else { ?>
              <a href="<?= base_url('halamanAdmin/dashboard'); ?>" class="d-block">Super Admin <?= $this->session->userdata("lokasi"); ?></a>
          <?php
            }
          ?>
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
          $dataSession = $this->session->userdata("status");
          if($dataSession == "operator"){?>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AdminArtikel'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AWargaNegara'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Warga Negara</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Logout'); ?>" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
          <?php
          }else if($dataSession == "superAdmin"){ ?>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AdminArtikel'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AOrganisasi'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Organsisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AVisiMisi'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AWargaNegara'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Warga Negara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AProdukHukum'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Produk Hukum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AUser'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/ACarousel'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Carousel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Logout'); ?>" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
          <?php
          }else if($dataSession == "admin"){ ?>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AdminArtikel'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AOrganisasi'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Organsisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AVisiMisi'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AWargaNegara'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Warga Negara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/AProdukHukum'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Produk Hukum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('halamanAdmin/ACarousel'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin Carousel</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Logout'); ?>" class="nav-link">
               <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
          <?php
          }else{
            redirect(base_url('admin'));
          }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>