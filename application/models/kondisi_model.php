<?php

Class Kondisi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view_kondisi(){
		$query=$this->db->query("SELECT * FROM tb_kondisi");
		return $query->result();
	}
} 