<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galleries extends CI_Controller {
	
		public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('gallery_mod');
	}

	public function index()
	{
		$this->load->view('gallery');
	}
	
	public function gallery_image()
	{
		$data['query']=$this->gallery_mod->image();
		$this->load->view('gallery_image',$data);
	}
	
		public function gallery_image_view(){
		$id=$this->uri->segment(3);
		$folder_name=$this->uri->segment(4);
		$data['folder_name']=$folder_name;
		$data['query']=$this->gallery_mod->image_view($id);
		//print_r($data);
		$this->load->view('gallery_image_view',$data);
	}
}
