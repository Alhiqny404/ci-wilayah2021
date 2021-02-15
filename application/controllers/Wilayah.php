<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    // meload atau memanggil model M_wilayah
    $this->load->model('M_wilayah','wilayah');
  }
  
  
  // return halaman + sata provinsi
	public function index()
	{
	  $data['prov'] = $this->wilayah->getProv();
		$this->load->view('wilayah',$data);
	}
	
	// return data kabupaten
	public function getKab()
	{
	  $id = $this->input->post('id');
	  $data = $this->wilayah->getKab($id);
	  $result = '<option value="">--- KABUPATEN ---</option>';
	  foreach ($data as $row)
	  {
	    $result .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
	  }
	  $this->output->set_content_type('application/json')->set_output(json_encode($result));
	 }
	 
	 
	 
	 // return data kecamatan
	 public function getKec()
	{
	  $id = $this->input->post('id');
	  $data = $this->wilayah->getKec($id);
	  $result = '<option value=""> --- KECAMATAN --- </option>';
	  foreach ($data as $row)
	  {
	    $result .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
	  }
	  $this->output->set_content_type('application/json')->set_output(json_encode($result));
	 }
	 
	 
	 
	 // return data desa
	 public function getDesa()
	{
	  $id = $this->input->post('id');
	  $data = $this->wilayah->getDesa($id);
	  $result = '<option value=""> --- DESA --- </option>';
	  foreach ($data as $row)
	  {
	    $result .= '<option value="'.$row->id.'">'.$row->nama.'</option>';
	  }
	  $this->output->set_content_type('application/json')->set_output(json_encode($result));
	 }
	 
	 
	 
}
