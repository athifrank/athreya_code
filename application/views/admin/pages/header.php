<link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">
<link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/css/admin_style.css" rel="stylesheet" type="text/css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
	var lastDiv = "";
	function showDiv(divName) {
		if (lastDiv) {
			document.getElementById(lastDiv).className = "hiddenDiv";
		}

		if (divName && document.getElementById(divName)) {
			document.getElementById(divName).className = "visibleDiv";
			lastDiv = divName;
		}
	}
</script>

