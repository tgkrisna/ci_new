<?php

Class Penerbit_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_penerbit($nama,$alamat,$telepon){
		$this->db->query("INSERT INTO tb_penerbit VALUES ('','$nama','$alamat','$telepon')");
	}

	public function view_penerbit(){
		$query=$this->db->query("SELECT * FROM tb_penerbit");
		return $query->result();
	}
	public function delete_penerbit($id_penerbit){
		$this->db->query("DELETE FROM tb_penerbit WHERE id_penerbit=$id_penerbit");
	}
	public function edit_penerbit($id_penerbit){
		$query=$this->db->query("SELECT * FROM tb_penerbit WHERE id_penerbit=$id_penerbit");
		return $query->row_array();
	}
	public function edited_penerbit($id_penerbit,$nama,$alamat,$telepon){
		$this->db->query("UPDATE tb_penerbit set nama_penerbit='$nama',alamat='$alamat',telepon='$telepon' WHERE id_penerbit=$id_penerbit");
	}
} 