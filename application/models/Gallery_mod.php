<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_mod extends CI_model {

	public function image()
	{
		$sql="SELECT * FROM folder WHERE cat='image'";
		$query=$this->db->query($sql);
		return $query;

	}
	
		public function image_view($id){
		$sql="SELECT * FROM gallery WHERE gid =$id";
		$query=$this->db->query($sql);
		//$row=$query->result_array();
		return $query;
	}

		public function get_note($id){
		$sql="SELECT * from add_note where gid=$id";
		$query=$this->db->query($sql);
		return $query;
	}

}
?>
