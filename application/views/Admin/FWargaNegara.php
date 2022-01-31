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
            <h1>Form Warga Negara</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php 
        $dataSession = $this->session->userdata('warga');
        if($dataSession == "update"){
          foreach($data as $d){
          ?>
          <form method="POST" action="<?= base_url('updateDataWargaNegara/'.$d->idWarga)?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Kartu Keluarga</label>
              <input value="<?= $d->noKK ?>" type="text" name="noKK" class="form-control" id="exampleInputEmail1" placeholder="masukkan nomor kartu keluarga">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Induk Kependudukan</label>
              <input value="<?= $d->noNIK ?>" type="text" name="noNIK" class="form-control" id="exampleInputEmail1" placeholder="masukkan nomor induk kependudukan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Warga</label>
              <input value="<?= $d->nama ?>"type="text" name="namaWarga" class="form-control" id="exampleInputEmail1" placeholder="masukkan nama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Umur</label>
              <input value="<?= $d->umur ?>" type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="masukkan Umur">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Kelamin</label>
              <input value="<?= $d->jenisKelamin ?>" type="text" name="jenisKelamin" class="form-control" id="exampleInputEmail1" placeholder="masukkan Jenis Kelamin">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input value="<?= $d->alamat ?>" type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="masukkan alamat">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kecamatan</label>
              <input value="<?= $d->kecamatan ?>" type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" placeholder="masukkan kecamatan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kelurahan</label>
              <input value="<?= $d->kelurahan ?>" type="text" name="kelurahan" class="form-control" id="exampleInputEmail1" placeholder="masukkan kelurahan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Dusun</label>
              <input value="<?= $d->dusun ?>" type="text" name="dusun" class="form-control" id="exampleInputEmail1" placeholder="masukkan Dusun">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tempat Lahir</label>
              <input value="<?= $d->tempatLahir ?>" type="text" name="tempatLahir" class="form-control" id="exampleInputEmail1" placeholder="masukkan tempat lahir">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input value="<?= $d->tanggalLahir ?>" type="date" name="tanggalLahir" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Agama</label>
              <input value="<?= $d->agama ?>" type="text" name="agama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Agama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pendidikan</label>
              <input value="<?= $d->pendidikan ?>" type="text" name="pendidikan" class="form-control" id="exampleInputEmail1" placeholder="masukkan pendidikan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pekerjaan</label>
              <input value="<?= $d->pekerjaan ?>" type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Pekerjaan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Status Perkawinan</label>
              <input value="<?= $d->statusPerkawinan ?>" type="text" name="statusPerkawinan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan status perkawinan">
            </div>
            <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        <?php
        }
        }else{?>
          <form method="POST" action="tambahDataWargaNegara">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Kartu Keluarga</label>
              <input type="text" name="noKK" class="form-control" id="exampleInputEmail1" placeholder="masukkan nomor kartu keluarga">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor Induk Kependudukan</label>
              <input type="text" name="noNIK" class="form-control" id="exampleInputEmail1" placeholder="masukkan nomor induk kependudukan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Warga</label>
              <input type="text" name="namaWarga" class="form-control" id="exampleInputEmail1" placeholder="masukkan nama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Umur</label>
              <input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="masukkan Umur">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jenis Kelamin</label>
              <input type="text" name="jenisKelamin" class="form-control" id="exampleInputEmail1" placeholder="masukkan Jenis Kelamin">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="masukkan alamat">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kecamatan</label>
              <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" placeholder="masukkan kecamatan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kelurahan</label>
              <input type="text" name="kelurahan" class="form-control" id="exampleInputEmail1" placeholder="masukkan kelurahan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Dusun</label>
              <input type="text" name="dusun" class="form-control" id="exampleInputEmail1" placeholder="masukkan Dusun">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tempat Lahir</label>
              <input type="text" name="tempatLahir" class="form-control" id="exampleInputEmail1" placeholder="masukkan tempat lahir">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input type="date" name="tanggalLahir" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Agama</label>
              <input type="text" name="agama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Agama">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pendidikan</label>
              <input type="text" name="pendidikan" class="form-control" id="exampleInputEmail1" placeholder="masukkan pendidikan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Pekerjaan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Status Perkawinan</label>
              <input type="text" name="statusPerkawinan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan status perkawinan">
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