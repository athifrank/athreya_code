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

	<title>Mangae video Edit</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit video Title</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>

		<!-- edit Image folder-->
		<div class="row">
			<div class="modal-dialog modal-sm">
				<div class="col-sm-10 col-md-12 modal-content" style="    width: 178% !important; text-align: center;margin-left: -60px;">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Edit</h4>
					</div>

					<div class="modal-body">
						<table class="table table-bordered" style="width: auto">
							<thead>
							<tr>
								<td class="th" width="300">Video</td>
								<td class="th" width="150">Folder Name</td>
								<td class="th" width="150">Title</td>
								<td class="th" width="150">Date</td>
							</tr>
							</thead>
							<tbody>
							<?php
							$no=$query->result_array();
							foreach ($no as $row){
								$id=$row['id'];
								$title=$row['title'];
								$select_folder=$row['select_folder'];
								$video=$row['video'];
								$update_date=$row['update_date'];
							}
							?>
							<tr>
								<td class="td" width="300"><video height="50" width="70" autoplay/>
									<source src="<?=base_url()?>/<?php echo $video; ?>" type="video/mp4">
									<source src="<?=base_url()?>/<?php echo $video; ?>" type="video/avi">
									<source src="<?=base_url()?>/<?php echo $video; ?>" type="video/3gp">
									</video></td>
								<td class="td" width="150"><?php echo $select_folder ?></td>
								<td class="td" width="150"><?php echo $title ?></td>
								<td class="td" width="150"><?php echo $update_date ?></td>
							</tr>
							</tbody>
						</table>

						<form action="<?=site_url()?>admin_gallery/manage_video_edit_action" method="post" enctype="multipart/form-data" class="form-inline" style="">
							<table  border="0" cellspacing="0" cellpadding="5">
								<div class=" ">
									<label>Edit title</label>
									<input type="text" class="form-control" name="title" value="<?php echo $title ?>" required/>
								</div><br>
								<div >
									<input type="hidden" name="id" value="<?php echo $id; ?>"/>
									<input type="hidden" name="folder" value="<?php echo $select_folder; ?>"/>
									<input class="btn btn-success" type="submit" name="fileSubmit" value="Update"/>
									<a href="<?=site_url()?>admin_gallery/manage_video1/<?php echo $select_folder ?>" class="btn btn-default" >Cancel</a>
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

