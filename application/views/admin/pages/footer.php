<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/vendor/metisMenu/metisMenu.min.js"></script>


<script src="<?=base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script type="text/javascript">
	$('span').tooltip();
</script>
<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true
		});
	});

	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
	});
</script>
<script>
	$(function(){
		$('a.navid').each(function() {
			if ($(this).prop('href') == window.location.href) {
				$(this).addClass('current');
			}
		});
	});
</script>

<style>
	a.current {
		background: #337ab7;
		color: #f0ad4e;
	}

	.red{
		color: red;
	}
	.cc{
		width: 500px;
		margin: 0 auto;
		border: 1px solid olivedrab;
		background: whitesmoke;
		padding: 8px 16px 8px 62px;
	}
</style>

<script type="text/javascript">
	setTimeout(function() {$('#h1').fadeOut('slow');}, 3000);
	setTimeout(function() {$('#h2').fadeOut('slow');}, 3000);
	setTimeout(function() {$('#h3').fadeOut('slow');}, 3000);
	setTimeout(function() {$('#h4').fadeOut('slow');}, 3000);
	setTimeout(function() {$('#h5').fadeOut('slow');}, 6000);
	setTimeout(function() {$('#h6').fadeOut('slow');}, 6000);
	setTimeout(function() {$('#h7').fadeOut('slow');}, 6000);
	setTimeout(function() {$('#h8').fadeOut('slow');}, 3000);

	setTimeout(function() {$('#h9').fadeOut('slow');}, 3000);

	setTimeout(function() {$('#h10').fadeOut('slow');}, 3000);
	setTimeout(function() {$('#h11').fadeOut('slow');}, 3000);

	setTimeout(function() {$('label.error').fadeOut('slow');}, 3000);
</script>

