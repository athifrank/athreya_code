<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_note extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_note_mod');
		$this->load->model('admin_gallery_mod');
	}

	public function index()
	{
		$data['total_note']=$this->admin_note_mod->note();
		$this->load->view('admin/add_note',$data);
	}

	public function upload_note(){
		$data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/upload_note',$data);
	}
	
	public function upload_note_action(){
		$this->admin_note_mod->insert_note();
		$this->session->set_flashdata('one', '<div class="alert alert-success" id="h1" style="text-align: center"> Note uploaded Succedfully</div>');
		 redirect("admin_note/upload_note");
	}
	
	public function manage_note(){
		$data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/manage_note',$data);
	}
	
	public function manage_note1(){
		 $folder=$this->uri->segment(3);
		$select = $this->input->post('select_folder');
		$result1 = $this->db->query("SELECT * from add_note where folder='$select' or folder='$folder'");
		$data['query1']=$result1;
		$data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/manage_note1',$data);
	}
	
	public function manage_note_edit($id){
		 $data['query']=$this->admin_note_mod->managa_note_edit($id);
       $this->load->view('admin/manage_note_edit',$data);
	}
	
	public function manage_note_edit_action(){
		$folder=$this->input->post('folder');
		$id=$this->input->post('id');
		$descrip=$this->input->post('desc');
			$sql="update add_note set description='$descrip' WHERE id='$id'";
			$query=$this->db->query($sql);
			$this->session->set_flashdata('one','<div class="alert alert-success" id="h1" style="text-align: center">Note update Succedfully</div>');
			redirect("admin_note/manage_note1/$folder");
		

	}
	
	public function manage_note_del($id,$folder){

	    $this->db->query("delete from add_note where id=$id");
		$this->session->set_flashdata('del','<div class="alert alert-danger" id="h1" style="text-align: center"> Note deleted  Succedfully</div>');
		redirect("admin_note/manage_note1/$folder");
		//header("location:manage_file.php?a=k10");
	}
	



}
?>
