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
<?php $this->load->view('pages/fancy')?>

<style>
#nav li a {
    padding: 10px 24px;
}

.fancybox-title.fancybox-title-inside-wrap {
			text-align: center;
			color: blue;
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
			<h1 class="page-header"><?php
				echo $folder_name;
				?>
				<a href="<?=site_url()?>galleries/gallery_image" style="float: right;   margin-top: -19px;"><button class="btn btn-info">Back to Gallery</button></a>
			</h1>
		</div>
	</div>



	<?php
	$countRows = $query->num_rows();
	if (empty($countRows)){
		echo '<span><img src="'.base_url().'assets/img/Folder.png"><h2 class="alert alert-warning col-sm-4">This folder is Empty.</h2></span>';
	}else
	{
		$row=$query->result_array();
		foreach ($row as $rowimages) {
			$select_folder = $rowimages['select_folder'];
			//$title = $rowimages['title'];
			$folder_image=$rowimages['img'];


			?>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<a href="<?= base_url() ?><?php echo $folder_image; ?>" id="fancybox" rel="group1">
						<img src="<?= base_url() ?><?php echo $folder_image; ?>" width="100%" height="150px">
						</a>
					</div>
				</div>
			</div>
			<?php
		}
	}
	?>
	
	
	<div class="" style="">
		<div class="col-lg-12">
			<h1 class="page-header">
			Notes:
			</h1>
		</div>
		
		<div class="col-lg-12">
				<?php
				$countRows = $note->num_rows();
				if (empty($countRows)){
					echo '<span>Notes are not available...</span>';
				}else
				{
					$row=$note->result_array();
					foreach ($row as $con) {
						$value = $con['description'];
						
						echo $value;
						  
					}
				}
				?>
		</div>
	</div>
	
	
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