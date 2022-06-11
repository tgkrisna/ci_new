<?php

Class Pengarang_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_pengarang($nama,$alamat,$telepon){
		$this->db->query("INSERT INTO tb_pengarang VALUES ('','$nama','$alamat','$telepon')");
	}

	public function view_pengarang(){
		$query=$this->db->query("SELECT * FROM tb_pengarang");
		return $query->result();
	}
	public function delete_pengarang($id_pengarang){
		$this->db->query("DELETE FROM tb_pengarang WHERE id_pengarang=$id_pengarang");
	}
	public function edit_pengarang($id_pengarang){
		$query=$this->db->query("SELECT * FROM tb_pengarang WHERE id_pengarang=$id_pengarang");
		return $query->row_array();
	}
	public function edited_pengarang($id_pengarang,$nama,$alamat,$telepon){
		$this->db->query("UPDATE tb_pengarang set nama_pengarang='$nama',alamat='$alamat',telepon='$telepon' WHERE id_pengarang=$id_pengarang");
	}
} 