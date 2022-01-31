<?php
    require('asset/template/headerAdmin.php');
?>

  <?php
    $halamanAdminSession = $this->session->userdata("halamanAdmin");
    $dataSession = $this->session->userdata("status");
    if($halamanAdminSession == "dashboard" && $dataSession != null){?> 
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Dashboard</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              Start creating your amazing application!
            </div>
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AdminArtikel" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Artikel</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>judul</th>
                          <th>Tanggal</th>
                          <th>Isi Artikel</th>
                          <th>Validasi</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach($data as $d) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $d->judulArtikel ?></td>
                          <td><?= $d->tanggalArtikel ?></td>
                          <td><?= $d->isiArtikel ?></td>
                          <td><?php 
                            if($d->validasi == 1){
                              echo "sudah validasi";
                            }else if($d->validasi == 0){
                              echo "belum validasi";
                            }
                            ?></td>
                          <td><?= $d->gambar ?></td>
                          <td>
                            <a href="<?= base_url()?>editArtikel/<?=$d->idArtikel?>">Edit</a>
                            <a href="<?= base_url()?>hapusArtikel/<?=$d->idArtikel?>">Hapus</a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a href="<?= base_url('formAdminArtikel'); ?>">
                  <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                  Tambah
                  </button></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AOrganisasi"  && $dataSession != "operator" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Organisasi</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Pegawai</th>
                          <th>NIP (Nomor Induk Pegawai)</th>
                          <th>Status</th>
                          <th>Jabatan</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1;
                          foreach($data as $d){ 
                          ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $d->namaPegawai ?></td>
                          <td><?= $d->noNIP ?></td>
                          <td><?= $d->status ?></td>
                          <td><?= $d->jabatan ?></td>
                          <td>
                            <a href="<?= base_url()?>editData/<?= $d-> idPegawai?>">Edit</a>
                            <a href="<?= base_url()?>hapusData/<?= $d-> idPegawai?>">Hapus</a>
                          </td>
                        </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a href="<?= base_url('formAdminOrganisasi'); ?>">
                  <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                  Tambah
                  </button></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AVisiMisi" && $dataSession != "operator" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Visi Misi</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Visi</th>
                          <th>Misi</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach($data as $d){ ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td><?= $d->Visi ?></td>
                          <td><?= $d->Misi ?></td>
                          <td>
                            <a href="<?= base_url()?>editDataVM/<?=$d->idVisiMisi?>">Edit</a>
                          </td>
                        </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AWargaNegara" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Warga Negara</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <?= $this->session->userdata('lokasi');?>
            </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Kartu Keluarga</th>
                          <th>Induk Kependudukan</th>
                          <th>Nama</th>
                          <th>Jenis kelamin</th>
                          <th>Alamat</th>
                          <th>Kecamatan</th>
                          <th>Kelurahan</th>
                          <th>Dusun</th>
                          <th>Agama</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach($data as $d){ 
                        ?>
                        <tr>
                          <td><?= $d->noKK ?></td>
                          <td><?= $d->noNIK ?></td>
                          <td><?= $d->nama ?></td>
                          <td><?= $d->jenisKelamin ?></td>
                          <td><?= $d->alamat ?></td>
                          <td><?= $d->kecamatan ?></td>
                          <td><?= $d->kelurahan ?></td>
                          <td><?= $d->dusun ?></td>
                          <td><?= $d->agama ?></td>
                          <td>
                            <a href="<?= base_url()?>editDataWarga/<?= $d-> idWarga?>">Edit</a>
                            <a href="<?= base_url()?>hapusDataWarga/<?= $d-> idWarga?>">Hapus</a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a href="<?= base_url('formAdminWargaNegara'); ?>">
                  <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                  Tambah
                  </button></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AProdukHukum" && $dataSession != "operator" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Produk Hukum</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Nama Hukum</th>
                          <th>Isi Hukum</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $no = 1;
                          foreach($data as $d){
                          ?>
                            <tr>
                              <td><?= $no++;?></td>
                              <td><?= $d->namaHukum ?></td>
                              <td><?= $d->isiHukum ?></td>
                              <td>
                                <a href="<?= base_url();?>editDataHukum/<?= $d->idProdukHukum ?>">Edit</a>
                                <a href="<?= base_url();?>hapusDataHukum/<?= $d->idProdukHukum ?>">Hapus</a>
                              </td>
                            </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a href="<?= base_url('formAdminProdukHukum'); ?>">
                  <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                  Tambah
                  </button></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "AUser" && $dataSession == "superAdmin" && $dataSession != null){?> 
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Nomor</th>
                        <th>Username</th>
                        <th>lokasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach($data as $d) { ?>
                      <tr>
                        <?php
                          if($d->status == "superAdmin"){?>
                            <td><?= $no++ ?></td>
                            <td><?= $d->userName ?></td>
                            <td><?= $d->lokasi ?></td>
                            <td><?= $d->status ?></td>
                            <td>
                              <a href="<?= base_url()?>editUser/<?=$d->userId?>">Edit</a>
                            </td>  
                        <?php
                        }else{?>
                          <td><?= $no++ ?></td>
                          <td><?= $d->userName ?></td>
                          <td><?= $d->lokasi ?></td>
                          <td><?= $d->status ?></td>
                          <td>
                            <a href="<?= base_url()?>editUser/<?=$d->userId?>">Edit</a>
                            <a href="<?= base_url()?>hapusUser/<?=$d->userId?>">Hapus</a>
                          </td>
                        <?php
                        }
                        ?>
                        
                      </tr>
                      <?php
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <a href="<?= base_url('formAdminUser'); ?>">
                <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                Tambah
                </button></a>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
       </div>
    </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <?php
  }else if($halamanAdminSession == "ACarousel" && $dataSession != "operator" && $dataSession != null){?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Admin Carousel</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach($data as $d) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $d->gambar ?></td>
                          <td>
                            <a href="<?= base_url()?>hapusCarousel/<?=$d->idCarousel?>">Hapus</a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <a href="<?= base_url('formAdminCarousel'); ?>">
                  <button style="border-radius:10px; border:2px solid darkgray; float:right;">
                  Tambah
                  </button></a>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }else{?> 
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1></h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <h1 style="text-align: center; color: red;"> Anda tidak di perbolehkan masuk halaman ini !! </h1>
            </div>
            <!-- /.container-fluid -->
          </section>
         </div>
      </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php
  }
  ?>

<?php
    require('asset/template/footerAdmin.php');
?>
