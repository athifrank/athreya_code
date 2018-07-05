<?php
//require_once('action/jcode.php');
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Admin</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>
<body>


<!----- Header_2 ends ----->

<div id="content" class="wrapper">
	<!----- Content -left begins ----->
	<div class="text" align="center">
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<div style="margin:0 auto; width:500px; border:#cccccc 1px solid; padding:20px;" class="text">
			Your Session has Expired. Please click <a href="<?=site_url();?>admin" style="color:#85da05;">here</a> to login again.
		</div>
	</div>
	<!----- Content -left ends ----->
</div>
<!----- Content ends ----->

<?php $this->load->view('admin/pages/footer.php')?>


</body>
</html>
