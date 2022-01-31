<?php 

class MAuth extends CI_Model{
    function cekData($table,$where){
        return $this->db->get_where($table,$where);
    }
    function getAll(){
        return $this->db->get('tbl_masyarakat')->result();
    }
    function updateData ($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function lupaPassword ($table,$updateData,$userId){
        $this->db->where($userId);
        $this->db->update($table,$updateData);
    }
    
    function updatePassword ($table,$updateData,$userId){
        $this->db->where($userId);
        $this->db->update($table,$updateData);
    }
}

?>