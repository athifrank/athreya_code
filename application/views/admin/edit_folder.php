<?php
/*     require_once('action/jcode.php');
     $run->admin_login_check(); */
defined('BASEPATH') OR exit('No direct script access allowed');
if (!(isset($_SESSION['admin']) && $_SESSION['admin'] != ''))
{
	$this->load->view('admin/page_expired');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Edit</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Folder for image</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>

		<!-- edit Image folder-->
           <div class="row">
			<div class="modal-dialog modal-sm">
				<div class="col-sm-10 col-md-12 modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Edit</h4>
					</div>

					<div class="modal-body">
						<table class="table table-bordered" style="width: auto">
							<thead>
							<tr>
								<td class="th" width="300">Image</td>
								<td class="th" width="150">Folder Name</td>
							</tr>
							</thead>
						<tbody>
						   <?php
						   $no=$query->result_array();
						   foreach ($no as $row){
						   	   $id=$row['id'];
							   $folder_name=$row['folder_name'];
							   $folder_image=$row['folder_image'];
						   }
						   	?>
							<tr>
								<td class="td" width="300"><img src="<?=base_url();?><?php echo $folder_image ?>" width="100" height="75" /></td>
								<td class="td" width="150"><?php echo $folder_name ?></td>
							</tr>
						</tbody>
						</table>

						<form action="<?=site_url()?>admin_gallery/edit_action" method="post" enctype="multipart/form-data" class="form-inline" style="">
							<table  border="0" cellspacing="0" cellpadding="5">
								<div class=" ">
									<label>Enter Folder Name</label>
									<input type="text" class="form-control" name="foldername" value="<?php echo $folder_name ?>" required/>
								</div><br>
								<div class=" ">

									<label>Upload Folder Image </label>
									<input type="file" class="form-control"  style="width:83%;" name="file" value="<?=base_url();?><?php echo $folder_image ?>" required />
								</div><br>
								<div >
									<input type="hidden" name="id" value="<?php echo $id; ?>"/>
									<input type="hidden" name="cat" value="image"/>
									<input class="btn btn-success" type="submit" name="fileSubmit" value="Update"/>
									<a href="<?=site_url()?>admin_gallery/create_folder1" class="btn btn-default" >Cancel</a>
								</div>
							</table>
						</form>
					</div>

				</div>
			</div>
		   </div>

	</div>

</div>

<?php $this->load->view('admin/pages/footer.php')?>


</body>

</html>

