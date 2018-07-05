
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-slidify.js"></script>
<script src="<?=base_url();?>assets/js/jq.js"></script>


<script type="text/javascript" src="<?=base_url();?>assets/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?=base_url();?>assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<script type="text/javascript" src="<?=base_url();?>assets/fancybox/video/mediaelement-and-player.min.js"></script>
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="<?=base_url();?>assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?=base_url();?>assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="<?=base_url();?>assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<script>
	$(document).ready(function() {
		$("a#fancybox").fancybox({
			padding: 0,

			openEffect : 'elastic',
			openSpeed  : 1000,

			closeEffect : 'elastic',
			closeSpeed  : 150,

			closeClick : true,
			helpers : {
				title : {
					type : 'inside'
				},
				overlay : {
					css : {
						'background' : 'rgba(238,238,238,0.85)'
					}
				},
				thumbs : {
					width  : 50,
					height : 50
				},
				buttons	: {}
			},
			/* afterLoad: function(){
				this.title = this.title + ' ' + $(this.element).find('img').attr('alt');
			} */
		});
	});

</script>



