<?php
/*     require_once('action/jcode.php');
     $run->admin_login_check(); */
defined('BASEPATH') OR exit('No direct script access allowed');
if (!(isset($_SESSION['admin']) && $_SESSION['admin'] != ''))
{
	redirect('admin/page_expired');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Gallery</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Create Folder for Image</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>


		<div class="panel panel-info">
			<div class="panel panel-heading" style="text-align: center">
				Create Folder <a class="btn btn-default" href="<?=site_url()?>admin_gallery/image" style="float: right;margin-top: -8px;">Back</a>
			</div>
			<div class="panel panel-body" style="text-align: center">

                <?php echo $this->session->flashdata('one');?>


				<form action="<?=site_url()?>admin_gallery/folder_action" method="post" enctype="multipart/form-data" class="form-inline" style="">
					<table  border="0" cellspacing="0" cellpadding="5">
						<div class=" ">
							<label>Enter Folder Name</label>
							<input type="text" class="form-control" style="width: 20% !important;margin-left: 15px;" name="foldername" required/>
						</div><br>
						<div class=" ">
							<label>Upload Folder Image</label>
							<input type="file" class="form-control" style="width: 20% !important;" name="file" required/>
						</div><br>
						<div style="    margin-left: 30px;">
							<input type="hidden" value="image" name="cat">
							<input class="btn btn-success" type="submit" name="fileSubmit" value="SUBMIT"/>
						</div>

					</table>
				</form>
			</div>
		</div>

		<?php echo $this->session->flashdata('edit');?>
		<?php echo $this->session->flashdata('del');?>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						List of Images
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
							<tr>
								<th>S.NO</th>
								<th style="text-align: center">Name</th>
								<th>Image</th>
								<th>No of Images</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</thead>
							<tbody>
							<?php

							$no =$query->num_rows();
							if(empty ($no))
							{
								echo '<tr><td>Folders not available for listing</td>';
							}
							$sno = 1;
							$ro=$query->result_array();
							foreach($ro as $row)
							{
								$cat=$row['cat'];
								$id=$row['id'];
								$first_name=$row['folder_name'];
								$folder_image=$row['folder_image'];
								$sql="select * from gallery WHERE gid=$id";
								$co=$this->db->query($sql);
								$cou=$co->result_array();
                                if(count($cou)) {
									echo '<tr>
                                      <td>' . $sno . '</td>
                                      <td style="text-align: center">' . $first_name . '</td>
									  <td style=" "><img src=' . base_url() . '/' . $folder_image . ' height="50" width="50"/></td>
									  <td style=" " id=' . $id . ' class="status" ><span class="btn btn-success btn-sm">' . count($cou) . ' Images</span></td>
									   <td style=""> <a href="' . site_url() . 'admin_gallery/edit_folder/' . $id . '/' . $cat . '"  class="btn btn-warning btn-sm" >Edit</a></td>
                                      <td style=""> <a  data-href="' . site_url() . 'admin_gallery/del_folder/' . $id . '/' . $cat . '" class="btn btn-danger btn-sm" data-toggle="modal"  data-target="#confirm-delete" ><span data-toggle="tooltip "  data-placement="right" data-original-title="This folder contains  '. count($cou) .'  Images">Delete</span></a></td></tr>';
								}else{
									echo '<tr>
                                      <td>' . $sno . '</td>
                                      <td style="text-align: center">' . $first_name . '</td>
									  <td style=" "><img src=' . base_url() . '/' . $folder_image . ' height="50" width="50"/></td>
									  <td style=" " id=' . $id . ' class="status"><span class="btn btn-warning btn-sm">Empty folder</span></td>
									   <td style=""> <a href="' . site_url() . 'admin_gallery/edit_folder/' . $id . '/' . $cat . '"  class="btn btn-warning btn-sm" >Edit</a></td>
                                      <td style=""> <a  data-href="' . site_url() . 'admin_gallery/del_folder/' . $id . '/' . $cat . '" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete"><span data-toggle="tooltip "  data-placement="right" data-original-title="This folder is empty">Delete</span></a></td></tr>';

								}

								$sno++;
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!--Delete pop up-->

		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="col-sm-10 col-md-12 modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
					</div>

					<div class="modal-body">
						<p>Are you sure You want delete this folder?</p>
					</div>

					<div class="col-sm-12 modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<!--pop over window close-->

	</div>

</div>

<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>

