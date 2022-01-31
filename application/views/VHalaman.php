<?php
    require('asset/template/header.php');
?>
    <?php
        $halamanSession = $this->session->userdata("halaman");
        if($halamanSession == "profilWilayahDesa"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Profil wilayah desa</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
                <div class="container">
                    <div class="card mb-3" style="width: 85%; height: 85%; margin:0 auto;">
                        <img class="card-img-top" height=400 width=80 src="../asset/img/Kades-Durian.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- End #main -->
    <?php
    }else if($halamanSession == "sejarahDesa"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Sejarah desa</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
                <div class="container">
                    <div class="card mb-3" style="width: 85%; height: 85%; margin:0 auto;">
                        <img class="card-img-top" height=400 width=80 src="../asset/img/Kades-Durian.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "visiMisi"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Visi Misi desa</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <?php 
                        foreach ($data as $d ) {?>
                        <h2>Visi</h2>
                        <p><?= $d->Visi?></p>
                        <h2>Misi</h2>
                        <p><?= $d->Misi?></p>    
                    <?php    
                    }
                    ?>
                    
                  </div>
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "pemerintahDesa"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Pemerintah Desa</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <h2 style="text-align: center;">Struktur Pemerintahan Desa Kedai Durian</h2>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Pegawai</th>
                          <th scope="col">NIP</th>
                          <th scope="col">Status</th>
                          <th scope="col">Jabatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            $no = 1;
                            foreach ($data as $d ) {?>
                            <tr>
                              <th><?= $no++ ?></th>
                              <td><?= $d->namaPegawai ?></td>
                              <td><?= $d->noNIP ?></td>
                              <td><?= $d->status ?></td>
                              <td><?= $d->jabatan ?></td>
                            </tr>
                        <?php        # code...
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "DataPendidikanKeluarga"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Data Pendidikan Keluarga</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->
            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Sekolah Dasar</th>
                          <th scope="col">Sekolah Menengah Pertama</th>
                          <th scope="col">Sekolah Menengah Atas</th>
                          <th scope="col">Diploma</th>
                          <th scope="col">Strata 1 </th>
                          <th scope="col">Strata 2</th>
                          <th scope="col">Strata 3</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach ($data as $d ) {?>
                            <tr>
                              <td><?= $d->sd?></td>
                              <td><?= $d->smp ?></td>
                              <td><?= $d->sma ?></td>
                              <td><?= $d->diploma ?></td>
                              <td><?= $d->strata1 ?></td>
                              <td><?= $d->strata2 ?></td>
                              <td><?= $d->strata3 ?></td>
                            </tr>
                        <?php  
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </section>
            <section class="inner-page">
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Pendidikan Keluarga kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "DataPekerjaan"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Data Pekerjaan</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->
            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Bekerja</th>
                          <th scope="col">Tidak Bekerja</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach ($data as $d ) {?>
                            <tr>
                              <td><?= $d->bekerja?></td>
                              <td><?= $d->tidakBekerja ?></td>
                            </tr>
                        <?php  
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </section>
            <section class="inner-page">
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Pekerjaan kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "DataAgama"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Data Agama</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->
        
        <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Agama Islam</th>
                          <th scope="col">Agama Kristen</th>
                          <th scope="col">Agama Katolik</th>
                          <th scope="col">Agama Hindu</th>
                          <th scope="col">Agama Budha</th>
                          <th scope="col">Agama Konghucu</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach ($data as $d ) {?>
                            <tr>
                              <td><?= $d->muslim?></td>
                              <td><?= $d->kristen ?></td>
                              <td><?= $d->katolik ?></td>
                              <td><?= $d->hindu ?></td>
                              <td><?= $d->budha ?></td>
                              <td><?= $d->konghucu ?></td>
                            </tr>
                        <?php  
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </section>
            <section class="inner-page">
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Agama kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
            </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "DataJenisKelamin"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Data Jenis Kelamin</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            </section><!-- End Breadcrumbs -->
            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Pria</th>
                          <th scope="col">Wanita</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            foreach ($data as $d ) {?>
                            <tr>
                              <td><?= $d->pria?></td>
                              <td><?= $d->wanita ?></td>
                            </tr>
                        <?php  
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
            </section>

            <section class="inner-page">
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Jenis Kelamin kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
            </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "DataWargaNegara"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Data Warga Negara</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->
                <section class="inner-page">
                <div class="container">
                    <div class="card">
                      <div class="card-body">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Umur Dibawa 5 Tahun</th>
                              <th scope="col">Umur 6 tahun sampai 10 Tahun</th>
                              <th scope="col">Umur 10 tahun sampai 20 Tahun</th>
                              <th scope="col">Umur 20 tahun sampai 30 Tahun</th>
                              <th scope="col">Umur 30 tahun sampai 50 Tahun</th>
                              <th scope="col">Umur 50 tahun sampai 100 Tahun</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                                foreach ($data as $d ) {?>
                                <tr>
                                  <td><?= $d->umur1?></td>
                                  <td><?= $d->umur2?></td>
                                  <td><?= $d->umur3?></td>
                                  <td><?= $d->umur4?></td>
                                  <td><?= $d->umur5?></td>
                                  <td><?= $d->umur6?></td>
                                </tr>
                            <?php  
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                </section>
            <section class="inner-page">
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Warga Negara kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "produkHukum"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Produk Hukum</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <h2 style="text-align: center;">Dasar Hukum</h2>
                    <?php 
                        foreach ($data as $d ) {?>
                        <p><?= $d->namaHukum?></p>
                        <p>"<?= $d->isiHukum?>"</p>
                        <a href="<?=base_url()?>downloadFile/<?= $d->berkas?>">DowloadFile</a>
                    <?php    
                    } 
                    ?>
                  </div>
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "informasiPublik"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Informasi Publik</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

        <section id="about" class="about">
        <div class="container">    
            <h1 style="text-align:center;"> Berita Terkini</h1><br>
            <div class="card-deck">
                <?php 
                    foreach ($data as $d) {
                      if($d->validasi == 1){?>
                        <div class="card">
                            <img class="card-img-top" src="<?= base_url();?>/upload/<?= $d->gambar ?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><?= $d->judulArtikel ?></h5>
                            <p class="card-text"><?= substr($d->isiArtikel,0,100);  ?></p>
                            <p class="card-text"><small class="text-muted"><?= $d->tanggalArtikel ?></small></p>
                            <a href="<?= base_url();?>halamanDetail/informasiPublikDetail/<?=$d->idArtikel?>" style="float:right; margin-top:1%;">Lihat lebih banyak ... </a>
                            </div>
                        </div>
                      <?php
                      }
                      ?>
                        <!-- <div class="card">
                            <img class="card-img-top" src="<?= base_url();?>/upload/<?= $d->gambar ?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><?= $d->judulArtikel ?></h5>
                            <p class="card-text"><?= substr($d->isiArtikel,0,100);  ?></p>
                            <p class="card-text"><small class="text-muted"><?= $d->tanggalArtikel ?></small></p>
                            <a href="<?= base_url();?>halamanDetail/informasiPublikDetail/<?=$d->idArtikel?>" style="float:right; margin-top:1%;">Lihat lebih banyak ... </a>
                            </div>
                        </div> -->    
                <?php
                }
                ?>
                
            </div>
        </div>
    </section><!-- End About Section -->
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "informasiPublikDetail"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Informasi Publik</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
                <div class="container">
                    <?php 
                        foreach ($data as $d) {?>
                        <div class="card mb-3" style="width: 85%; height: 85%; margin:0 auto;">
                        <img class="card-img-top" height=400 width=80 src="<?= base_url(); ?>upload/<?= $d->gambar ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $d->judulArtikel ?></h5>
                            <p class="card-text"><?= $d->isiArtikel ?></p>
                            <p class="card-text"><small class="text-muted"><?= $d->tanggalArtikel?></small></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }else if($halamanSession == "peta"){?>
        <main id="main">
            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                <h2>Peta Desa Kedai Durian</h2>
                </div>
            </div>
            </section><!-- End Breadcrumbs -->

            <section class="inner-page">
            <div class="container">
                <div class="card">
                  <div class="card-body">
                    <h2 style="text-align: center;">Wilayah Desa Kedai Durian</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15929.519206950466!2d98.6824202!3d3.4992244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313b1d6db4b6d9%3A0xc0efc2b076b19e60!2sKedai%20Durian%2C%20Kec.%20Deli%20Tua%2C%20Kabupaten%20Deli%20Serdang%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1642963927900!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
            </div>
            </section>
        </main><!-- End #main -->
    <?php    
    }
    ?>
<?php
    require('asset/template/footer.php');
?>
