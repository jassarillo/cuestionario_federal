<?php 

class Log_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('string');
	}

	public function insertar(){

	}

	public function getAll(){
		$this->load->database();

		$query = $this->db->get('cat_examenes');
		if($query){
			return print_r($query);
		}else{
			return print_r("****************");
		}
		return $query->result();
	}	
}

