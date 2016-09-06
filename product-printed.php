<?php include_once 'header.php'; ?>
<?php include_once 'queryDB.php'; ?>
<div id="main-content" class="row homecontent">
<div class="container">
	<div class="half_bg" style="width: 60%; margin: 1% 0px 1% 1%;">
			<h1>Printed Wristband</h1>
			<p class="prodcode">Product Code: <b>RB-IM12</b> (1/2 Inch) | <b>RB-IM1</b> (1 Inch)</p>
			<p>This is the most cost effective way to really show your design and message on the wristbands. Your message will be silk screen printed on wristband via a permanent ink technology machine. . You can select any color that you want for the message and logos that will be printed on the wristbands. </p>
			<div class="popup-gallery">
				<div class="col-md-8">
				<a href="assets/images/src/Printed.png" title="Printed"><img src="assets/images/src/Printed.png" class="galleryimg" ></a>
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
								$style = 1;
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
								$style = 1;
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
								$style = 1;
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
								$style = 1;
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
								$style = 1;
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
								$style = 1;
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
								$style = 1;
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