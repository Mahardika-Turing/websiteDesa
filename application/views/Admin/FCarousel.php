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
            <h1>Form Admin Carousel</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <form method="POST" action="tambahDataCarousel" enctype="multipart/form-data" >
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputPassword1">Upload Gambar</label><br>
              <input type="file" name="uploadGambar" size="20">
            </div>
            <div class="form-group">
                  <button type="submit" name="submit" value="upload" class="btn btn-primary" >Submit</button>
            </div>
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