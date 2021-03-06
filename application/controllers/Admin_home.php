<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_home_mod');
		$this->load->model('admin_note_mod');

	}

	public function index()
	{
		$data['note']=$this->admin_note_mod->note();
        $data['gallery']=$this->admin_home_mod->gallery();
        $data['video']=$this->admin_home_mod->gallery_video();
		 $data['total']=$data['gallery']+$data['video'];
		$this->load->view('admin/home',$data);

	}
}
?>
