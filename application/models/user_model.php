<?php

Class user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function inserted_user($username, $password, $nama,$alamat,$telepon){
		$this->db->query("INSERT INTO tb_users VALUES ('', '$username', md5('$password'),'$nama','$alamat','$telepon')");
	}

	public function view_user(){
		$query=$this->db->query("SELECT * FROM tb_users");
		return $query->result();
	}

	public function delete_user($id){
		$this->db->query("DELETE FROM tb_users WHERE id=$id");
	}
	public function edit_user($id){
		$query=$this->db->query("SELECT * FROM tb_users WHERE id=$id");
		return $query->row_array();
	}
	public function edited_user($id,$username,$password,$nama,$alamat,$telepon){
		$this->db->query("UPDATE tb_users set username='$username', password='$password', nama='$nama',alamat='$alamat',telepon='$telepon' WHERE id=$id");
	}
	public function login($username,$password){
		$query=$this->db->query("SELECT * FROM tb_users WHERE username='$username' AND password=md5('$password')");
		return $query->row_array();
	}
} 