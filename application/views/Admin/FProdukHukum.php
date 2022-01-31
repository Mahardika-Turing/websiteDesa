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
            <h1>Form Admin Produk Hukum</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php
        $dataSession = $this->session->userdata('produkHukum');
        if($dataSession == "update"){
          foreach($data as $d){?>
          <form method="POST" action="<?= base_url('updateDataHukum/'.$d->idProdukHukum)?>" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Hukum</label>
              <input type="text" value="<?= $d->namaHukum ?>" name="namaHukum" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isi Hukum</label>
              <textarea name="isiHukum" class="form-control"><?= $d->isiHukum ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Upload File</label><br>
              <input type="file" name="uploadFile">
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        <?php  
        }
        }else{?>
        <form method="POST" action="tambahProdukHukum" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Hukum</label>
              <input type="text" name="namaHukum" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Isi Hukum</label>
              <textarea name="isiHukum" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Upload File</label><br>
              <input type="file" name="uploadFile">
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
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