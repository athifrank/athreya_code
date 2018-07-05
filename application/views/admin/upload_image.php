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

	<title>Gallery/Upload image</title>

	<?php $this->load->view('admin/pages/header.php')?>

</head>

<body>

<div id="wrapper">

	<?php $this->load->view('admin/pages/nav.php')?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Upload Image</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>


		<div class="panel panel-info">
			<div class="panel panel-heading" style="text-align: center">
				Upload Image <a class="btn btn-default" href="<?=site_url()?>admin_gallery/image" style="float: right;margin-top: -8px;">Back</a>
			</div>
			<div class="panel panel-body" style="text-align: center">

				<?php echo $this->session->flashdata('one');?>


				<form class="form-inline" id="imageForm" action="<?=site_url()?>admin_gallery/upload_image_action" enctype="multipart/form-data" method="post">
					
					<div class="form-group" style=" margin-left: -80px;" >
						<label for="selectfolder">Select Folder Name</label>

						<select  id="selectfolder" name="select_folder" class="form-control mx-sm-3 " >
							<option value="">Choose the folder name</option>
							<?php
                               $no=$query->result_array();
                               foreach ($no as $row){
                               	$foldername=$row['folder_name'];
							?>
							<option value='<?php echo $foldername; ?>'><?php echo $foldername; ?></option>
						  <?php }?>
						</select>
						<div id="msg"></div>
					</div><br><br>
			
					<div class="form-group" >
						<label for="filename1">Filename</label>
						<input type="file" id="filename1" name="file[]" class="form-control mx-sm-3" required accept="image/*">
					</div><br><br>

				
					<div class="form-group" >
						<label for="filename2">Filename</label>
						<input type="file" id="filename2" name="file[]" class="form-control mx-sm-3" accept="image/*">
					</div>
					<br><br>
					
					
					<div class="form-group" id="addr4">
						
					</div>
					<br><br>
                  
				     <div id="dum"></div>
					 
				    <div id="addMore">
					<div class="form-group ">
						<input type="submit" class="btn btn-success mx-sm-3 " id="submit" value="Submit">
					</div>
					<a id="add_row" class="btn btn-warning">Add more</a>
					</div>
          			
				</form>
			</div>
		</div>



	</div>

</div>
<script>
     $(document).ready(function(){
      var i=4;
     $("#add_row").click(function(){
		 console.log('athi')
      $('#addr'+i).html("<label for='filename"+(i-1)+"'>Filename</label><input type='file' id='filename"+(i-1)+"' name='file[]' class='form-control mx-sm-3' accept='image/*'>");
      $('#dum').append("<div class='form-group' id='addr"+(i+1)+"'></div><br><br>");
      i++; 
  });
 $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
<?php $this->load->view('admin/pages/footer.php')?>

</body>

</html>

