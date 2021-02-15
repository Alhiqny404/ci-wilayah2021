<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wilayah extends CI_Model {
  
	public function getProv()
	{
	  // untuk menampilkan data provinsu
	  return $this->db->get('wilayah_provinsi')->result_array();
	}
	
	public function getKab($id)
	{
	  // untuk menampilkan data kabupaten
	  return $this->db->get_where('wilayah_kabupaten',['provinsi_id' => $id])->result();
	}
	
	public function getKec($id)
	{
	  // untuk menampilkan data kecamatan
	  return $this->db->get_where('wilayah_kecamatan',['kabupaten_id' => $id])->result();
	}
	
	public function getDesa($id)
	{
	  // untuk menampilkan data desa
	  return $this->db->get_where('wilayah_desa',['kecamatan_id' => $id])->result();
	}
	
}
