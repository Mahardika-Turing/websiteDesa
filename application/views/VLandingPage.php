<?php
    require('asset/template/headerLP.php');
?>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">    
            <!-- <div class="jumbotron jumbotron-fluid" style="background-color: #dee7ec;">
                <div class="container">
                    <h1 style="text-align:center;">Data Warga desa kedai durian</h1>
                    <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                    </div> 
                    <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span style="color :#5c9f24; font-size:50px;" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Laki Laki</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span style="color :#5c9f24; font-size:50px;" data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Perempuan</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span style="color :#5c9f24; font-size:50px;" data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Bekerja</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span style="color :#5c9f24; font-size:50px;" data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Tidak Bekerja</p>
                    </div>           
                    </div>
                </div>
            </div>  -->
           <h1 style="text-align:center;"> Berita Terkini</h1><br>
            <div class="card-deck">
                <?php 
                    foreach ($data as $d) {
                        if($d->validasi == 1){?>
                        <div class="card">
                            <img class="card-img-top" height="300" width="200" src="<?= base_url();?>upload/<?= $d->gambar ?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title"><?= $d->judulArtikel ?></h5>
                            <p class="card-text"><?= substr($d->isiArtikel,0,100);  ?></p>
                            <p class="card-text"><small class="text-muted"><?= $d->tanggalArtikel ?></small></p>
                            <a href="<?= base_url();?>halamanDetail/informasiPublikDetail/<?=$d->idArtikel?>" style="float:right; margin-top:1%;">Lihat lebih banyak ... </a>
                            </div>
                        </div>    
                <?php
                    }
                }
                ?>
            </div>
            <a href="<?= base_url();?>halaman/informasiPublik" style="float:right; margin-top:1%;">Lihat lebih banyak berita ... </a>
        </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->
<?php
    require('asset/template/footerLP.php');
?>
