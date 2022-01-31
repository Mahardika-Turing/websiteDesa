<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        $this->load->model('MAuth');
    }

    public function admin()
	{
		$this->load->view('VLogin');
	}
    
    public function lupaPassword()
	{
		$this->load->view('VPassword');
	}


    function prosesLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tes = md5($password);
        $where = array(
            'userName' => $username, 
            'password' => md5($password)
        );
        $cek = $this->MAuth->cekData("user",$where)->num_rows();
        if($cek > 0){
            $cekData = $this->MAuth->cekData("user",$where)->result();
            foreach($cekData as $cd){
                if($cd->active == false){
                    $this->session->set_userdata("alert","tidakAktif");
                    redirect(base_url("login"));        
                }else{
                    $dataSession = array(
                        'nama'   => $cd->userName,
                        'status' => $cd->status,
                        'lokasi' => $cd->lokasi
                    );
                    $this->session->set_userdata($dataSession);
                    redirect(base_url("halamanAdmin/dashboard"));
                }
            }
        }else{
            $cekUser = array(
                'userName' => $username, 
            );  
            $cekData = $this->MAuth->cekData("user",$cekUser)->num_rows();
            if($cekData != 0){
                $data = $this->MAuth->cekData("user",$cekUser)->result();
                foreach($data as $cd){
                    if($cd->password == null && $cd->active == true){
                        $this->session->set_userdata("alert","passwordBaru");
                        $this->session->set_userdata('updatePass',$username);
                        redirect(base_url("lupaPassword"));
                    }else if($cd->active == false){
                        $this->session->set_userdata("alert","tidakAktif");
                        redirect(base_url("admin"));
                    }
                }    
            }else{

                $this->session->set_userdata("alert","passwordSalah");
                redirect(base_url("admin"));
            }
        }
    }

    function prosesLupaPassword(){
        $username = $this->input->post('username');
        $where = array(
            'userName' => $username, 
        );
        $cek = $this->MAuth->cekData("user",$where)->num_rows();
        if($cek > 0){
            $cekData = $this->MAuth->cekData("user",$where)->result();
            foreach($cekData as $cd){
                $updateData = array(
                    'userId'     => $cd->userId,
                    'userName'   => $cd->userName,
                    'active'     => 0,
                    'password'   => ""
                );
                $userId = array (
                    'userId'     => $cd->userId,
                );
                $this->MAuth->lupaPassword("user",$updateData,$userId);
            }
            $this->session->set_userdata("alert","reset");
            redirect(base_url("login"));    
        }else{
            echo "username tidak di temukan";
        }
    }

    function prosesPasswordbaru(){
        $password = $this->input->post('username');
        $username = $this->session->userdata('updatePass');
        $where = array(
            'userName' => $username, 
        );
        $cek = $this->MAuth->cekData("user",$where)->num_rows();
        if($cek > 0){
            $cekData = $this->MAuth->cekData("user",$where)->result();
            foreach($cekData as $cd){
                $updateData = array(
                    'userId'     => $cd->userId,
                    'password'   => md5($password)
                );
                $userId = array (
                    'userId'     => $cd->userId,
                );
                $this->MAuth->updatePassword("user",$updateData,$userId);
            }
            $this->session->set_userdata("alert","passwordBaru");
            redirect(base_url("login"));
        }else{
            echo "username tidak di temukan";
        }
    }

    function updateDataWarga(){
        $jlhWarga = $this->input->post('jlhWarga');
        $data = array (
             'jlhWarga' => $jlhWarga,
        );
        $where = array (
            'id' => 1
        );
        $this->MAuth->updateData($where,$data,'tbl_masyarakat');
        redirect(base_url('dashboard'));
    }
    function updateDataLaki(){
        $jlhLaki = $this->input->post('jlhLaki');
        $data = array (
             'jlhLaki' => $jlhLaki,
        );
        $where = array (
            'id' => 1
        );
        $this->MAuth->updateData($where,$data,'tbl_masyarakat');
        redirect(base_url('dashboard'));
    }
    function updateDataWanita(){
        $jlhWanita = $this->input->post('jlhWanita');
        $data = array (
             'jlhWanita' => $jlhWanita,
        );
        $where = array (
            'id' => 1
        );
        $this->MAuth->updateData($where,$data,'tbl_masyarakat');
        redirect(base_url('dashboard'));
    }
    function updateDataLahir(){
        $jlhWarga = $this->input->post('jlhLahir');
        $data = array (
             'jlhLahir' => $jlhLahir,
        );
        $where = array (
            'id' => 1
        );
        $this->MAuth->updateData($where,$data,'tbl_masyarakat');
        redirect(base_url('dashboard'));
    }

    function prosesLogOut (){
        $this->session->sess_destroy();
        redirect(base_url(""));
    }
}