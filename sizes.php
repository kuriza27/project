<?php include_once 'header.php'; ?>
<div id="main-content" class="row homecontent">
  <div class="container">
	<h1>Sizes</h1>
	<div class="sizes-content">
			<ul>
				<li>
						<img height="350" src="assets/images/src/sizes/1-1-2InchWristband.png" class="galleryimg">
				</li>
				<li>
						<img height="350" src="assets/images/src/sizes/1-4-Inch-Wristband.png" class="galleryimg">
				
				</li>
				<li>
						<img height="350" src="assets/images/src/sizes/1-Inch-Wristband.png" class="galleryimg">
					
				</li>
				<li>
						<img height="350" src="assets/images/src/sizes/1-2-Inch-Wristband.png" class="galleryimg">
					
				</li>
				<li>
						<img height="350" src="assets/images/src/sizes/2-Inch-Wristband.png" class="galleryimg">
					
				</li>
				<li>
						<img height="350" src="assets/images/src/sizes/3-4-Inch-Wristband.png" class="galleryimg">
					
				</li>
			</ul>
			<div class="clearfix"></div>
	 </div>	
   </div>
</div>
<script language="javascript"><!-- 
	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small></small>';
				}
			}
		});
	});
	// -->
	</script>
<?php include_once 'footer.php'; ?>