<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!(isset($_SESSION['admin']) && $_SESSION['admin'] != '')){
	echo '';
}
else {
	$this->load->view('admin/home');
}
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Admin</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="red" id="h1"><?php echo $this->session->flashdata('all'); ?></div>
				<div class="red" id="h2"><?php echo $this->session->flashdata('invalid'); ?></div>
				<div class="panel-heading">
					<h3 class="panel-title">Log In</h3>
				</div>
				<div class="panel-body">
					<form action="<?=site_url();?>admin/login_admin" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="user" type="text" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>
