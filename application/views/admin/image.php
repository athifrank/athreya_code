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

	<title>Gallery/Images</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Image Upload</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>


			<div class="panel panel-info">
				<div class="panel panel-heading" style="text-align: center">
					Upload Image <a class="btn btn-default" href="<?=site_url()?>admin_gallery" style="float: right;margin-top: -8px;">Back</a>
				</div>
				<div class="panel panel-body">

					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-folder fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div>Total Folders</div>
										<div class="huge"><?php echo $folder_image;?></div>
									</div>
								</div>
							</div>
							<a href="<?=site_url();?>admin_gallery/create_folder" >
								<div class="panel-footer" >
									<span class="pull-left">Create folder</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>


					<div class="col-lg-3 col-md-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-picture-o fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div>Total Images</div>
										<div class="huge"><?php echo $total_image;?></div>
									</div>
								</div>
							</div>
							<a href="<?=site_url();?>admin_gallery/upload_image" >
								<div class="panel-footer" >
									<span class="pull-left">Upload Images</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>


					<div class="col-lg-3 col-md-6">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-wrench fa-5x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div>Total Images</div>
										<div class="huge"><?php echo $total_image;?></div>
									</div>
								</div>
							</div>
							<a href="<?=site_url();?>admin_gallery/manage_image" >
								<div class="panel-footer" >
									<span class="pull-left">Manage Images</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div>


				</div>
			</div>





	</div>

</div>

<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>

