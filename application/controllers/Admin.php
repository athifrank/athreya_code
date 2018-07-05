<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_mod');
		$this->load->model('admin_home_mod');
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function login_admin()
	{


		 $use1=$this->input->post('user');
		 $pas1=$this->input->post('pass');
		$pas2=sha1($pas1);

		if(empty($use1) || empty($pas1))
		{
			$this->session->set_flashdata('all','All the fields are required');
			redirect("admin/index");
		}
		else
		{

			$row=$this->admin_mod->login();
			foreach($row as $data){
				$use=$data['use'];
				$pas=$data['pass'];
				$name=$data['name'];
			}
			if($use==$use1 && $pas==$pas2)
			{
				$_SESSION['admin'] = "1";
				$_SESSION['name'] = $name;

				
				$data['gallery']=$this->admin_home_mod->gallery();
				$data['video']=$this->admin_home_mod->gallery_video();
				$data['total']=$data['gallery']+$data['video'];

				$this->load->view('admin/home',$data);
				//header ("Location: ../home1.php");
			}
			else
			{
				$this->session->set_flashdata('invalid','Invalid Username and Password');
				redirect("admin/index");
				//header('location: ../index1.php?a=i85');
			}
		}
	}

	public function logout(){
		$this->load->view('admin/logout');
	}
}
?>
