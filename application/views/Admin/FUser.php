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
            <h1>Form Admin User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php
        $dataSession = $this->session->userdata('user'); 
        if($dataSession != null){ 
          foreach($data as $d){ ?>
          <form method="POST" action=<?= base_url('updateUser/'.$d->userId) ?>>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" value="<?= $d->userName ?>" class="form-control" name="username" id="exampleInputEmail1" placeholder="username">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="exampleInputEmail1" placeholder="Lokasi">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <select class="form-control" name="status"> 
                <option value="<?= $d->status ?>"><?= $d->status ?></option>
                <option value="superAdmin">superAdmin</option>
                <option value="admin">admin</option>
                <option value="operator">operator</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status Akun</label>
              <select class="form-control" name="statusAkun"> 
                <option value="<?= $d->active ?>"><?= $d->active ?></option>
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
              </select>
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <?php 
          }
        }else{?>
        <form method="POST" action="tambahUser">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Lokasi</label>
              <input type="text" class="form-control" name="lokasi" id="exampleInputEmail1" placeholder="Lokasi">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <select class="form-control" name="status"> 
                <option value=""></option>
                <option value="superAdmin">superAdmin</option>
                <option value="admin">admin</option>
                <option value="operator">operator</option>
              </select>
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