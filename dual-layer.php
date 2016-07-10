<?php include_once 'header.php'; ?>
<div id="main-page-content">
	<div class="container">
		  <!-- Example row of columns -->
		<div id="banner-pricing">
			<!-- PRINTED -->
			<table class="table-area-printed-half uk-table uk-table-bordered js-pricing-table" data-pricing-tbl="" style="display:none;">
				<caption class="uk-margin-bottom js-wb-caption">Pricing for <span class="style">Printed</span> wristbands (<span class="size">1/2</span>&quot;) as of July, 2016</caption>
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
		<div class="wrist-style">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">1</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Style </div>
					<div class="clearfix"></div>
			</div>
			<div class="wrist_style_container">
				<div class="col-md-4 prod js-style"  value="printed">
				  <div class="box-thumb"><img src="assets/images/src/Printed.png"></div>
				  <input type="radio" name="wrist_style" id="printed" class="wrist_style" value="printed" data-style="imprinted">
				  <h2>Printed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="debossed">
				  <div class="box-thumb"><img src="assets/images/src/Debossed.png"></div>
				  <input type="radio" name="wrist_style" id="debossed" class="wrist_style" value="debossed" data-style="debossed">
				  <h2>Debossed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="ink-injected">
				  <div class="box-thumb"><img src="assets/images/src/Color-Filled.png"></div>
				  <input type="radio" name="wrist_style" id="ink-injected" class="wrist_style" value="ink-injected" data-style="color-filled">
				  <h2>Ink Injected</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="embossed">
				  <div class="box-thumb"><img src="assets/images/src/Embossed.png"></div>
				  <input type="radio" name="wrist_style" id="embossed" class="wrist_style" value="embossed" data-style="embossed">
				  <h2>Embossed</h2>
				</div>
				<div class="col-md-4 prod js-style"  value="dual-layer">
				  <div class="box-thumb"><img src="assets/images/src/Dual-Layer.png"></div>
				  <input type="radio" name="wrist_style" id="dual-layer" class="wrist_style" value="dual-layer" data-style="dual-layer"  checked="checked">
				  <h2>Dual layer</h2>
				</div>
				<div class="col-md-4 prod js-style" value="embossed-printed">
				  <div class="box-thumb"><img src="assets/images/src/Embossed-Printed.png"></div>
				   <input type="radio" name="wrist_style" id="embossed-printed" class="wrist_style" value="embossed-printed" data-style="embossed-printed">
				  <h2>Embossed Printed</h2>
				</div>
				<div class="col-md-4 prod js-style" value="figured">
				  <div class="box-thumb"><img src="assets/images/src/Figured.png"></div>
				   <input type="radio" name="wrist_style" id="figured" class="wrist_style" value="figured" data-style="figured">
				  <h2>Figured</h2>
				</div>
				<div class="col-md-4 prod js-style" value="blank-style">
				  <div class="box-thumb"><img src="assets/images/src/Blank.png"></div>
				   <input type="radio" name="wrist_style" id="blank-style" class="wrist_style" value="blank-style" data-style="blank">
				  <h2>Blank</h2>
				</div>
			</div>
				<div class="clearfix"></div>
				<input type="hidden" name="style_info" class="style_info">
		</div>
		<!-- END WRIST STYLE -->
			<div class="clearfix"></div>
		
<?php include_once 'custom_template.php';?>

<?php include_once 'footer.php'; ?>
