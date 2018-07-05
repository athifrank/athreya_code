<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Athreya Hospital</title>

	<meta name="Description" content="Athreya Hospital"/>	
	<link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/images/favicon.ico" />
	
	<link href="<?=base_url();?>assets/css/screen.css" rel="stylesheet" media="screen" type="text/css" />
	
	<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet" type="text/css" />	

	<link href="<?=base_url();?>assets/themes/js-image-slider.css" rel="stylesheet" type="text/css" />

	<script src="<?=base_url();?>assets/themes/js-image-slider.js" type="text/javascript"></script>
		

	 <link href="<?=base_url();?>assets/css/all.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url();?>assets/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url();?>assets/css/ie6.css" rel="stylesheet" type="text/css" media="all" />
    
    <script type="text/javascript" src="<?=base_url();?>assets/js/1.3.2-jquery.min.js"></script> 
	
    <script src="<?=base_url();?>assets/js/site.js" type="text/javascript"></script>

<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script> 
<script src="<?=base_url();?>assets/js/jquery.BubblePopup-1.1.min.js" type="text/javascript"></script> 
<script type="text/javascript">

$(document).ready(function() {

	/* 
	------------------------------------------------------------------------------------------------------------------------------------
	Tutorial #1: How to create a simple Bubble Popup!
	------------------------------------------------------------------------------------------------------------------------------------*/
	
	// The following code creates a simple Bubble Popup opening when mouse is over on the element with ID '#dummy1'.
	$('#dummy1').SetBubblePopup({
									innerHtml: '<p>Number 6/2B, Opposite Suryanagara,<br />Anekal Main Road, Chandapura, <br />Bengaluru 560081. <br /></p>'
								});

	
	
	// The following code creates a simple Bubble Popup opening when mouse is over on the element with ID '#dummy1'.
	$('#dummy_map').SetBubblePopup({
									innerHtml: ' <iframe width="325" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?q=12.794518,77.706829&amp;num=1&amp;t=h&amp;ie=UTF8&amp;z=14&amp;ll=12.794518,77.706829&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?q=12.794518,77.706829&num=1&t=h&z=19" target="_blank" >Map</a></small>'
								});

	
	// The following code creates a simple Bubble Popup opening when mouse is over on the element with ID '#dummy1'.
	$('#dummy_phone').SetBubblePopup({
									innerHtml: '<p>Board: 080-27838383, 27832783<br />Mobile:  9379262265.</p>'
								});

	
	});
	



</script>
<style type="text/css">
div.example {
	width:100%;
	height:50px;
	padding: 5px;
	border:#FDD7E4 1px dotted;
	display:block;
	float:none;
	clear:both;
}
div.example div {
	width:200px; height:30px; margin:5px; padding:5px; background-color:#FDD7E4; border:#ccc 1px solid;
	color:#000; font-family:'Trebuchet MS', Arial; font-size: 14px; text-align:center; cursor:pointer; margin-left:70px;
	float:left; display:block;
}
div.example a, div.example span {
	float:left; display:block; margin:10px;
}
pre {
	padding:5px; margin:5px;
	background-color:#FDD7E4;
	border:#CCCCCC 1px dashed;
}	
</style>
	
	
</head>


<body>

    <div id="wrapper">
        
	<?php $this->load->view('pages/header')?>
		
	<!-- .........................................  MEnu Sliders ............................................ -->		
        <?php $this->load->view('pages/menu')?>
		
		<!-- .........................................  BRAND CANVAS SLIDER ............................................ -->

	

			<div id="sliderFrame">
			
				<div id="slider">    
				
				
					<img src="<?=base_url();?>assets/images/s1.JPG" alt="" />
					
					<img src="<?=base_url();?>assets/images/s2.JPG" alt="" />
					
				    <img src="<?=base_url();?>assets/images/s3.JPG" alt="" />	
					
					<img src="<?=base_url();?>assets/images/s4.jpg" alt="" />
					
					<img src="<?=base_url();?>assets/images/s5.JPG" alt="" />
					
				</div>        
				
			</div>

			
			<!-- .........................................  BRAND CANVAS INTERIOR  ............................................ -->

	<div class="brandCanvas interior" >
	
		<div class="interArea interCnv1">
		
			<div class="interTxt"><h2 style="color:#fff;">&#xFEFF;&#xFEFF;&#xFEFF;Welcome to Athreya Hospital</h2></div>

		</div>
		
	</div>

    <!-- /brandCanvas -->	
			
	    
