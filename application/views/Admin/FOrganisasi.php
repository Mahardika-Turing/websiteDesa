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
            <h1>Form Admin Organisasi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php 
        $dataSession = $this->session->userdata('organisasi');
        if($dataSession == "update"){ 
          foreach($data as $d){
          ?>
          <form method="POST" action="<?= base_url('updateDataOrganisasi/'.$d->idPegawai)?>">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pegawai</label>
              <input type="text" name="namaPegawai" value="<?= $d->namaPegawai ?>" class="form-control" id="exampleInputEmail1" placeholder="Nama Pegawai">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">NIP (Nomor Induk Pegawai)</label>
              <input type="text" name="noNIP" value="<?= $d->noNIP ?>"class="form-control" id="exampleInputPassword1" placeholder="NIP (Nomor Induk Pegawai)">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <input type="text" name="status" value="<?= $d->status ?>" class="form-control" id="exampleInputPassword1" placeholder="Status">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jabatan</label>
              <input type="text" name="jabatan" value="<?= $d->jabatan ?>" class="form-control" id="exampleInputPassword1" placeholder="Jabatan">
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        <?php
        }
      }else
        { ?>
          <form method="POST" action="tambahDataOrganisasi">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Pegawai</label>
              <input type="text" name="namaPegawai" class="form-control" id="exampleInputEmail1" placeholder="Nama Pegawai">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">NIP (Nomor Induk Pegawai)</label>
              <input type="text" name="noNIP" class="form-control" id="exampleInputPassword1" placeholder="NIP (Nomor Induk Pegawai)">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <input type="text" name="status" class="form-control" id="exampleInputPassword1" placeholder="Status">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jabatan</label>
              <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Jabatan">
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