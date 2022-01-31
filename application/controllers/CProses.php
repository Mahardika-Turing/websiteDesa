<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CProses extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        $this->load->model('MData');
        $this->load->helper('url', 'form'); 
        $this->load->library('form_validation');
    }
    //Admin Artikel 
    function tambahDataArtikel(){
        $dataSession = $this->session->userdata("status");
        $fileName       = trim($_FILES['uploadGambar']['name']);
        $where = array(
            'gambar' => $fileName
        );
        $cek = $this->MData->cekData("tbl_artikel",$where)->num_rows();
        if($cek != 0){
            die('Data sama');
        }
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('uploadGambar')) 
        {
            die("gagal");
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('imageupload_form', $error);
        } 

        $fileName       = trim($_FILES['uploadGambar']['name']);
        $judulArtikel   = $this->input->post('judulArtikel');
        $tanggalArtikel = $this->input->post('tanggalArtikel');
        $isiArtikel     = $this->input->post('isiArtikel');
        if($dataSession != "operator"){
            $validasi   = 1;
        }else{
            $validasi   = 0;
        }
        $data = array (
            'judulArtikel'      => $judulArtikel,
            'tanggalArtikel'    => $tanggalArtikel,
            'isiArtikel'        => $isiArtikel,
            'gambar'            => $fileName,
            'validasi'          => $validasi
        );
        $this->MData->tambahDataArtikel($data,'tbl_artikel');
        redirect(base_url('halamanAdmin/AdminArtikel'));
    }

    function hapusArtikel($idArtikel){
        $this->MData->hapusArtikel($idArtikel);
        redirect(base_url("halamanAdmin/AdminArtikel"));
    }
    function editArtikel($idArtikel){
        $this->session->set_userdata('artikel','update');
        redirect(base_url("formAdminArtikel/".$idArtikel));
    }
    
    function updateDataArtikel($idArtikel){
        $dataSession = $this->session->userdata("status");
        $fileName       = trim($_FILES['uploadGambar']['name']);
        $where = array(
            'gambar' => $fileName
        );
        $cek = $this->MData->cekData("tbl_artikel",$where)->num_rows();
        if($cek != 0){
            die('Data sama');
        }
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('uploadGambar')) 
        {
            die("gagal");
            $error = array('error' => $this->upload->display_errors());
 
            $this->load->view('imageupload_form', $error);
        } 

        $fileName       = trim($_FILES['uploadGambar']['name']);
        $judulArtikel   = $this->input->post('judulArtikel');
        $tanggalArtikel = $this->input->post('tanggalArtikel');
        $isiArtikel     = $this->input->post('isiArtikel');
        if($dataSession != "operator"){
            $validasi   = $this->input->post('validasi');;
        }else{
            $validasi   = 0;
        }
        $data = array (
            'judulArtikel'      => $judulArtikel,
            'tanggalArtikel'    => $tanggalArtikel,
            'isiArtikel'        => $isiArtikel,
            'gambar'            => $fileName,
            'validasi'          => $validasi
        );
        $where = array (
            'idArtikel' => $idArtikel
        ); 
        $this->MData->updateDataArtikel($data,'tbl_artikel',$where);
        unset($_SESSION['artikel']);
        redirect(base_url('halamanAdmin/AdminArtikel'));
    }
    //Organisasi
    function tambahDataOrganisasi(){
        $namaPegawai    = $this->input->post('namaPegawai');
        $noNIP          = $this->input->post('noNIP');
        $status         = $this->input->post('status');
        $jabatan        = $this->input->post('jabatan');
        $data = array (
            'namaPegawai'   => $namaPegawai,
            'noNIP'         => $noNIP,
            'status'        => $status,
            'jabatan'       => $jabatan
        );
        $this->MData->tambahDataOrganisasi($data,'tbl_organisasi');
        redirect(base_url('halamanAdmin/AOrganisasi'));
    }
    function hapusData($idPegawai){
        $this->MData->hapusData($idPegawai);
        redirect(base_url("halamanAdmin/AOrganisasi"));
    }
    function editData($idPegawai){
        $this->session->set_userdata('organisasi','update');
        redirect(base_url("formAdminOrganisasi/".$idPegawai));
    }
    function updateDataOrganisasi($idPegawai){
        $namaPegawai    = $this->input->post('namaPegawai');
        $noNIP          = $this->input->post('noNIP');
        $status         = $this->input->post('status');
        $jabatan        = $this->input->post('jabatan');
        $data = array (
            'namaPegawai' => $namaPegawai,
            'noNIP' => $noNIP,
            'status' => $status,
            'jabatan' => $jabatan
        );
        $where = array (
            'idPegawai' => $idPegawai
        ); 
        $this->MData->updateDataOrganisasi($data,'tbl_organisasi',$where);
        unset($_SESSION['organisasi']);
        redirect(base_url('halamanAdmin/AOrganisasi'));       
    }

    //visi misi
    function editDataVM($idVisiMisi){
        $this->session->set_userdata('visiMisi','update');
        redirect(base_url("formAdminVisiMisi/".$idVisiMisi));
    }

    function updateDataVM($idVisiMisi){
        $visi    = $this->input->post('visi');
        $misi    = $this->input->post('misi');
        $data = array (
            'visi' => $visi,
            'misi' => $misi,
        );
        $where = array (
            'idVisiMisi' => $idVisiMisi
        ); 
        $this->MData->updateDataVisiMisi($data,'tbl_visimisi',$where);
        unset($_SESSION['visiMisi']);
        redirect(base_url('halamanAdmin/AVisiMisi'));       
    }

    //Warga Negara
    function tambahDataWargaNegara(){
        $noKK               = $this->input->post('noKK');
        $noNIK              = $this->input->post('noNIK');
        $namaWarga          = $this->input->post('namaWarga');
        $umur               = $this->input->post('umur');
        $jenisKelamin       = $this->input->post('jenisKelamin');
        $alamat             = $this->input->post('alamat');
        $kecamatan          = $this->input->post('kecamatan');
        $kelurahan          = $this->input->post('kelurahan');
        $dusun              = $this->input->post('dusun');
        $tempatLahir        = $this->input->post('tempatLahir');
        $tanggalLahir       = $this->input->post('tanggalLahir');
        $agama              = $this->input->post('agama');
        $pendidikan         = $this->input->post('pendidikan');
        $pekerjaan          = $this->input->post('pekerjaan');
        $statusPerkawinan   = $this->input->post('statusPerkawinan');
        $data = array (
            'noKK'              => $noKK,
            'noNIK'             => $noNIK,
            'nama'              => $namaWarga,
            'umur'              => $umur,
            'jenisKelamin'      => $jenisKelamin,
            'alamat'            => $alamat,
            'kecamatan'         => $kecamatan,
            'kelurahan'         => $kelurahan,
            'dusun'             => $dusun,
            'tempatLahir'       => $tempatLahir,
            'tanggalLahir'      => $tanggalLahir,
            'agama'             => $agama,
            'pendidikan'        => $pendidikan,
            'pekerjaan'         => $pekerjaan,
            'statusPerkawinan'  => $statusPerkawinan
        );
        $this->MData->tambahDataWargaNegara($data,'tbl_warga');
        
        //update jumlah Agama
        $agama = array (
            'muslim'    => $this->MData->getDataMuslim(),
            'kristen'   => $this->MData->getDataKristen(),
            'katolik'   => $this->MData->getDataKatolik(),
            'hindu'     => $this->MData->getDataHindu(),
            'budha'     => $this->MData->getDataBudha(),
            'konghucu'  => $this->MData->getDataKonghucu()
        );
        $whereAgama = array (
            'idAgama' => 0
        ); 
        $this->MData->updateDataAgama($agama,'dataagama',$whereAgama);
        
        //update jumlah pendidikan
        $pendidikan = array (
            'sd'        => $this->MData->getDataSd(),
            'smp'       => $this->MData->getDataSmp(),
            'sma'       => $this->MData->getDataSma(),
            'diploma'   => $this->MData->getDataDiploma(),
            'strata1'   => $this->MData->getDataStrata1(),
            'strata2'   => $this->MData->getDataStrata2(),
            'strata3'   => $this->MData->getDataStrata3()
        );
        $wherePendidikan = array (
            'idPendidikan' => 1
        );
        $this->MData->updateDataPendidikan($pendidikan,'datapendidikan',$wherePendidikan);

        //update jumlah bekerja
        $bekerja = array (
            'bekerja'        => $this->MData->getDataBekerja(),
            'tidakBekerja'   => $this->MData->getDataTidakBekerja(),
        );
        $whereBekerja = array (
            'idBekerja' => 1
        );
        $this->MData->updateDataBekerja($bekerja,'databekerja',$whereBekerja);

        //update jumlah jenis kelamin
        $jenisKelamin = array (
            'pria'    => $this->MData->getDataPria(),
            'wanita'  => $this->MData->getDataWanita(),
        );
        $whereJenisKelamin = array (
            'idJenisKelamin' => 1
        );
        $this->MData->updateDataBekerja($jenisKelamin,'datajeniskelamin',$whereJenisKelamin);
        $umur = array (
            'umur1'   => $this->MData->getDataUmur1(),
            'umur2'   => $this->MData->getDataUmur2(),
            'umur3'   => $this->MData->getDataUmur3(),
            'umur4'   => $this->MData->getDataUmur4(),
            'umur5'   => $this->MData->getDataUmur5(),
            'umur6'   => $this->MData->getDataUmur6()
        );
        $whereUmur = array (
            'idWarga' => 1
        );
        $this->MData->updateDataUmur($umur,'dataWarga',$whereUmur);
        redirect(base_url('halamanAdmin/AWargaNegara'));
    }

    function hapusDataWarga($idWarga){
        //update jumlah Agama
        $this->MData->hapusDataWarga($idWarga);

        $agama = array (
            'muslim'    => $this->MData->getDataMuslim(),
            'kristen'   => $this->MData->getDataKristen(),
            'katolik'   => $this->MData->getDataKatolik(),
            'hindu'     => $this->MData->getDataHindu(),
            'budha'     => $this->MData->getDataBudha(),
            'konghucu'  => $this->MData->getDataKonghucu()
        );
        $whereAgama = array (
            'idAgama' => 0
        ); 
        $this->MData->updateDataAgama($agama,'dataagama',$whereAgama);
        //update jumlah pendidikan
        $pendidikan = array (
            'sd'        => $this->MData->getDataSd(),
            'smp'       => $this->MData->getDataSmp(),
            'sma'       => $this->MData->getDataSma(),
            'diploma'   => $this->MData->getDataDiploma(),
            'strata1'   => $this->MData->getDataStrata1(),
            'strata2'   => $this->MData->getDataStrata2(),
            'strata3'   => $this->MData->getDataStrata3()
        );
        $wherePendidikan = array (
            'idPendidikan' => 1
        );
        $this->MData->updateDataPendidikan($pendidikan,'datapendidikan',$wherePendidikan);
        //update jumlah bekerja
        $bekerja = array (
            'bekerja'        => $this->MData->getDataBekerja(),
            'tidakBekerja'   => $this->MData->getDataTidakBekerja(),
        );
        $whereBekerja = array (
            'idBekerja' => 1
        );
        $this->MData->updateDataBekerja($bekerja,'databekerja',$whereBekerja);
        //update jumlah jenis kelamin
        $jenisKelamin = array (
            'pria'    => $this->MData->getDataPria(),
            'wanita'  => $this->MData->getDataWanita(),
        );
        $whereJenisKelamin = array (
            'idJenisKelamin' => 1
        );
        $this->MData->updateDataJenisKelamin($jenisKelamin,'datajeniskelamin',$whereJenisKelamin);
        $umur = array (
            'umur1'   => $this->MData->getDataUmur1(),
            'umur2'   => $this->MData->getDataUmur2(),
            'umur3'   => $this->MData->getDataUmur3(),
            'umur4'   => $this->MData->getDataUmur4(),
            'umur5'   => $this->MData->getDataUmur5(),
            'umur6'   => $this->MData->getDataUmur6()
        );
        $whereUmur = array (
            'idWarga' => 1
        );
        $this->MData->updateDataUmur($umur,'dataWarga',$whereUmur);
        redirect(base_url("halamanAdmin/AWargaNegara"));
    }
    function editDataWarga($idWarga){
        $this->session->set_userdata('warga','update');
        redirect(base_url("formAdminWargaNegara/".$idWarga));
    }
    function updateDataWargaNegara($idWarga){
        $noKK               = $this->input->post('noKK');
        $noNIK              = $this->input->post('noNIK');
        $namaWarga          = $this->input->post('namaWarga');
        $umur               = $this->input->post('umur');
        $jenisKelamin       = $this->input->post('jenisKelamin');
        $alamat             = $this->input->post('alamat');
        $kecamatan          = $this->input->post('kecamatan');
        $kelurahan          = $this->input->post('kelurahan');
        $dusun              = $this->input->post('dusun');
        $tempatLahir        = $this->input->post('tempatLahir');
        $tanggalLahir       = $this->input->post('tanggalLahir');
        $agama              = $this->input->post('agama');
        $pendidikan         = $this->input->post('pendidikan');
        $pekerjaan          = $this->input->post('pekerjaan');
        $statusPerkawinan   = $this->input->post('statusPerkawinan');
        $data = array (
            'noKK'              => $noKK,
            'noNIK'             => $noNIK,
            'nama'              => $namaWarga,
            'umur'              => $umur,
            'jenisKelamin'      => $jenisKelamin,
            'alamat'            => $alamat,
            'kecamatan'         => $kecamatan,
            'kelurahan'         => $kelurahan,
            'dusun'             => $dusun,
            'tempatLahir'       => $tempatLahir,
            'tanggalLahir'      => $tanggalLahir,
            'agama'             => $agama,
            'pendidikan'        => $pendidikan,
            'pekerjaan'         => $pekerjaan,
            'statusPerkawinan'  => $statusPerkawinan
        );
        $where = array (
            'idWarga' => $idWarga
        ); 
        $this->MData->updateDataWargaNegara($data,'tbl_warga',$where);
        unset($_SESSION['warga']);
        redirect(base_url('halamanAdmin/AWargaNegara'));       
    }

    //Produk Hukum
    function tambahProdukHukum(){

        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('uploadFile')) 
        {
            die("gagal");
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('imageupload_form', $error);
        } 
        
        $fileName     = trim($_FILES['uploadFile']['name']);
        $namaHukum    = $this->input->post('namaHukum');
        $isiHukum     = $this->input->post('isiHukum');
        $data = array (
            'namaHukum'     => $namaHukum,
            'isiHukum'      => $isiHukum,
            'berkas'        => $fileName
        );
        $this->MData->tambahProdukHukum($data,'tbl_produkhukum');
        redirect(base_url('halamanAdmin/AProdukHukum'));
    }
    function hapusDataHukum($idProdukHukum){
        $this->MData->hapusDataHukum($idProdukHukum);
        redirect(base_url("halamanAdmin/AProdukHukum"));
    }
    function editDataHukum($idProdukHukum){
        $this->session->set_userdata('produkHukum','update');
        redirect(base_url("formAdminProdukHukum/".$idProdukHukum));
    }
    function updateDataHukum($idProdukHukum){
        $config['upload_path'] = './berkas/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 2000;

        $fileName     = trim($_FILES['uploadFile']['name']);
        $namaHukum      = $this->input->post('namaHukum');
        $isiHukum       = $this->input->post('isiHukum');
        $data = array (
            'namaHukum' => $namaHukum,
            'isiHukum'  => $isiHukum,
            'berkas'    => $fileName
        );
        $where = array (
            'idProdukHukum' => $idProdukHukum
        ); 
        $this->MData->updateDataHukum($data,'tbl_produkhukum',$where);
        unset($_SESSION['produkHukum']);
        redirect(base_url('halamanAdmin/AProdukHukum'));       
    }
    function downloadFile($berkas){
        force_download('berkas/'.$berkas,NULL);
        redirect(base_url('halaman/produkHukum'));       
    }

    //User
    function tambahUser(){
        $username       = $this->input->post('username');
        $password       = $this->input->post('password');
        $status         = $this->input->post('status');
        $lokasi         = $this->input->post('lokasi');
        $data = array (
            'username'     => $username,
            'password'     => md5($password),
            'status'       => $status,
            'lokasi'       => $lokasi,
        );
        $this->MData->tambahUser($data,'user');
        redirect(base_url('halamanAdmin/AUser'));
    }
    function hapusUser($userId){
        $this->MData->hapusUser($userId);
        redirect(base_url("halamanAdmin/AUser"));
    }
    function editUser($userId){
        $this->session->set_userdata('user','update');
        redirect(base_url("formAdminUser/".$userId));
    }
    function updateUser($userId){
        $username       = $this->input->post('username');
        $status         = $this->input->post('status');
        $statusAkun     = $this->input->post('statusAkun');
        $lokasi         = $this->input->post('lokasi');
        $data = array (
            'userName'  => $username,
            'status'    => $status,
            'active'    => $statusAkun,
            'lokasi'    => $lokasi
        );
        $where = array (
           'userId' => $userId
        ); 
        $this->MData->updateUser($data,'user',$where);
        unset($_SESSION['user']);
        redirect(base_url('halamanAdmin/AUser'));       
    }
    
    //Carousel
    function tambahCarousel(){


        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;

        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload('uploadGambar')) 
        {
            die("gagal");
            $error = array('error' => $this->upload->display_errors());
 
            $this->load->view('imageupload_form', $error);
        } 
        else 
        {
            die("berhasil");
            $data = array('image_metadata' => $this->upload->data());
 
            $this->load->view('imageupload_success', $data);
        }

        // $username       = $this->input->post('username');
        // $password       = $this->input->post('password');
        // $status         = $this->input->post('status');
        // $data = array (
        //     'username'     => $username,
        //     'password'     => md5($password),
        //     'status'       => $status
        // );
        // $this->MData->tambahUser($data,'user');
        // redirect(base_url('halamanAdmin/AUser'));
    }
    function hapusCarousel($IdCarousel){
        $this->MData->hapusCarousel($IdCarousel);
        redirect(base_url("halamanAdmin/ACarousel"));
    }
}