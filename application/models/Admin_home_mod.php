<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home_mod extends CI_model {


	public function gallery()
	{
		$sql="SELECT * FROM gallery";
		$query=$this->db->query($sql);
		$row=$query->num_rows();
		return $row;
	}

	public function gallery_video()
	{
		$sql="SELECT * FROM gallery_video";
		$query=$this->db->query($sql);
		$row=$query->num_rows();
		return $row;
	}

	public function folder_image()
	{
		$sql="SELECT * FROM folder WHERE cat='image'";
		$query=$this->db->query($sql);
		$row=$query->num_rows();
		return $row;
	}

	public function folder_video()
	{
		$sql="SELECT * FROM folder WHERE cat='video'";
		$query=$this->db->query($sql);
		$row=$query->num_rows();
		return $row;
	}


}
?>
