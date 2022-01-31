<?php
    require('asset/template/headerAdmin.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Admin Artikel</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php
        $dataSession = $this->session->userdata('artikel'); 
        $dataSessionStatus = $this->session->userdata("status");
        if($dataSession != null){ 
          foreach($data as $d){ ?>
          <form method="POST" action=<?= base_url('updateDataArtikel/'.$d->idArtikel) ?>  enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Judul Artikel</label>
              <input type="text" class="form-control" name="judulArtikel" id="exampleInputEmail1" placeholder="Enter email" value="<?= $d->judulArtikel ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Artikel</label>
              <input type="date" class="form-control" name="tanggalArtikel" id="exampleInputPassword1" placeholder="Password" value="<?= $d->tanggalArtikel ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isi Artikel</label>
              <textarea id="editor" name="isiArtikel"><?= $d->isiArtikel ?></textarea>
            </div>
            <?php
            if($dataSessionStatus != "operator"){?>
              <div class="form-group">
              <label for="exampleInputPassword1">Isi Artikel</label>
              <select class="form-control" name="validasi">
                <option><?= $d->validasi ?></option>
                <option value="1">Validasi</option>
                <option value="0">Belum Validasi</option>
              </select>
            </div>
            <?php
            }
            ?>
            <div class="form-group">
              <label for="exampleInputPassword1">Upload Gambar</label><br>
              <input type="file" name="uploadGambar"value="<?= $d->tanggalArtikel ?>">
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary" value="upload">Submit</button>
            </div>
        </div>
        </form>
        <?php 
          }
        }else{?>
        <form method="POST" action="tambahDataArtikel" enctype="multipart/form-data" >
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Judul Artikel</label>
              <input type="text" class="form-control" name="judulArtikel" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal Artikel</label>
              <input type="date" class="form-control" name="tanggalArtikel" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isi Artikel</label>
              <textarea id="editor" name="isiArtikel"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Upload Gambar</label><br>
              <input type="file" name="uploadGambar" size="20">
            </div>
            <div class="form-group">
                  <button type="submit" name="submit" value="upload" class="btn btn-primary" >Submit</button>
            </div>
        </form>
        <?php
        }
        ?>

      </div>
      <!-- /.card-body -->
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
    require('asset/template/footerAdmin.php');
?>