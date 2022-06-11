<?php

Class Buku_detail_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function insert_buku_detail($id_buku,$kode,$kondisi){
		$this->db->query("INSERT INTO tb_buku_detail VALUES('',$id_buku,'$kode',$kondisi)");
	}

	public function view_buku_detail(){
		$query=$this->db->query("SELECT tb_buku_detail.`id`, tb_buku.`judul`, tb_buku_detail.`kode_buku`, tb_kondisi.`kondisi` 
			FROM tb_buku_detail
			INNER JOIN tb_buku ON tb_buku.`id`=tb_buku_detail.`id_buku`
			INNER JOIN tb_kondisi ON tb_kondisi.`id`=tb_buku_detail.`id_kondisi`");
		return $query->result();
	}

	public function delete_buku_detail($id_buku_detail){
		$this->db->query("DELETE FROM tb_buku_detail WHERE id=$id_buku_detail");
	}

	public function view_buku_detail_by_id($id_buku_detail){
		$query=$this->db->query("SELECT * FROm tb_buku_detail WHERE id=$id_buku_detail");
		return $query->row_array();
	}

	public function edit_buku_detail($id_buku_detail,$id_buku,$kode,$kondisi){
		$this->db->query("UPDATE tb_buku_detail SET id_buku=$id_buku, kode_buku='$kode',id_kondisi=$kondisi WHERE id=$id_buku_detail");
	}
} 