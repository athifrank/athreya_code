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

	<title>Mangae Note Edit</title>

	<?php $this->load->view('admin/pages/header.php')?>
    <script type="text/javascript" src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>
	<script src="<?=base_url();?>assets/ckeditor/_samplessample.js" type="text/javascript"></script>
	<link href="<?=base_url();?>assets/ckeditor/_samplessample.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Notes</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>

		<!-- edit Image folder-->
		<div class="row">
			<div class="modal-dialog modal-sm">
				<div class="col-sm-10 col-md-12 modal-content" style=" margin-left: -146px; width:220% !important; text-align: center">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Edit</h4>
					</div>

					<div class="modal-body">
                  <form action="<?=site_url()?>admin_note/manage_note_edit_action" method="post" enctype="multipart/form-data" class="form-inline" style="">
						<table class="table table-bordered" style="width: auto">
							<thead>
							<tr>
								<td class="th" width="150">Description</td>
							</tr>
							</thead>
							<tbody>
							<?php
							$no=$query->result_array();
							foreach ($no as $row){
								$id=$row['id'];
								$folder=$row['folder'];
								$description=$row['description'];
								//$img=$row['img'];
								//$update_date=$row['update_date'];
							}
							?>
							<tr>
								<td class="td" width="auto">
								<div class="form-group" >
									 <label for="exampleFormControlTextarea1"></label>
									 <textarea  class="ckeditor" cols="80" name="desc" id="exampleFormControlTextarea1" rows="10">
									 <?php echo strip_tags($description); ?>
									 </textarea>
								</div>
								</td>
							</tr>
							</tbody>
						</table>

							<table  border="0" cellspacing="0" cellpadding="5">
					
								<div >
									<input type="hidden" name="id" value="<?php echo $id; ?>"/>
									<input type="hidden" name="folder" value="<?php echo $folder; ?>"/>
									<input class="btn btn-success" type="submit" name="fileSubmit" value="Update"/>
									<a href="<?=site_url()?>admin_note/manage_note1/<?php echo $folder; ?>" class="btn btn-default" >Cancel</a>
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

