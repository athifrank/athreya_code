<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_gallery extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_gallery_mod');
		$this->load->model('admin_home_mod');
	}

	public function index()
	{
		$data['total_video']=$this->admin_home_mod->gallery_video();
		$data['total_image']=$this->admin_home_mod->gallery();
		$this->load->view('admin/gallery',$data);
	}

	public function image(){
		$data['total_image']=$this->admin_home_mod->gallery();
		$data['folder_image']=$this->admin_home_mod->folder_image();
		$this->load->view('admin/image',$data);
	}
	public function video(){
		$data['total_video']=$this->admin_home_mod->gallery_video();
		$data['folder_video']=$this->admin_home_mod->folder_video();
		$this->load->view('admin/video',$data);
	}

	public function create_folder(){
	    $data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/create_folder',$data);
	}

	public function create_folder1(){
		$data['query']=$this->admin_gallery_mod->create_folder1();
		//print_r($data);
		$this->load->view('admin/create_folder1',$data);
	}

	public function edit_folder(){
		$id=$this->uri->segment(3);
		$data['query']=$this->admin_gallery_mod->edit_folder($id);
		$this->load->view('admin/edit_folder',$data);
	}
	public function edit_folder1(){
		$id=$this->uri->segment(3);
		$data['query']=$this->admin_gallery_mod->edit_folder1($id);
		$this->load->view('admin/edit_folder1',$data);
	}

	public function edit_action(){
		$id=$this->input->post('id');
		$cat=$this->input->post('cat');

		if($cat=='image')$cat1='gallery/images/';
		if($cat=='video')$cat1='gallery/videos/';

		if($cat=='image')$cat12='admin_gallery/create_folder';
		if($cat=='video')$cat12='admin_gallery/create_folder1';

		$foldername = $this->input->post('foldername');
		mkdir ("$cat1$foldername", 0700);

		$select_folder1="$cat1".$this->input->post('foldername')."/";

		$allowedExts = array("jpg", "jpeg", "gif", "png");
		$ex=explode(".", $_FILES["file"]["name"]);
		$extension = end($ex);
		if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/png")
				|| ($_FILES["file"]["type"] == "image/pjpeg"))
			&& ($_FILES["file"]["size"] < 90000000)
			&& in_array($extension, $allowedExts))
		{
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{


				if (file_exists("$select_folder1/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],
						$select_folder1 . $_FILES["file"]["name"]);
					// echo "Stored in: " . "$select_folder1" . $_FILES["file"]["name"];
				}
			}


			$img=$select_folder1. $_FILES["file"]["name"];
			$result = $this->db->query("update folder set folder_name='$foldername',folder_image='$img' where id='$id'");
			$result1 = $this->db->query("update gallery set select_folder='$foldername' where id='$id'");
			$this->session->set_flashdata('edit','<div class="alert alert-success" id="h1" style="text-align: center">Folder Edited Succedfully</div>');
			redirect($cat12);
			//header("location:create_folder.php?a=k11");
			//echo 'success';
		}


		else
		{
			echo "Invalid file";
		}
	}

	public function del_folder(){
        $id=$this->uri->segment(3);
		$cat=$this->uri->segment(4);
		if($cat=='image')$cat1='gallery/images/';
		if($cat=='video')$cat1='gallery/videos/';

		if($cat=='image')$cat12='admin_gallery/create_folder';
		if($cat=='video')$cat12='admin_gallery/create_folder1';

		$result3 = $this->db->query("SELECT * from folder where id=$id and cat='$cat'");
		$ro=$result3->result_array();
		foreach($ro as $row)
		{
			$foldername=$row['folder_name'];
		}
		$result = $this->db->query("delete from folder where id=$id and cat='$cat'");
		$result1 = $this->db->query("delete from gallery where gid=$id");

		$dir = $cat1.$foldername.'/';
		foreach(glob($dir.'*.*') as $v){
			unlink($v);
		}
		$dir1 = $cat1.$foldername.'/';
		rmdir($dir1);

		$this->session->set_flashdata('del','<div class="alert alert-danger" id="h3" style="text-align: center">One folder deleted</div>');

		redirect($cat12);



	}




	public function folder_action(){
        $cat=$this->input->post('cat');
		$foldername1 =$this->input->post('foldername');
		$foldername = str_replace(" ", "", $foldername1);
		if($cat=='image')$cat1='gallery/images/';
		if($cat=='video')$cat1='gallery/videos/';


		if($cat=='image')$cat12='admin_gallery/create_folder';
		if($cat=='video')$cat12='admin_gallery/create_folder1';

		mkdir ("$cat1$foldername/");
		chmod("$cat1$foldername/",0755);
		$select_folder1="$cat1".$foldername."/";

		$allowedExts = array("jpg","JPG", "jpeg", "gif", "png");
		$ex=explode(".", $_FILES["file"]["name"]);
		$extension = end($ex);
		if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/png")
				|| ($_FILES["file"]["type"] == "image/pjpeg"))
			&& ($_FILES["file"]["size"] < 90000000)
			&& in_array($extension, $allowedExts))
		{
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{


				if (file_exists("$select_folder1/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],
						$select_folder1 . $_FILES["file"]["name"]);
					// echo "Stored in: " . "$select_folder1" . $_FILES["file"]["name"];
				}
			}

			$img=$select_folder1. $_FILES["file"]["name"];
			$result = $this->db->query("INSERT INTO folder(folder_name,folder_image,cat) values ('$foldername','$img','$cat')");
			$this->session->set_flashdata('one','<div class="alert alert-success" id="h1" style="text-align: center"> Folder Created Succedfully</div>');
			redirect($cat12);
			//header("location:create_folder.php?a=k10");
		}
		else
		{
			echo "Invalid file";
		}

	}


	//Upload Images

	public function upload_image(){
		$data['query']=$this->admin_gallery_mod->create_folder();
		//print_r($data);
		$this->load->view('admin/upload_image',$data);
	}

	public function upload_image_action()
	{

		 $select_folder1 = "gallery/images/" . $this->input->post('select_folder') . "/";
		$select_folder = $this->input->post('select_folder');

		$co = count($_FILES['file']['name']);
     if(empty($select_folder)){
		 $this->session->set_flashdata('one', '<div class="alert alert-danger"  style="text-align: center"> please select folder name</div>');
		 redirect("admin_gallery/upload_image");
	 }else {
		 for ($i = 0; $i < $co; $i++) {

			 $allowedExts = array("jpg", "JPG", "jpeg", "gif", "png");
			 $ex = explode(".", $_FILES["file"]["name"][$i]);
			 $extension = end($ex);
			 $date = date('d-m-Y');
			 //$tit = $this->input->post('title');
			 //$title = $tit[$i];

			 $ext = substr($_FILES['file']['name'][$i], strpos($_FILES['file']['name'][$i], '.'), strlen($_FILES['file']['name'][$i]) - 1);
			 $sa_file = substr(basename($_FILES['file']['name'][$i]), 0, strpos($_FILES['file']['name'][$i], '.'));
			 $str_file = str_replace(' ', '', $sa_file);
			 $filename = $str_file . rand() . $ext;
			 if ((($_FILES["file"]["type"][$i] == "image/gif")
					 || ($_FILES["file"]["type"][$i] == "image/jpeg")
					 || ($_FILES["file"]["type"][$i] == "image/png")
					 || ($_FILES["file"]["type"][$i] == "image/pjpeg"))
				 && ($_FILES["file"]["size"][$i] < 90000000)
				 && in_array($extension, $allowedExts)
			 ) {
				 if ($_FILES["file"]["error"][$i] > 0) {
					 echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br />";
				 } else {


					 if (file_exists("$select_folder1/" . $filename)) {
						 echo $_FILES["file"]["name"][$i] . " already exists. ";
					 } else {

						 move_uploaded_file($_FILES["file"]["tmp_name"][$i],
							 $select_folder1 . $filename);
						 // echo "Stored in: " . "$select_folder1" . $_FILES["file"]["name"];
					 }
				 }

				 $result = $this->db->query("SELECT * from folder where folder_name='$select_folder' ");
				 $ro = $result->result_array();
				 foreach ($ro as $row) {
					 $gid = $row['id'];
				 }
				 $img = $select_folder1 . $filename;
				 $result = $this->db->query("INSERT INTO gallery(`update_date`,`img`,`select_folder`,`gid`) values ('$date','$img','$select_folder','$gid')");

			 } else {
				 echo "Invalid file";
			 }

		 }


		 $this->session->set_flashdata('one', '<div class="alert alert-success" id="h1" style="text-align: center"> Image uploaded Succedfully</div>');
		 redirect("admin_gallery/upload_image");
	 }
	}


	//manage Images

	public function manage_image(){
		$data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/manage_image',$data);
	}

	public function manage_image1(){

        $folder=$this->uri->segment(3);
		$select = $this->input->post('select_folder');
		$result = $this->db->query("SELECT id from folder where cat='image' AND  folder_name='$select' or folder_name='$folder'");
		$ro=$result->result_array();
		foreach($ro as $row)
		{
			$gid=$row['id'];
		}
		$result1 = $this->db->query("SELECT * from gallery where gid='$gid' ORDER BY id DESC");
		$data['query1']=$result1;
		$data['query']=$this->admin_gallery_mod->create_folder();
		$this->load->view('admin/manage_image1',$data);
	}

	public function manage_image_edit($id){
       $data['query']=$this->admin_gallery_mod->managa_image_edit($id);
       $this->load->view('admin/manage_image_edit',$data);
	}

	public function manage_image_edit_action(){
		$folder=$this->input->post('folder');
		$id=$this->input->post('id');
		$title=$this->input->post('title');
		if(empty($title) && $title==''){
			echo 'Empty field';
		}else{
			$sql="update gallery set title='$title' WHERE id='$id'";
			$query=$this->db->query($sql);
			$this->session->set_flashdata('one','<div class="alert alert-success" id="h1" style="text-align: center"> Image Title update Succedfully</div>');
			redirect("admin_gallery/manage_image1/$folder");
		}

	}

	public function manage_image_del($id,$folder){

		$result = $this->db->query("SELECT * from gallery where id=$id");
		$ro=$result->result_array();
		foreach($ro as $row)
		{
			$img=$row['img'];
		}
		$result = $this->db->query("delete from gallery where id=$id");
		unlink($img);
		$this->session->set_flashdata('del','<div class="alert alert-danger" id="h1" style="text-align: center"> Image deleted  Succedfully</div>');
		redirect("admin_gallery/manage_image1/$folder");
		//header("location:manage_file.php?a=k10");
	}


	//upload video
	public function upload_video(){
		$data['query']=$this->admin_gallery_mod->create_folder1();
		$this->load->view('admin/upload_video',$data);
	}

	public function upload_video_action(){

		$select_folder1="gallery/videos/".$this->input->post('select_folder')."/";
		 $select_folder=$this->input->post('select_folder');
		$title=$this->input->post('title');
        $date=date('d-m-Y');

		$allowedExts = array("mp4", "3gp", "avi");
		$ex = explode(".", $_FILES["file"]["name"]);
		$extension = end($ex);
		$ext = substr($_FILES['file']['name'], strpos($_FILES['file']['name'], '.'), strlen($_FILES['file']['name']) - 1);
		$sa_file = substr(basename($_FILES['file']['name']), 0, strpos($_FILES['file']['name'], '.'));
		$str_file = str_replace(' ', '', $sa_file);
		$filename = $str_file . rand() . $ext;
		if ((($_FILES["file"]["type"] == "video/mp4")
				|| ($_FILES["file"]["type"] == "video/3gp")
				|| ($_FILES["file"]["type"] == "video/avi"))
			&& ($_FILES["file"]["size"] < 1000000000000000)
			&& in_array($extension, $allowedExts)
		) {
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			} else {


				if (file_exists("$select_folder1/" . $filename)) {
					echo $_FILES["file"]["name"] . " already exists. ";
				} else {

					move_uploaded_file($_FILES["file"]["tmp_name"],
						$select_folder1 . $filename);
					// echo "Stored in: " . "$select_folder1" . $_FILES["file"]["name"];
				}
			}

			$result = $this->db->query("SELECT * from folder where folder_name='$select_folder' ");
			$ro = $result->result_array();
			foreach ($ro as $row) {
				$gid = $row['id'];
			}
			$video = $select_folder1 . $filename;
			if (empty($select_folder)){
				$this->session->set_flashdata('one', '<div class="alert alert-danger" id="h1" style="text-align: center">please select the folder name</div>');
				redirect("admin_gallery/upload_video");
			}else {
				$result = $this->db->query("INSERT INTO gallery_video(`title`,`update_date`,`video`,`select_folder`,`gid`) values ('$title','$date','$video','$select_folder','$gid')");
				$this->session->set_flashdata('one', '<div class="alert alert-success" id="h1" style="text-align: center"> video uploaded  Succedfully</div>');
				redirect("admin_gallery/upload_video");
			}
		} else {
			echo "Invalid file";
		}


	}

	public function manage_video(){
		$data['query']=$this->admin_gallery_mod->create_folder1();
		$this->load->view('admin/manage_video',$data);
	}

	public function manage_video1(){
		$folder=$this->uri->segment(3);
		$select = $this->input->post('select_folder');
		$result = $this->db->query("SELECT id from folder where cat='video' AND  folder_name='$select' or folder_name='$folder'");
		$ro=$result->result_array();
		foreach($ro as $row)
		{
			$gid=$row['id'];
		}
		$result1 = $this->db->query("SELECT * from gallery_video where gid='$gid' ORDER BY id DESC ");
		$data['query1']=$result1;
		$data['query']=$this->admin_gallery_mod->create_folder1();
		$this->load->view('admin/manage_video1',$data);
	}


	public function manage_video_edit($id){
		$data['query']=$this->admin_gallery_mod->managa_video_edit($id);
		$this->load->view('admin/manage_video_edit',$data);
	}

	public function manage_video_edit_action(){
		$folder=$this->input->post('folder');
		$id=$this->input->post('id');
		$title=$this->input->post('title');
		if(empty($title) && $title==''){
			echo 'Empty field';
		}else{
			$sql="update gallery_video set title='$title' WHERE id='$id'";
			$query=$this->db->query($sql);
			$this->session->set_flashdata('one','<div class="alert alert-success" id="h1" style="text-align: center"> Video Title update Succedfully</div>');
			redirect("admin_gallery/manage_video1/$folder");
		}

	}

	public function manage_video_del($id,$folder){

		$result = $this->db->query("SELECT * from gallery_video where id=$id");
		$ro=$result->result_array();
		foreach($ro as $row)
		{
			$video=$row['video'];
		}
		$result = $this->db->query("delete from gallery_video where id=$id");
		unlink($video);
		$this->session->set_flashdata('del','<div class="alert alert-danger" id="h1" style="text-align: center"> Video deleted  Succedfully</div>');
		redirect("admin_gallery/manage_video1/$folder");
		//header("location:manage_file.php?a=k10");
	}

}
?>
