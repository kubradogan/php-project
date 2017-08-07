<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Database_Model');

		
	}
	
	public function index()
	{
		$query=$this->db->query("select * from kullanicilar order by Id");
		$data["veriler"]=$query->result();
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanicilar_listesi');
		$this->load->view('admin/_footer');
		
	}
	public function ekle()
	{
		
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanici_ekle');
		$this->load->view('admin/_footer');
		
		
	}
	public function kaydet()
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
			'durum' => $this->input->post('durum'),
			'yetki' => $this->input->post('yetki')

		);
	$this->Database_Model->veri_ekle("kullanicilar",$data);
	redirect(base_url."admin/kullanicilar");
			
	}
	public function duzenle()
	{
		echo "Düzenleme Sayfası <br>";
		echo "Düzenlecek Id";
		
	}
	public function sil()
	{
		echo "Düzenleme Sayfası <br>";
		echo "Düzenlecek Id";
		
	}


}
