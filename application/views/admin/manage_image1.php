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

	<title>Gallery/Manage image</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage image</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>


		<div class="panel panel-info">
			<div class="panel panel-heading" style="text-align: center">
				Manage Image <a class="btn btn-default" href="<?=site_url()?>admin_gallery/image" style="float: right;margin-top: -8px;">Back</a>
			</div>
			<div class="panel panel-body" style="text-align: center">

				<?php //echo $this->session->flashdata('one');?>


				<form class="form-inline" action="<?=site_url()?>admin_gallery/manage_image1" enctype="multipart/form-data" method="post">
					<div class="form-group" style=" margin-left: -141px;">
						<label for="selectfolder">Select Folder Name</label>

						<select  id="selectfolder" name="select_folder" class="form-control mx-sm-3" >
							<option selected>Choose the folder name</option>
							<?php
							$no=$query->result_array();
							foreach ($no as $row){
								$foldername=$row['folder_name'];
								?>
								<option value='<?php echo $foldername; ?>'><?php echo $foldername; ?></option>
							<?php }?>
						</select>
					</div><br><br>

					<div class="form-group ">
						<input type="submit" class="btn btn-success mx-sm-3 " value="Submit">
					</div>
				</form>

			</div>
		</div>

		<?php echo $this->session->flashdata('one');?>
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
								<th style="text-align: center">Image</th>
								<th>Folder name</th>
								<th>Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$no =$query1->num_rows();
							if(empty ($no))
							{
								echo '<tr><td>Folders not available for listing</td>';
							}
							$sno = 1;
							$ro=$query1->result_array();
							foreach($ro as $row)
							{
								$id=$row['id'];
								$img=$row['img'];
								$select_folder=$row['select_folder'];
								//$title=$row['title'];
								$update_date=$row['update_date'];


								echo '<tr>
                                      <td>'.$sno.'</td>                                   
									  <td style=" "><img src='.base_url().'/'.$img.' height="50" width="50"/></td>
									  <td style="text-align: center">'.$select_folder.'</td>
									  <td style="text-align: center">'.$update_date.'</td>
									   <td style=""> <a href="'.site_url().'admin_gallery/manage_image_edit/'.$id.'"  class="btn btn-warning btn-sm" >Edit</a></td>
                                      <td style=""> <a  data-href="'.site_url().'admin_gallery/manage_image_del/'.$id.'/'.$select_folder.'" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#confirm-delete">Delete</a></td></tr>';
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
						<p>Are you sure You want delete this Image?</p>
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

