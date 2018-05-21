<?php
class Mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}
	function index(){
		$this->load->view('v_mahasiswa');
	}

	function data_mahasiswa(){
		$data=$this->m_mahasiswa->mahasiswa_list();
		echo json_encode($data);
	}

	function get_mahasiswa(){
		$nim=$this->input->get('id');
		$data=$this->m_mahasiswa->get_mahasiswa_by_nim($nim);
		echo json_encode($data);
	}

	function simpan_mahasiswa(){
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jen_kel=$this->input->post('jen_kel');
		$jurusan=$this->input->post('jurusan');
		$alamat=$this->input->post('alamat');
		$data=$this->m_mahasiswa->simpan_mahasiswa($nim,$nama,$jen_kel,$jurusan,$alamat);
		echo json_encode($data);
	}

	function update_mahasiswa(){
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$jen_kel=$this->input->post('jen_kel');
		$jurusan=$this->input->post('jurusan');
		$alamat=$this->input->post('alamat');
		$data=$this->m_mahasiswa->update_mahasiswa($nim,$nama,$jen_kel,$jurusan,$alamat);
		echo json_encode($data);
	}

	function hapus_mahasiswa(){
		$nim=$this->input->post('nim');
		$data=$this->m_mahasiswa->hapus_mahasiswa($nim);
		echo json_encode($data);
	}

}