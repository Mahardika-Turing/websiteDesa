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
          foreach($data as $d){
      ?>
        <form method="POST" action="<?= base_url('updateDataVM/'.$d->idVisiMisi)?>"> 
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Visi</label>
              <textarea class="form-control" name="visi"><?= $d->Visi ?></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Misi</label>
              <textarea class="form-control" name="misi"><?= $d->Misi ?></textarea>
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?php 
            }
            ?>
          </form>
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