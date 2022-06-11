<?php

Class Buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input_buku($judul,$penerbit,$pengarang,$halaman,$tahun,$user){
		$this->db->query("INSERT INTO tb_buku VALUES ('','$judul',$penerbit,$pengarang,$halaman,$tahun,$user)");
	}

	public function lihat_buku(){
		$query=$this->db->query("SELECT tb_buku.`id`,tb_buku.`judul`,tb_penerbit.`nama_penerbit`,tb_pengarang.`nama_pengarang`,tb_buku.`jumlah_halaman`,tb_buku.`tahun_terbit`, tb_users.`nama`
			FROM tb_buku
			INNER JOIN tb_pengarang ON tb_buku.`id_pengarang`=tb_pengarang.`id_pengarang`
			INNER JOIN tb_penerbit ON tb_buku.`id_penerbit`=tb_penerbit.`id_penerbit`
			INNER JOIN tb_users ON tb_buku.`addby` =tb_users.`id`");
		return $query->result();
	}

	public function hapus_buku($id_buku){
		$this->db->query("DELETE FROM tb_buku WHERE id=$id_buku");
	}

	public function lihat_buku_id($id_buku){
		$query=$this->db->query("SELECT * FROM tb_buku WHERE id=$id_buku");
		return $query->row_array();	
	}

	public function edit_buku($id_buku,$judul,$penerbit,$pengarang,$halaman,$tahun){
		$this->db->query("UPDATE tb_buku SET judul='$judul', id_penerbit=$penerbit, id_pengarang=$pengarang, jumlah_halaman=$halaman, tahun_terbit=$tahun WHERE id=$id_buku");
	}
} 