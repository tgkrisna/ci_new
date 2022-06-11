<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('pengarang_model');
		$this->load->model('penerbit_model');
		$this->load->model('buku_model');
		$this->load->model('kondisi_model');
		$this->load->model('buku_detail_model');

	}

	public function insert_user(){
		$this->load->view('user/insert_user');
	}

	public function inserted_user(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->user_model->inserted_user($username, $password, $nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_user");
	}

	public function view_user(){
		$data['user']=$this->user_model->view_user();
		$this->load->view('user/view_user',$data);
	}	

	public function delete_user(){
		$id=$this->input->get('id');
		$this->user_model->delete_user($id);
		redirect("../index.php/welcome/view_user");
	}

	public function edit_user(){
		$id=$this->input->get('id');
		$data['user']=$this->user_model->edit_user($id);
		$this->load->view('user/edit_user',$data);
	}
	public function edited_user(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post ('password');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->user_model->edited_user($id,$username, md5($password), $nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_user");
	}

	public function insert_pengarang()
	{
		$this->load->view('pengarang/insert_pengarang');
	}

	public function inserted_pengarang(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->pengarang_model->insert_pengarang($nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_pengarang");
	}

	public function view_pengarang(){
		$data['pengarang']=$this->pengarang_model->view_pengarang();
		$this->load->view('pengarang/view_pengarang',$data);
	}

	public function delete_pengarang(){
		$id=$this->input->get('id_pengarang');
		$this->pengarang_model->delete_pengarang($id);
		redirect("../index.php/welcome/view_pengarang");
	}

	public function edit_pengarang(){
		$id=$this->input->get('id_pengarang');
		$data['pengarang']=$this->pengarang_model->edit_pengarang($id);
		$this->load->view('pengarang/edit_pengarang',$data);
	}
	public function edited_pengarang(){
		$id=$this->input->post('id_pengarang');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->pengarang_model->edited_pengarang($id,$nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_pengarang");
	}

	public function insert_penerbit()
	{
		$this->load->view('penerbit/insert_penerbit');
	}

	public function inserted_penerbit(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->penerbit_model->insert_penerbit($nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_penerbit");
	}

	public function view_penerbit(){
		$data['penerbit']=$this->penerbit_model->view_penerbit();
		$this->load->view('penerbit/view_penerbit',$data);
	}

	public function delete_penerbit(){
		$id=$this->input->get('id_penerbit');
		$this->penerbit_model->delete_penerbit($id);
		redirect("../index.php/welcome/view_penerbit");
	}

	public function edit_penerbit(){
		$id=$this->input->get('id_penerbit');
		$data['penerbit']=$this->penerbit_model->edit_penerbit($id);
		$this->load->view('penerbit/edit_penerbit',$data);
	}
	public function edited_penerbit(){
		$id=$this->input->post('id_penerbit');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$this->penerbit_model->edited_penerbit($id,$nama,$alamat,$telepon);
		redirect("../index.php/welcome/view_penerbit");
	}
	public function index() {
        $this->load->view('login');
    }
 
    
    public function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$data=$this->user_model->login($username,$password);
		if (empty($data)){
			redirect('../index.php/welcome/index?login=error', 'refresh');
        }else{
        	$this->session->set_userdata('id_user', $data['id']);
        	redirect('../index.php/welcome/input_buku', 'refresh');
        }
	}

	public function logout(){
		session_destroy();
		redirect('../index.php/welcome/index', 'refresh');
	}
    /*
	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	Buku
	!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	*/
	public function input_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data['pengarang']=$this->pengarang_model->view_pengarang();
			$data['penerbit']=$this->penerbit_model->view_penerbit();
			$this->load->view('buku/input_buku',$data);
        }
			
        
	}

	public function tambah_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$judul=$this->input->post('judul');
			$penerbit=$this->input->post('penerbit');
			$pengarang=$this->input->post('pengarang');
			$halaman=$this->input->post('halaman');
			$tahun=$this->input->post('tahun');
			$user=$this->session->userdata('id_user');
			$this->buku_model->input_buku($judul,$penerbit,$pengarang,$halaman,$tahun,$user);
		redirect('../index.php/welcome/lihat_buku', 'refresh');
        }
	}

	public function lihat_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$data['buku']=$this->buku_model->lihat_buku();
			$this->load->view('buku/lihat_buku',$data);
        }
	}

	public function hapus_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$id_buku=$this->input->get('id_buku');
			$this->buku_model->hapus_buku($id_buku);
			redirect("../index.php/welcome/lihat_buku");
        }
	}

	public function form_edit_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$id_buku=$this->input->get('id_buku');
			$data['pengarang']=$this->pengarang_model->view_pengarang();
			$data['penerbit']=$this->penerbit_model->view_penerbit();
			$data['buku']=$this->buku_model->lihat_buku_id($id_buku);
			$this->load->view('buku/form_edit_buku',$data);
        }	
	}

	public function edit_buku(){
		if (empty($this->session->userdata('id_user'))){
			redirect('../index.php/welcome/index', 'refresh');
        }else{
			$id_buku=$this->input->post('id_buku');
			$judul=$this->input->post('judul');
			$penerbit=$this->input->post('penerbit');
			$pengarang=$this->input->post('pengarang');
			$halaman=$this->input->post('halaman');
			$tahun=$this->input->post('tahun');
			$this->buku_model->edit_buku($id_buku,$judul,$penerbit,$pengarang,$halaman,$tahun);
			redirect("../index.php/welcome/lihat_buku");
        }
	}

	/*
	###########################################################################################
	Buku Detail
	###########################################################################################
	*/

	public function form_buku_detail(){
		$data['buku']=$this->buku_model->lihat_buku();
		$data['kondisi']=$this->kondisi_model->view_kondisi();
		$this->load->view('buku_detail/form_buku_detail',$data);
	}

	public function insert_buku_detail(){
		$id_buku=$this->input->post('buku');
		$kode=$this->input->post('kode');
		$kondisi=$this->input->post('kondisi');
		$this->buku_detail_model->insert_buku_detail($id_buku,$kode,$kondisi);
		redirect('../index.php/welcome/view_buku_detail', 'refresh');
	}

	public function view_buku_detail(){
		$data['buku_detail']=$this->buku_detail_model->view_buku_detail();
		$this->load->view('buku_detail/view_buku_detail',$data);
	}

	public function delete_buku_detail(){
		$id_buku_detail=$this->input->get('id_buku_detail');
		$this->buku_detail_model->delete_buku_detail($id_buku_detail);
		redirect('../index.php/welcome/view_buku_detail');
	}

	public function form_edit_buku_detail(){
		$id_buku_detail=$id_buku_detail=$this->input->get('id_buku_detail');
		$data['buku']=$this->buku_model->lihat_buku();
		$data['kondisi']=$this->kondisi_model->view_kondisi();
		$data['buku_detail']=$this->buku_detail_model->view_buku_detail_by_id($id_buku_detail);
		$this->load->view('buku_detail/form_edit_buku_detail',$data);
	}

	public function edit_buku_detail(){
		$id_buku_detail=$this->input->post('id_buku_detail');
		$id_buku=$this->input->post('buku');
		$kode=$this->input->post('kode');
		$kondisi=$this->input->post('kondisi');
		$this->buku_detail_model->edit_buku_detail($id_buku_detail,$id_buku,$kode,$kondisi);
		redirect('../index.php/welcome/view_buku_detail');
	}

}
