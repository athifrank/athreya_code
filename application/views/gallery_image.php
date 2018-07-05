<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Athreya Hospital</title>

	<meta name="Description" content="Athreya Hospital"/>
	
	
	<link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"  />
    <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<?php $this->load->view('pages/script')?>

<style>
#nav li a {
    padding: 10px 24px;
}
</style>

</head>


<body>

    <div id="wrapper">
        
		<?php $this->load->view('pages/header')?>
		
	<!-- .........................................  MEnu Sliders ............................................ -->		
          <?php $this->load->view('pages/menu')?>
		
		
		
		<!-- .........................................  BRAND CANVAS SLIDER ............................................

	

			<div id="sliderFrame">
			
				<div id="slider">    
				
				
					
					<img src="images/s2.jpg" alt="" />
					
				
					
					<img src="images/s4.jpg" alt="" />
					
					<img src="images/s5.jpg" alt="" />
					
				</div>        
				
			</div>-->


			
			<!-- .........................................  BRAND CANVAS INTERIOR  ............................................ -->

	<div class="brandCanvas interior" style="background:#FDD7E4; margin:0 auto;">
	
		<div class="interArea interCnv2">
		
			<div class="interTxt"><h2>&#xFEFF;&#xFEFF;&#xFEFF;&nbsp;Image gallery</h2></div>

		</div>
		
	</div>

    <!-- /brandCanvas -->	
			
	    
<!-- .........................................  MAIN CONTENT   ............................................ -->
	<div id="mainContent" class="contentWrapper">
	
        <div class="contentMid">			
					

			<div class="tabInfo clearfix">
			
				<div class="rowNoBorder">
				
				
				
		<div class="">
	<div class="row" style="">
		<div class="col-lg-12">
			<h1 class="page-header">Image Gallery
				<a href="<?=site_url()?>galleries" style="float: right;    margin-top: -19px;"><button class="btn btn-info">Back to Gallery</button></a>
			</h1>
		</div>
	</div>



	<?php
	$countRows = $query->num_rows();
	$i = 0;
	if ($countRows > 0)
	{
	$row=$query->result_array();
	foreach ($row as $rowimages) {
		$foldername = $rowimages['folder_name'];
		$folder_image = $rowimages['folder_image'];


		?>
		<div class="col-lg-3 col-md-6">
		<a href="<?= site_url(); ?>galleries/gallery_image_view/<?php echo $rowimages['id'];?>/<?php echo $rowimages['folder_name'];?>">
			<div class="panel panel-info">
				<div class="panel-heading">
					<img src="<?= base_url() ?><?php echo $folder_image; ?>" width="100%" height="150px">
				</div>
				<a href="<?= site_url(); ?>galleries/gallery_image_view/<?php echo $rowimages['id'];?>/<?php echo $rowimages['folder_name'];?>">
					<div class="panel-footer">
						<span class="pull-left"><?php echo $foldername; ?> </span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
			</a>
		</div>
		<?php
	      }
	     }
      ?>



</div>
				

				</div><!-- /rowNoBorder -->
			
		     </div><!-- /tabInfo --><!-- /spotLightCol -->

          </div>
      
	    </div><!-- /contentMid -->	
		
<!-- .............................................  FOOTER  ................................................ -->

    <div class="footer">
         


		<div class="innerW"><span  style="margin-left:0px; padding-left: 0px;"><h3>&copy; 2014 Athreya Hospital</h3></span><br/>
        
        </div>

	</div><!-- /footer -->
	
	
</div>
</body>

</html>