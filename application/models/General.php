<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model
{
	function show($table){
		return $this->db->get($table);
	}

	function show_by_id($table,$nim,$semester,$ta){
		return $this->db->get_where($table,array('fk_nim'=>$nim,'semester'=>$semester,'TA'=>$ta));
	}
	
	function show_by($table,$nim){
		return $this->db->get_where($table,array('fk_nim'=>$nim));
	}

    function show_where($table,$where){		
		return $this->db->get_where($table,$where);
	}
    
    function show_2where($table,$where,$where2){		
		$this->db->select('COUNT(*)');
        $this->db->from($table);
        $this->db->where($where." AND ".$where2);
        $query = $this->db->get();
        return $query->num_rows();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
    
    function join2table($table1,$table2,$where){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2,$where);
        $query = $this->db->get();
        return $query->result();
    }
    
    function join2table_where($table1,$table2,$where,$where2){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2,$where);
        $this->db->where($where2);
        $query = $this->db->get();
        return $query->result();
    }
    
    function join2table_whered($table1,$table2,$where,$where2){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2,$where);
        $this->db->where($where2);
        $query = $this->db->get();
        return $query->result();
    }
    
    function join5table($table1,$table2,$table3,$table4,$where1,$where2,$where3){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2,$where1);
        $this->db->join($table3,$where2);
        $this->db->join($table4,$where3);
        $query = $this->db->get();
        return $query->result();
    }
    
    function join5table_where($table1,$table2,$table3,$table4,$where1,$where2,$where3,$where){
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2,$where1);
        $this->db->join($table3,$where2);
        $this->db->join($table4,$where3);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
}