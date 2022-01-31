<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPage extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('MData');
    }

	public function index()
	{
		$this->load->view('VlandingPage');
	}

    public function landingPage()
	{
		$data['data'] = $this->MData->getArtikel();
		// $data['data'] = $this->MData->getCarousel();
		$this->load->view('VlandingPage',$data);
	}

    public function halaman($dataHalaman)
	{
		if($dataHalaman == "dashboard"){
	        $this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "visiMisi"){
			$data['data'] = $this->MData->getVisiMisi();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "profilWilayahDesa"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman');
		}else if($dataHalaman == "sejarahDesa"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman');
		}else if($dataHalaman == "pemerintahDesa"){
			$data['data'] = $this->MData->getOrganisasi();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "DataPendidikanKeluarga"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$data['data'] = $this->MData->getDataPendidikan();
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "DataPekerjaan"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$data['data'] = $this->MData->getDataJumlahBekerja();
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "DataAgama"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$data['data'] = $this->MData->getDataAgama();
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "DataJenisKelamin"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$data['data'] = $this->MData->getDataJumlahJenisKelamin();
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "DataWargaNegara"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$data['data'] = $this->MData->getDataJumlahWarga();
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "produkHukum"){
			$data['data'] = $this->MData->getProdukHukum();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "informasiPublik"){
			$data['data'] = $this->MData->getArtikel();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "informasiPublikDetail"){
			$where = array('idArtikel'=> $idArtikel);
			$data['data'] = $this->MData->getArtikelDetail($where)->result();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}else if($dataHalaman == "peta"){
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman');
		}		
	}
	    
	public function halamanDetail($dataHalaman,$idArtikel)
	{
		 if($dataHalaman == "informasiPublikDetail"){
			$where = array('idArtikel'=> $idArtikel);
			$data['data'] = $this->MData->getArtikelDetail($where)->result();
			$this->session->set_userdata("halaman",$dataHalaman);
			$this->load->view('VHalaman',$data);
		}	
	}

	//Admin
	
	public function halamanAdmin($dataHalamanAdmin)
	{
		if($dataHalamanAdmin == "dashboard"){
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin');	
		}
		else if($dataHalamanAdmin == "AdminArtikel"){
			$data['data'] = $this->MData->getArtikel();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "AOrganisasi"){
			$data['data'] = $this->MData->getOrganisasi();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "AVisiMisi"){
			$data['data'] = $this->MData->getVisiMisi();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "AWargaNegara"){
			$dataSession = $this->session->userdata('status');
			if($dataSession != "operator"){
				$data['data'] = $this->MData->getWargaNegara();	
			}else{
				$data['data'] = $this->MData->getStatusWargaNegara();				
			}		
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "AProdukHukum"){
			$data['data'] = $this->MData->getProdukHukum();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "AUser"){
			$data['data'] = $this->MData->getUser();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
		else if($dataHalamanAdmin == "ACarousel"){
			$data['data'] = $this->MData->getCarousel();
			$this->session->set_userdata("halamanAdmin",$dataHalamanAdmin);
			$this->load->view('Admin/halamanAdmin',$data);	
		}
	}

	//form Admin
	public function formAdminArtikel()
	{
		unset($_SESSION['artikel']);
		$this->load->view('Admin/FArtikel');
	}
	public function formAdminArtikelEdit($idArtikel)
	{
		$where = array('idArtikel'=> $idArtikel);
		$data['data'] = $this->MData->getArtikelDetail($where)->result();
		$this->load->view('Admin/FArtikel',$data);
	}
	public function formAdminOrganisasi()
	{
		unset($_SESSION['organisasi']);
		$this->load->view('Admin/FOrganisasi');
	}
	public function formAdminOrganisasiEdit($idPegawai)
	{
		$where = array('idPegawai'=> $idPegawai);
		$data['data'] = $this->MData->getOrganisasiDetail($where)->result();
		$this->load->view('Admin/FOrganisasi',$data);
	}
	public function formAdminProdukHukum()
	{
		unset($_SESSION['produkHukum']);
		$this->load->view('Admin/FProdukHukum');
	}
	public function formAdminProdukHukumEdit($idProdukHukum)
	{
		$where = array('idProdukHukum'=> $idProdukHukum);
		$data['data'] = $this->MData->getHukumDetail($where)->result();
		$this->load->view('Admin/FProdukHukum',$data);
	}
	public function formAdminVisiMisi($idVisiMisi)
	{
		$where = array('idVisiMisi'=> $idVisiMisi);
		$data['data'] = $this->MData->getVisiMisiDetail($where)->result();
		$this->load->view('Admin/FVisiMisi',$data);
	}
	public function formAdminWargaNegara()
	{
		unset($_SESSION['warga']);
		$this->load->view('Admin/FWargaNegara');
	}
	public function formAdminWargaNegaraEdit($idWarga)
	{
		$where = array('idWarga'=> $idWarga);
		$data['data'] = $this->MData->getWargaDetail($where)->result();
		$this->load->view('Admin/FWargaNegara',$data);
	}
	public function formAdminUser()
	{
		unset($_SESSION['user']);
		$this->load->view('Admin/FUser');
	}
	public function formAdminUserEdit($userId)
	{
		$where = array('userId'=> $userId);
		$data['data'] = $this->MData->getUserDetail($where)->result();
		$this->load->view('Admin/FUser',$data);
	}

	public function formAdminCarousel()
	{
		unset($_SESSION['user']);
		$this->load->view('Admin/FCarousel');
	}
}
