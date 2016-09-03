<?php include_once 'header.php'; ?>
<?php include_once 'queryDB.php'; ?>
<?php

	// SQL query
	$sql = getPriceJSON();
	$result = $conn->query($sql);

	// Variables needed
	$count_style = 0;
	$data = $style = $style_array = [];

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$style[strtolower($row['style_code'])][$row['size_code']][$row['qty']] = $row['price'];
		}
		$data = $style;
	}

	// Get wristband style
	$qstyle = strtolower((isset($_GET['q'])&&!empty($_GET['q'])) ? $_GET['q'] : "printed");
	// Double check if existing
	if(!isset($data[$qstyle])) { $qstyle = "printed"; }

?>

<script>
	var price_json = '<?php echo(json_encode($data)); ?>';
</script>

<div id="main-page-content">
	<div class="container">

		<!-- Example row of columns -->
		<div id="banner-pricing">

			<!-- PRINTED -->
			<table class="table-area-printed-half uk-table uk-table-bordered js-pricing-table" data-pricing-tbl="" style="display:none;">
				<caption class="uk-margin-bottom js-wb-caption">Pricing for <span class="style">Printed</span> wristbands (&quot;<span class="size">1/2</span>&quot;) as of July, 2016</caption>
				<thead>
					<tr>
					<th data-uk-tooltip="{pos:'top'}" title="Quantity" class="uk-text-primary">Qty</th>
					<th data-uk-tooltip="{pos:'top'}" title="20 to 49">20</th>
					<th data-uk-tooltip="{pos:'top'}" title="50 to 99">50</th>
					<th data-uk-tooltip="{pos:'top'}" title="100 to 199">100</th>
					<th data-uk-tooltip="{pos:'top'}" title="200 to 299">200</th>
					<th data-uk-tooltip="{pos:'top'}" title="300 to 499">300</th>
					<th data-uk-tooltip="{pos:'top'}" title="500 to 999">500</th>
					<th data-uk-tooltip="{pos:'top'}" title="1000 to 1999">1,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="2000 to 2999">2,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="3000 to 4999">3,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="5000 to 9999">5,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="10000 to 19999">10,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="20000 to 49999">20,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="50000 to 99999">50,000</th>
					<th data-uk-tooltip="{pos:'top'}" title="100000 to 199999">100,000</th>
					</tr>
				</thead>
				<tbody>
					<tr id="priceTable">
						<td class="uk-text-primary">Price</td>
					</tr>
				</tbody>
			</table>
			<!-- END BLANK STYLE -->
		</div>
		<!-- WRIST STYLE -->

		<!---<form id="order-form" action="" method="post" novalidate enctype="multipart/form-data">---->
		<div class="wrist-style">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">1</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Style </div>
				<div class="clearfix"></div>
			</div>
			<div class="wrist_style_container">
				<div class="popup-order-gallery">
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='printed')?'active':''); ?>"  value="printed">
						<div class="zoom"><a href="assets/images/src/Printed.png" title="Printed Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Printed.png"></div>
						<input type="radio" name="wrist_style" id="printed" class="wrist_style" value="printed" data-style="printed" <?php echo(($qstyle==="printed")?'checked="checked"':''); ?> >
						<h2>Printed</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='debossed')?'active':''); ?>"  value="debossed">
						<div class="zoom"><a href="assets/images/src/Debossed.png" title="Debossed Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Debossed.png"></div>
						<input type="radio" name="wrist_style" id="debossed" class="wrist_style" value="debossed" data-style="debossed" <?php echo(($qstyle==="debossed")?'checked="checked"':''); ?> >
						<h2>Debossed</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='ink-injected')?'active':''); ?>"  value="ink-injected">
						<div class="zoom"><a href="assets/images/src/Color-Filled.png" title="Color-Filled Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Color-Filled.png"></div>
						<input type="radio" name="wrist_style" id="ink-injected" class="wrist_style" value="ink-injected" data-style="ink-injected" <?php echo(($qstyle==="ink-injected")?'checked="checked"':''); ?> >
						<h2>Ink Injected</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='embossed')?'active':''); ?>"  value="embossed">
						<div class="zoom"><a href="assets/images/src/Embossed.png" title="Embossed Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Embossed.png"></div>
						<input type="radio" name="wrist_style" id="embossed" class="wrist_style" value="embossed" data-style="embossed" <?php echo(($qstyle==="embossed")?'checked="checked"':''); ?> >
						<h2>Embossed</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='dual-layer')?'active':''); ?>"  value="dual-layer">
						<div class="zoom"><a href="assets/images/src/Dual-Layer.png" title="Dual-Layer Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Dual-Layer.png"></div>
						<input type="radio" name="wrist_style" id="dual-layer" class="wrist_style" value="dual-layer" data-style="dual-layer" <?php echo(($qstyle==="dual-layer")?'checked="checked"':''); ?> >
						<h2>Dual layer</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='embossed-printed')?'active':''); ?>" value="embossed-printed">
						<div class="zoom"><a href="assets/images/src/Embossed-Printed.png" title="Embossed-Printed Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Embossed-Printed.png"></div>
						<input type="radio" name="wrist_style" id="embossed-printed" class="wrist_style" value="embossed-printed" data-style="embossed-printed" <?php echo(($qstyle==="embossed-printed")?'checked="checked"':''); ?> >
						<h2>Embossed Printed</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='figured')?'active':''); ?>" value="figured">
						<div class="zoom"><a href="assets/images/src/Figured.png" title="Figured Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Figured.png"></div>
						<input type="radio" name="wrist_style" id="figured" class="wrist_style" value="figured" data-style="figured" <?php echo(($qstyle==="figured")?'checked="checked"':''); ?> >
						<h2>Figured</h2>
					</div>
					<div class="col-md-4 prod js-style <?php echo(($qstyle==='blank')?'active':''); ?>" value="blank-style">
						<div class="zoom"><a href="assets/images/src/Blank.png" title="Blank Wristband"><img src="assets/images/src/zoom.png" class="galleryimg"></a></div>
						<div class="box-thumb"><img src="assets/images/src/Blank.png"></div>
						<input type="radio" name="wrist_style" id="blank-style" class="wrist_style" value="blank-style" data-style="blank" <?php echo(($qstyle==="blank")?'checked="checked"':''); ?> >
						<h2>Blank</h2>
					</div>
					<div class="clearfix"></div>
					<input type="hidden" name="style_info" class="style_info">
				</div><!-- end popupgallery -->
			</div>
			<!-- END WRIST STYLE -->
		</div>
		<div class="clearfix"></div>	

<?php include_once 'custom_template.php';?>

<?php include_once 'footer.php'; ?>
