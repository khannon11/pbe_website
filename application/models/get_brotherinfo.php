<?php 

class Get_brotherinfo extends CI_Model{

	function getInfo($name){
		$name = str_replace("_", " ", $name);
		$query = $this->db->query('SELECT * FROM brothers WHERE brotherName="'.$name.'"');
		return $query->result();
	}
	
	function getPos($pos){
		$query = $this->db->query('SELECT brotherName FROM brothers WHERE brotherPosition="'.$pos.'"');
		return $query->result();
	}

	
	function getList(){
		$query = $this->db->query('SELECT brotherName FROM brothers WHERE is_active=1 ORDER BY brotherPledgeClass ASC, brotherPledgeNumber ASC');
		return $query->result();
	}
	

}