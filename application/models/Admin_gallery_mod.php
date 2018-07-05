<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_gallery_mod extends CI_model
{


	public function create_folder(){
		$sql="SELECT * FROM folder WHERE cat='image' ORDER BY id DESC ";
		$query=$this->db->query($sql);
		//$row=$query->result_array();
		return $query;
	}

	public function create_folder1(){
		$sql="SELECT * FROM folder WHERE cat='video' ORDER BY id DESC ";
		$query=$this->db->query($sql);
		//$row=$query->result_array();
		return $query;
	}

	public function edit_folder($id){
		$sql="SELECT * from folder where id=$id and cat='image'";
		$query=$this->db->query($sql);
		return $query;
	}

	public function edit_folder1($id){
		$sql="SELECT * from folder where id=$id and cat='video'";
		$query=$this->db->query($sql);
		return $query;
	}


	public function managa_image_edit($id){
		$sql="SELECT * from gallery where id=$id";
		$query=$this->db->query($sql);
		return $query;
	}

	public function managa_video_edit($id){
		$sql="SELECT * from gallery_video where id=$id";
		$query=$this->db->query($sql);
		return $query;
	}



}

?>