<!-- .........................................  MAIN CONTENT   ............................................ -->

	<div id="mainContent" class="contentWrapper">
	
        <div class="contentMid">
		
			<div class="colMod4Grid clearfix">
			
                <table id="ctl00_panelMainContent" cellpadding="0" cellspacing="0" border="0" width="100%">
				
				<tr>
				
				<td>
				
					<div class="cont3Col">
					
					<p>Athreya Hospital is truly a class leading specialty hospital primarily focused on providing the full range of women and child care facilities, catering to people from all sections of the society. In an ever burgeoning urban environment, the most essential healthcare for women and children are taking a back seat. Blame it partly on the ‘lack of time’, inaccessibility of existing healthcare facilities and lack of single facility offering all services related to women and children, such neglect is to the ultimate detriment of the society.  </p>
					<p> At Athreya Hospital, it is our endeavor to serve the people the best by being closest to them. We are located Opposite to Suryanagara phase-1 on Anekal main road, Chandapura which is conveniently accessible by all people from Electronic City to Attibele and surrounding areas. Our maternal and child health set-up is fully geared to cater to all kinds of primary, secondary and tertiary healthcare needs of women and children. Led by a team of experienced pediatricians and gynecologists, Athreya Hospital has round the clock emergencies with fully equipped neonatal intensive care units. In addition, Athreya Hospital also offers specialty care in other disciplines such as general surgery, orthopedics, general medicine, gastroenterology, Dermatology, ENT, Ophthalmology, Radiology and cardiology all provided by a team of experienced and committed doctors. </p>
					<p>In a time when world class healthcare is slowly getting beyond the reach of many, we at Athreya Hospital have been conscious of this fact and have tried to structure our facility in a way that it can be accessed and affordable by people from all walks of the society. With a 60 bedded uniquely designed ultra-modern facility boasting of a multitude of class leading diagnostic and therapeutic set-up, we offer the same world class healthcare with ward options to people of all strata of the society. From our innovative and class leading general wards to ultra-deluxe suites, we make world class healthcare within reach of everyone. </p>
					<p>It is also our constant endeavor to take world-class modern and holistic medicine to masses and yet retaining the essential element of human compassion in our practice. At Athreya Hospital, we ensure our patients and their loved ones the best of the facilities & care in a modern healthcare setting. We take pride in the fact that the hospital has been conceived and built ground-up by a team of experienced pediatrician, gynecologist and a spiritual master Sri Sri Sri Gurudutta Maharaj, founder of the Sahaja Yoga Foundation.</p>
					<p>In addition to our modern clinical practice, we at Athreya Hospital believe that most of modern day ailments are a result of poorly adjusted life-style and stress,and therefore preventable. Health issues such as allergies, respiratory, skin &metabolic disorders, anxiety and mental stress, etc, are poignant examples of the role that lifestyle plays. We strongly believe that the remedy for most of these health issues lies in our traditional Indian practice of yoga. </p>
					<p>Yoga as a means to healthy living and cure for many psychosomatic disorders is proven in most scientific literature and has also been embraced by many developed countries. Through a combination of yogic practices, periodic yoga camps, health education and nurturing a spirit of universal brotherhood, Athreya Hospital strives to accomplish holistic healthcare. Spearheading the education of yoga is the renowned practitioner, proponent and yoga master, Sri Sri Sri Gurudutta Guruji. Guruji has been imparting yoga and positive living courses to thousands of disciples over the past 30 years in various parts of India.With an accomplished yoga master, it is our dream to promote universal brotherhood and a healthy society through the practice of yoga. This effort makes us closer to the needs and realities of our patients as humans.  At Athreya Hospital, we derive our biggest strength from the traditions of excellence and caring not only for our patients but also for their beloved ones.</p>
					<p>We hope that we will able to help you reach the right medical specialist. For more details, click the “Facilities” and “Specialities” Tabs.</p>

					</div><!-- /cont3Col -->

				<!--	<div class="spotLightCol">

						
						<div class="spotlight"><div class="spotTxt" style="border:#000 dotted 1px;"><h3><a href="/images/camp pamphlet.jpg">Dear friends, arrangements for free mega camp on this Sunday on 14th December 2014 is on full swing. “All are welcome to this mega camp” &nbsp;<img src="images/icons/inst/ico_arrw_big.gif" width="5" height="9" alt="" /></a></h3></div></div><!--googleon: all-->
						
						<!--<div class="spotlight"><div class="spotTxt"><h3><a href="#">Hospiatal Buildings &amp; Directions <img src="assets/images/icons/inst/ico_arrw_big.gif" width="5" height="9" alt="" /></a></h3><p><p>Find a building on Athreya Hospiatal, as well as information about nearby parking and public transportation. <br /></p></p></div></div><!--googleon: all-->


					</div><!-- /spotLightCol -->

				</td>
				
				</tr>
				
				</table>
				
          
			<!-- /colMod4Grid --></div><!-- /contentMid -->	
           <!--<div class="map">
            
	<span class="map_btn"><a href="contact_us.html" >Location</a></span>
    <span class="map_btn"> <a href="https://maps.google.co.in/maps?q=12.794518,77.706829&num=1&t=h&z=19" target="_blank" >Map</a></span>
    <span class="map_btn"><a href="contact_us.html"> Phone numbers</a></span>
    </div>-->
	

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td>
		
		<div class="example">
			<div id="dummy1">Location</div>
			<div id="dummy_map">Map</div> 
			<div id="dummy_phone">Phone Numbers</div>
			
		</div>
		
	</td>
  </tr>


</table>
	
      </div>
        </div>
	
<!-- .............................................  FOOTER  ................................................ -->

    <div class="footer">
         


		<div class="innerW"><span  style="margin-left:0px; padding-left: 0px;"><h3>&copy; 2014 Athreya Hospital</h3></span><br/>
        
        </div>

	</div><!-- /footer -->
	
	
</div>
</body>

</html>