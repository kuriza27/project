<?php include_once 'header.php'; ?>
<?php include_once 'queryDB.php'; ?>
<div id="main-content" class="row homecontent">
<div class="container">
	<div class="half_bg" style="width: 60%; margin: 1% 0px 1% 1%;">
			<h1>Dual Layer Wristband</h1>
			<!----<p class="prodcode">Product Code: <b>RB-DL12</b> (1/2 Inch) | <b>RB-DL1</b> (1 Inch)</p>--->
			<p>This Wristband type is one of the most flashy type of wristband. We engrave the inner part of the wristbands with the same color of the bands and we oil spray the outer part of the wristbands with your desired color. Due to the oil spray, the wristband will have a glossy texture. You can also choose the message part of the wristband as a separate color from the inside part and the outer part of the wristband. You can customized this type with whatever design and color you desire.</p>
			<div class="popup-gallery">
				<div class="col-md-8">
				<a href="assets/images/src/Dual-Layer.png" title="Dual Layer"><img src="assets/images/src/Dual-Layer.png" class="galleryimg" ></a>
				</div>
			</div>
				<div class="clearfix"  style="margin-bottom:20px;"></div>
			<div class="col-md-10">
				<div class="size_options">
				<table class="table" border="0" cellpadding="0" cellspacing="0" width="100%">
				   <tr>
				   <td>
						<tr>
							<th>Quantity</th>
							<th>1/4 Inch</th>
							<th>1/2 Inch</th>
							<th>3/4 Inch</th>
							<th>1 Inch</th>
							<th>1.5 Inch</th>
							<th>2 Inch</th>
						</tr>
						
					</td>
					</tr>
					<tr>
					<td>
						
						   <?php
								$size = 1;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo "<p>".$row["qty"]. "</p>";
											}
								} else {
									echo "0 results";
								}

								?> 
						</td>
						<td>
						
						   <?php
								$size = 1;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}

								?> 
						</td>
						<td>
						
						   <?php
								$size = 2;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}
								
								?> 
						</td>
						<td>
						
						   <?php
								$size = 3;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}
								
								?> 
						</td>
						<td>
						
						   <?php
								$size = 4;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}
								
								?> 
						</td>
						<td>
						
						   <?php
								$size = 5;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}
								
								?> 
						</td>
						<td>
						
						   <?php
								$size = 6;
								$style = 19;
								$sql = getWristbandPrice($style,$size);
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
									
										echo  "<p>".$row["price"]. "</p>";
											}
								} else {
									echo "0 results";
								}
								
								?> 
						</td>
						</tr>
						
					</tr>
			</table>	
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
		<?php include "sidebar.php"; ?>
			<div class="clearfix"></div>
	</div><!-----End Container---->
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