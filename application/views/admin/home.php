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

	<title>Home</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-file fa-5x"></i>
							</div>
							<div class="col-xs-6 text-center">
								<div><h1>Total Files</h1></div>
								<div class="huge"><?php echo $total;?></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-file-image-o fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div>Total Images</div>
								<div class="huge"><?php echo $gallery;?></div>
							</div>
						</div>
					</div>
					<a href="<?=site_url()?>admin_gallery/image">
						<div class="panel-footer">
							<span class="pull-left">Upload Images</span>
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
								<i class="fa fa-file-video-o fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div>Total Videos</div>
								<div class="huge"><?php echo $video;?></div>
							</div>
						</div>
					</div>
					<a href="<?=site_url()?>admin_gallery/video">
						<div class="panel-footer">
							<span class="pull-left">Upload Videos</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>

		</div>


	</div>

</div>

<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>

