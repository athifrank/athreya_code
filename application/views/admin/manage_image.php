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
				Manage image <a class="btn btn-default" href="<?=site_url()?>admin_gallery/image" style="float: right;margin-top: -8px;">Back</a>
			</div>
			<div class="panel panel-body" style="text-align: center">

				<?php echo $this->session->flashdata('one');?>


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



	</div>

</div>

<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>

