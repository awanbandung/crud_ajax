<?php
class M_mahasiswa extends CI_Model{

	function mahasiswa_list(){
		$hasil=$this->db->query("SELECT * FROM tbl_mahasiswa");
		return $hasil->result();
	}

	function simpan_mahasiswa($nim,$nama,$jen_kel,$jurusan,$alamat){
		$hasil=$this->db->query("INSERT INTO tbl_mahasiswa (nim,nama,jen_kel,jurusan,alamat)VALUES('$nim','$nama','$jen_kel','$jurusan','$alamat')");
		return $hasil;
	}

	function get_mahasiswa_by_nim($nim){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa WHERE nim='$nim'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nim' => $data->nim,
					'nama' => $data->nama,
					'jen_kel' => $data->jen_kel,
					'jurusan' => $data->jurusan,
					'alamat' => $data->alamat,
					);
			}
		}
		return $hasil;
	}

	function update_mahasiswa($nim,$nama,$jen_kel,$jurusan,$alamat){
		$hasil=$this->db->query("UPDATE tbl_mahasiswa SET nama='$nama',jen_kel='$jen_kel',jurusan='$jurusan',alamat='$alamat' WHERE nim='$nim'");
		return $hasil;
	}

	function hapus_mahasiswa($nim){
		$hasil=$this->db->query("DELETE FROM tbl_mahasiswa WHERE nim='$nim'");
		return $hasil;
	}
	
}