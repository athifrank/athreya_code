<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_note_mod extends CI_model
{

	public function note()
	{
		$sql="SELECT * FROM add_note";
		$query=$this->db->query($sql);
		$row=$query->num_rows();
		return $row;
	}

	public function insert_note(){
		$select_folder=$this->input->post('select_folder');
		$desc=$this->input->post('desc');
	    $result = $this->db->query("SELECT * from folder where folder_name='$select_folder' ");
				 $ro = $result->result_array();
				 foreach ($ro as $row) {
					 $gid = $row['id'];
				 }
		$sql="INSERT INTO `add_note` (`id`, `folder`, `description`, `gid`) VALUES (NULL, '$select_folder', '$desc', '$gid');";
		
		$query=$this->db->query($sql);
		//$row=$query->result_array();
		return $query;
	}
	
	public function managa_note_edit($id){
		$sql="SELECT * from add_note where id=$id";
		$query=$this->db->query($sql);
		return $query;
	}





}

?>
