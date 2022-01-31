<?php 

class MData extends CI_Model{

    function getAll(){
        return $this->db->get('tbl_masyarakat')->result();
    }
    function updateData ($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    //artikel
    function getArtikel(){
        return $this->db->get('tbl_artikel')->result();
    }
    function cekData($table,$where){
        return $this->db->get_where($table,$where);
    }
    function getArtikelDetail($where){
        return $this->db->get_where('tbl_artikel',$where);
    } 

    function tambahDataArtikel($data,$table){
        $this->db->insert($table,$data);
    }

    function updateDataArtikel ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function hapusArtikel($idArtikel){
        $this->db->where('idArtikel',$idArtikel);
        $this->db->delete('tbl_artikel');
    }
    //organisasi
    function getOrganisasi(){
        return $this->db->get('tbl_organisasi')->result();
    }
    function tambahDataOrganisasi($data,$table){
        $this->db->insert($table,$data);
    }
    function hapusData($idPegawai){
        $this->db->where('idPegawai',$idPegawai);
        $this->db->delete('tbl_organisasi');
    }
    function getOrganisasiDetail($where){
        return $this->db->get_where('tbl_organisasi',$where);
    }
    function updateDataOrganisasi ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
     
    //VisiMisi
    function getVisiMisi(){
        return $this->db->get('tbl_visimisi')->result();
    }
    function getVisiMisiDetail($where){
        return $this->db->get_where('tbl_visimisi',$where);
    }
    function updateDataVisiMisi ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //Warga Negara
    function getWargaNegara(){
        return $this->db->get('tbl_warga')->result();
    }   
    function getStatusWargaNegara(){
        $where= array (
            'dusun' => $this->session->userdata('lokasi')
        );
        return $this->db->get_where('tbl_warga',$where)->result();
    }
    function tambahDataWargaNegara($data,$table){
        $this->db->insert($table,$data);
    }
    function hapusDataWarga($idWargaNegara){
        $this->db->where('idWarga',$idWargaNegara);
        $this->db->delete('tbl_warganegara');
    }
    function getWargaDetail($where){
        return $this->db->get_where('tbl_warganegara',$where);
    }
    function updateDataWargaNegara ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //Warga Negara
    function getProdukHukum(){
        return $this->db->get('tbl_produkhukum')->result();
    }
    function tambahProdukHukum($data,$table){
        $this->db->insert($table,$data);
    }
    function hapusDataHukum($idProdukHukum){
        $this->db->where('idProdukHukum',$idProdukHukum);
        $this->db->delete('tbl_produkhukum');
    }
    function getHukumDetail($where){
        return $this->db->get_where('tbl_produkhukum',$where);
    }
    function updateDataHukum ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
    //User
    function getUser(){
        return $this->db->get('user')->result();
    }
    function tambahUser($data,$table){
        $this->db->insert($table,$data);
    }
    function hapusUser($userId){
        $this->db->where('userId',$userId);
        $this->db->delete('user');
    }
    function getUserDetail($where){
        return $this->db->get_where('user',$where);
    }
    function updateUser ($data,$table,$where,){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    //carousel
    function getCarousel(){
        return $this->db->get('tbl_carousel')->result();
    }
    // function tambahUser($data,$table){
    //     $this->db->insert($table,$data);
    // }
    function hapusCarousel($IdCarousel){
        $this->db->where('IdCarousel',$IdCarousel);
        $this->db->delete('tbl_carousel');
    }


    // statistik
    function updateDataAgama($data,$table,$whereAgama){
        $this->db->where($whereAgama);
        $this->db->update($table,$data);
    }
    
    function updateDataPendidikan($data,$table,$wherePendidikan){
        $this->db->where($wherePendidikan);
        $this->db->update($table,$data);
    }

    function updateDataBekerja($data,$table,$whereBekerja){
        $this->db->where($whereBekerja);
        $this->db->update($table,$data);
    }
    function updateDataJenisKelamin($data,$table,$whereKelamin){
        $this->db->where($whereKelamin);
        $this->db->update($table,$data);
    }
    function updateDataUmur($data,$table,$whereUmur){
        $this->db->where($whereUmur);
        $this->db->update($table,$data);
    }

    function getDataAgama(){
        $where1 = array (
            'idAgama' => 0
        ); 
        return $this->db->get_where('dataagama',$where1)->result();
    }
    function getDataPendidikan(){
        $where1 = array (
            'idPendidikan' => 1
        ); 
        return $this->db->get_where('datapendidikan',$where1)->result();
    }
    function getDataJumlahBekerja(){
        $where1 = array (
            'idBekerja' => 1
        ); 
        return $this->db->get_where('databekerja',$where1)->result();
    }
    function getDataJumlahJenisKelamin(){
        $where1 = array (
            'idJenisKelamin' => 1
        ); 
        return $this->db->get_where('datajeniskelamin',$where1)->result();
    }
    function getDataJumlahWarga(){
        $where1 = array (
            'idWarga' => 1
        ); 
        return $this->db->get_where('datawarga',$where1)->result();
    }

    //Data agama
    function getDataMuslim(){
        $where1 = array (
            'agama' => "islam"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
    function getDatakristen(){
        $where = array (
            'agama' => "kristen"
        ); 
        return $this->db->get_where('tbl_warga',$where)->num_rows();
    } 
        function getDataKatolik(){
        $where = array (
            'agama' => "katolik"
        ); 
        return $this->db->get_where('tbl_warga',$where)->num_rows();
    } 
        function getDataHindu(){
        $where = array (
            'agama' => "hindu"
        ); 
        return $this->db->get_where('tbl_warga',$where)->num_rows();
    } 
        function getDataBudha(){
        $where = array (
            'agama' => "budha"
        ); 
        return $this->db->get_where('tbl_warga',$where)->num_rows();
    } 
        function getDataKonghucu(){
        $where = array (
            'agama' => "konghucu"
        ); 
        return $this->db->get_where('tbl_warga',$where)->num_rows();
    } 

    //Data pendidikan
    function getDataSd(){
        $where1 = array (
            'pendidikan' => "sd"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
    function getDataSmp(){
        $where1 = array (
            'pendidikan' => "smp"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
     function getDataSma(){
        $where1 = array (
            'pendidikan' => "sma"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
     function getDataDiploma(){
        $where1 = array (
            'pendidikan' => "diploma"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
     function getDataStrata1(){
        $where1 = array (
            'pendidikan' => "strata1"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
     function getDataStrata2(){
        $where1 = array (
            'pendidikan' => "strata2"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
    function getDataStrata3(){
        $where1 = array (
            'pendidikan' => "strata3"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }

    //get data bekerja
    function getDataBekerja(){
        $where1 = array (
            'pekerjaan' => "bekerja"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
    function getDataTidakBekerja(){
        $where1 = array (
            'pekerjaan' => "tidak bekerja"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }

    //get data jenis kelamin 
    function getDataPria(){
        $where1 = array (
            'jenisKelamin' => "pria"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }
    function getDataWanita(){
        $where1 = array (
            'jenisKelamin' => "wanita"
        ); 
        return $this->db->get_where('tbl_warga',$where1)->num_rows();
    }

    //get data Umur 
    function getDataUmur1(){
        return $this->db->query("SELECT * FROM tbl_warga where umur <= 5 ")->num_rows();
    }
    function getDataUmur2(){
        return $this->db->query("SELECT * FROM tbl_warga where umur >= 6 && umur<=10")->num_rows();
    }
    function getDataUmur3(){
        return $this->db->query("SELECT * FROM tbl_warga where umur >= 10 && umur<=20")->num_rows();
    }
    function getDataUmur4(){
        return $this->db->query("SELECT * FROM tbl_warga where umur >= 20 && umur <=30")->num_rows();
    }
    function getDataUmur5(){
        return $this->db->query("SELECT * FROM tbl_warga where umur >= 30 && umur <=50")->num_rows();
    }
    function getDataUmur6(){
        return $this->db->query("SELECT * FROM tbl_warga where umur >= 50 && umur <=100")->num_rows();
    }


}

?>