	<!-- WRIST SIZE -->
	    <!-- <div id="dialog">
			<p>You can choose only one color</p>
		</div> -->
		<div class="wrist-size">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">2</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Size </div>
				<div class="clearfix"></div>
			</div>
			<div class="wsize-default">
				<div class="col-md-4 prod-size js-size" id="quarter" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/1-4.png"></div>
					<input type="radio" name="wrist_size"  class="wrist_size" value="1/4" data-size="1/4">
					<h2>1/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size active"  id="half" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank','dual-layer','figured']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/1-2.png"></div>
					<input type="radio" name="wrist_size" class="wrist_size" value="1/2" data-size="1/2" checked="checked">
					<h2>1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="three" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank','dual-layer','figured']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/3-4.png"></div>
					<input type="radio" name="wrist_size"  class="wrist_size" value="3/4" data-size="3/4">
					<h2>3/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="one" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank','dual-layer']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/1.png"></div>
					<input type="radio" name="wrist_size"  class="wrist_size" value="1" data-size="1">
					<h2>1 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="onehalf" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/11-2.png"></div>
					<input type="radio" name="wrist_size"  class="wrist_size" value="1.5" data-size="1.5">
					<h2>1.5 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="two" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank']))?'block':'none'; ?>">
					<div class="box-thumb"><img src="assets/images/src/sizes/2.png"></div>
					<input type="radio" name="wrist_size" class="wrist_size" value="2" data-size="2">
					<h2>2 Inch</h2>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END WRIST SIZE -->

		<!-- WRIST COLOR -->
		<div class="wrist-color-quantity">
			<div class="wristband-view-color regular-color-size" style="display:<?php echo (in_array($qstyle, ['printed','debossed','ink-injected','embossed','embossed-printed','blank']))?'block':'none'; ?>">
				<?php include "wrist-regularbandcolor.php"; ?>
			</div>
			<div class="wristband-view-color large-color-size" style="display:none">
				<?php include "wrist-largebandcolor.php"; ?>
			</div>
			<div class="wristband-view-color regular-figured-size" style="display:<?php echo (in_array($qstyle, ['figured']))?'block':'none'; ?>">
				<?php include "wrist-regularfigured.php"; ?>
			</div>
			<div class="wristband-view-color large-figured-size" style="display:none">
				<?php include "wrist-largefigured.php"; ?>
			</div>
			<div class="wristband-view-color regular-dual-size" style="display:<?php echo (in_array($qstyle, ['dual-layer']))?'block':'none'; ?>">
				<?php include "wrist-regulardual.php"; ?>
			</div>	
			<div class="wristband-view-color large-dual-size" style="display:none">
				<?php include "wrist-largedual.php"; ?>
			</div>
		</div>
		<!-- End Wrist-color-quantity -->

		<div class="wrist-messsage">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">4</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Enter Message for preview</div>
				<div class="clearfix"></div>
			</div>
			<div class="main-content-preview">
				<div id="text-design">
					<h3>INPUT TEXT DESIGN MESSAGE</h3>
				</div>
				<div class="message-selection">
					<div class="col-sm-3">
						<input class="front-back-select" type="radio" value="front-back-select" name="font-back-select" checked="checked"/>Font/Back Message
					</div>
					<div class="col-sm-3">
						<input class="cont-select" type="radio" value="cont-select" name="cont-select"/>Continuous Message
					</div>
					<div class="clearfix"></div>
				</div>
				<div id="band-text" class="margin-div">
					<div class="f-input">
						<div class="col-sm-5"   style="border-right:2px solid #154360;margin-left:50px;">
							<span>Front Message:</span><br />
							<span class="note-m">* Maximum of 22 characters for both front and back</span>
							<input type="text" name="front-text" class="band-text" value=""  placeholder="Enter Front Message" maxlength="22">
							<div class="clip-sec col-xs-6">
								<button class="fclip-1" data-toggle="modal" data-target="#ClipArtModal" style="margin-left:-14px;">Front Start Clipart</button><br />
								<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-1">or Upload your own art</a>
								<div id="upload-1" class="collapse">
									<label for="file">Choose Photo:</label>
									<input type="file" name="file-1" class="file-1" required><br>
									<a href="javascript:void(0)" id="remove-1">Remove File</a>
								</div>
							</div>
							<div class="clip-sec col-xs-6">
								<button class="fclip-2" data-toggle="modal" data-target="#ClipArtModal">Front End Clipart</button><br />
								<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-2">or Upload your own art</a>
								<div id="upload-2" class="collapse">
									<label for="file">Choose Photo:</label>
									<input type="file" name="file-2" class="file-2" required><br>
									<a href="javascript:void(0)" id="remove-2">Remove File</a>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="clip-sec col-xs-6 figarea" style="display:none;">
								<button class="fclip-3" data-toggle="modal" data-target="#ClipArtModal">Figured Center Clipart</button><br />
								<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-2">or Upload your own art</a>
								<div id="upload-2" class="collapse">
									<label for="file">Choose Photo:</label>
									<input type="file" name="file-2" class="file-2" required><br>
									<a href="javascript:void(0)" id="remove-2">Remove File</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="col-sm-5" style="margin-left:60px;">
							<span>Back Message:</span><br />
							<span class="note-m">* Maximum of 22 characters for both front and back</span>
							<input type="text" name="back-text" class="band-text" value="" placeholder="Enter Back Message" maxlength="22">
							<div class="clip-sec col-xs-6">
								<button class="bclip-1" data-toggle="modal" data-target="#ClipArtModal" style="margin-left:-14px;">Back Start Clipart</button><br />
								<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-3">or Upload your own art</a>
								<div id="upload-3" class="collapse">
									<label for="file">Choose Photo:</label>
									<input type="file" name="file-3" class="file-3" required><br>
									<a href="javascript:void(0)" id="remove-3">Remove File</a>
								</div>
							</div>
							<div class="clip-sec col-xs-6">
								<button class="bclip-2" data-toggle="modal" data-target="#ClipArtModal">Back End Clipart</button><br />
								<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-4">or Upload your own art</a>
								<div id="upload-4" class="collapse">
									<label for="file">Choose Photo:</label>
									<input type="file" name="file-4" class="file-4" required><br>
									<a href="javascript:void(0)" id="remove-4">Remove File</a>
								</div>
								<div></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="c-input" style="display:none;margin-left:52px;">
						<div class="col-sm-8">
						<span class="inside-m">Continuous Text:</span><br /> &nbsp;
						* Maximum of 22 characters for message<br /> 
						<input type="text" name="continue-text" class="band-text" value=""  placeholder="Enter Continuous Message" maxlength="22">
						</div>
						<div class="clearfix"></div>
						<div class="clip-sec" style="float:left;width:20%;margin-left:16px;">
							<button class="cclip-1" data-toggle="modal" data-target="#ClipArtModal">Start Clipart</button><br />
							<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-5">or Upload your own art</a>
							<div id="upload-5" class="collapse">
								<label for="file">Choose Photo:</label>
								<input type="file" name="file-5" class="file-5" required><br>
								<a href="javascript:void(0)" id="remove-5">Remove File</a>
							</div>
						</div>
						<div class="clip-sec" style="float:left;width:20%;">
							<button class="cclip-2" data-toggle="modal" data-target="#ClipArtModal">End Clipart</button><br />
							<a href="javascript:void(0)" data-toggle="collapse" data-target="#upload-6">or Upload your own art</a>
							<div id="upload-6" class="collapse">
								<label for="file">Choose Photo:</label>
								<input type="file" name="file-6" class="file-6" required><br>
								<a href="javascript:void(0)"id="remove-6">Remove File</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="i-input" style=";margin-left:52px;">
						<div class="col-sm-12">
							<br />
							<span class="inside-m">Inside Text:</span><br /> &nbsp;
							* Maximum of 22 characters for message
							<br /> 
							<input type="text" name="inside-text" class="band-text" value=""  placeholder="Enter Inside Message" maxlength="22" style="width:100%;">
							<br /><br />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<!-- Start modal here -->
					<div class="modal fade" id="ClipArtModal" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Pick Clipart</h4>
								</div>
								<div class="modal-body">
									<?php include "clipart-template.php";?>
									<div class="clearfix"></div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!-- End Modal Content -->
						</div>
					</div>
					<div class="clear"></div>
					<!-- End Modal Div -->
				</div>

				<?php include_once 'preview_template.php'; ?>
				<?php include_once 'preview_band_template.php'; ?>

				<h3>PREVIEW</h3>
				<div id="preview-pane" class="preview-panel">
					<div class="fb-select">
						<div id="front-view" class="band">
						<span class="start-fc"></span>
						<span class="end-fc"></span>
						<span class="fig-fc"></span>
							<div class="preview-text faded" id="front-text">
								Front Message
							</div>
						</div>
						<div id="back-view" class="band">
							<span class="back-mc"></span>
							<span class="backend-mc"></span>
							<div class="preview-text faded" id="back-text">
								Back Message
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="c-select" style="display:none;">
						<div id="continue-view" class="band">
							<span class="start-cc"></span>
							<span class="end-cc"></span>
							<div class="preview-text faded" id="continue-text">
								Continuous Message
							</div>
						</div>
					</div>
				</div>
				<div id="preview-pane" class="preview-panel">
					<div class="i-select" style="display:block;">
						<div id="inside-view" class="band">
							<span class="startIn-cc"></span>
							<span class="endIn-cc"></span>
							<div class="preview-text faded" id="inside-text">
								Inside Message
							</div>
						</div>
					</div>
				</div>
					<div class="text-center">
						<div class="click-pre" style="display:none">Click below to preview wristband colors</div>
						<ul id="preview-pane-selection" class="nav nav-pills preview-pane-colors" style="width:100%;">
						</ul>
					</div>
			</div>
			<!-- End preview pane -->
			<div id="font-color" style="display:none;">
				<h3 style="text-align: left;">Select Font Color</h3>
				<button id="font-button" class="pull-left" data-toggle="modal" data-target="#FontColorModal">Select Font Color</button><div id="preview-textcolor"></div>
					<!-- Modal -->
					<div class="modal fade" id="FontColorModal" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Pick Custom Text Color</h4>
							</div>
							<div class="modal-body">
								<?php include "font-color-template.php";?>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- End Modal Content -->
					</div>
				</div>
				<!-- End Modal Div -->
				<div class="clearfix"></div>
			</div>
			<div id="add-design">
				<!--<button>Clear</button>-->
				<h3 style="text-align: left;">Select Font Style</h3>
				<button id="font-button" class="pull-left" data-toggle="modal" data-target="#FontModal">Choose Font Style</button><div id="preview-textfont"></div>
				<div class="modal fade" id="FontModal" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Select Font Style</h4>
							</div>
							<div class="modal-body">
								<?php include "fonts-template.php";?>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- End Modal Content -->
					</div>
				</div>
				<!-- End Modal Div -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END WRISTBAND MESSAGE -->

		<!-- ADD ONS -->
		<div class="product-add-ons">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">5</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">ADD ONS (Optional)</div>
				<div class="clearfix"></div>
			</div>
			<div class="popup-order-gallery">
				<?php include "promo-keychain-10.php"; ?>
			</div>
				
			<!-- Message 100 Free -->
			<div class="col-md-12 message_wristband_100" style="display:none">
				<h3>You have <strong class="js-free-bands-count">100</strong> <strong>FREE</strong> wristbands!</h3>
				<label class="js-free-bands-accept">
				<div class="free-wristbands"><input type="checkbox" name="add-ons-extra" data-code="free-wristbands" class="free-bands"/> <span style="margin-left:10px;">Click to claim free wristbands</span></div></label>
			</div>
			<!-- End message for 100 free -->
			<!-- Box for conversion wristbands -->
			<div  class="col-md-12 free-convert" data-free-entered="0" style="display:none;">
				<h4>
					<label>Free Wristbands Color, Size and Quantity</label>
				</h4>
				<div class="span-text-con1">
					<div> Your free wristbands should be of the same color and size from your selections above. Please choose which color and size you want to receive, and specify the quantity below.</div>            
				</div>
				<div class="area-conversion">
					<!-- <table class="fwb-title">
						<tr>
							<th>Style</th>
							<th>Color</th>
							<th>Size</th>
						</tr>
					</table> -->
					<div class="row">
						<div class="fwb-text col-md-6 col-sm-12 text-center">
							<div class="col-xs-4"><h4>STYLE</h4></div>
							<div class="col-xs-4"><h4>COLOR</h4></div>
							<div class="col-xs-4"><h4>SIZE</h4></div>
						</div>
					</div>
					<ul class="area-conversion-list">
					</ul>
						<div class="clearfix"></div>
				</div>
				<div class="js-free-bands" style="display:none">
					<div style="color:#00C273;text-align:center;">
						<div>Free wristband quantities have been saved.</div>
					</div>
				</div>
				<div class="submit">
					<button class="done-button-fwb btn-lg" type="button">
						Done
					</button>
				</div>
			</div>
			<!-- End conversion wristbands -->
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/3mm-thick.png" title="3mm thick option"><img src="assets/images/src/add-ons/3mm-thick.png" class="galleryimg"></a></div>
				<div class="icon-img"><img src="assets/images/src/icon.png"/> <div class="icon-text" style="width:150px;">Available for 1/2 and 3/4 inch wristbands only.</div></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="3mm-thick"/>
					<h2>3mm Thick Option</h2>
				</div>
			</div>
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/Digital-Proof.png" title="Digital Proof"><img src="assets/images/src/add-ons/Digital-Proof.png" class="galleryimg"></a></div>
				<div class="icon-img"><img src="assets/images/src/icon.png"/> <div class="icon-text" style="width:150px;">We'll send you a proof for approval before production begins.</div></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="digital-proof"/>
					<h2>Digital Proof</h2>
				</div>
			</div>
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/ecofriendly.png" title="Eco Friendly"><img src="assets/images/src/add-ons/ecofriendly.png" class="galleryimg"></a></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="eco-friendly"/>
					<h2>Eco Friendly</h2>
				</div>
			</div>
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/Glitters.png" title="Glitters"><img src="assets/images/src/add-ons/Glitters.png" class="galleryimg"></a></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="glitters"/>
					<h2>Glitters</h2>
				</div>
			</div>
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/Individual-pack.png" title="Individual pack"><img src="assets/images/src/add-ons/Individual-pack.png" class="galleryimg"></a></div>
				<div class="icon-img"><img src="assets/images/src/icon.png"/> <div class="icon-text" style="width:200px;">Professionally sealed on biodegradable bags with clear back to see product inside.</div></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="individual"/>
					<h2>Individually Pack</h2>
				</div>
			</div>
			<div class="col-md-4 add-ons">
				<div class="box-thumb"><a href="assets/images/src/add-ons/KeyChain.png" title="KeyChain"><img src="assets/images/src/add-ons/KeyChain.png" class="galleryimg"></a></div>
				<div class="icon-img"><img src="assets/images/src/icon.png"/> <div class="icon-text" style="width:132px;"> Available for 1/2 inch wristbands only.</div></div>
				<div class="add-ons-radio">
					<input type="checkbox" name="add-ons-extra" class="add-ons" data-code="key-chain"/>
					<h2>Keychain</h2>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<!-- TOTAL -->
		<div class="clearfix"></div>
		<div class="total-area">
			<div class="js-total" style="display:none;">
				<div class="prod-ship col-md-4" style="display:none;">
					<h5>Production Time</h5>
					<select name="ProductionTime" id="ProductionTime" class="uk-form-large uk-width-1-1 js-production-options js-time-options" data-title="Production" required="" data-validation-error="Please select production time." data-validation-slide-pos="production-shipping">
					</select>
					<div style="padding-top:10px;"></div>
					<h5>Shipping Time</h5>
					<select name="Delivery" id="ShippingTime" class="uk-form-large uk-width-1-1 js-shipping-options js-time-options" data-title="Shipping" required="" data-validation-error="Please select shipping time." data-validation-slide-pos="production-shipping">
					</select>
				</div>
				<div class="col-md-6" id="summary-order">
					<div id="order-summary">
						<h3>Order Summary</h3>
						<div class="summary-table">
							<div class="row">
								<div class="col-md-12">
									<p><strong>
										Style: <u><span id="wristband_style"></span></u> <br>
										Size: <u><span id="wristband_size"></span></u> <br><br>
										Add-Ons Total: <u><span id="wristband_add_ons" data-addon-total="0">$0.00</span></u><br><br>
										<!-- Free Add-Ons Total: <u><span id="wristband_free_add_ons" data-addon-total="0">$0.00</span></u><br><br> -->
										Production Time: <u><span id="wristband_ptime" data-production-time="0" data-production-price="0">$0.00</span></u><br>
										Shipping Time: <u><span id="wristband_stime" data-shipping-time="0" data-shipping-price="0">$0.00</span></u>
									</strong></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-6"><strong>Colors</strong></div>
								<div class="col-md-4 col-sm-6 align-right"><strong>Subtotal</strong></div>
							</div>
							<div class="summary-list-item js-item-summary">
							</div>
							<div class="row total-summary-free" style="display:none;">
								<br/>
								<div class="col-md-8 col-sm-6"><strong>Free</strong></div>
								<div class="col-md-4 col-sm-6 align-right"><strong></strong></div>
								<div class="col-md-4 col-sm-6 align-right"><strong></strong></div>
							</div>
							<div class="row total-summary-after" style="display:none;"></div>
							<div class="summary-list-item js-free-summary total-summary-free" style="display:none;">
							</div>
						</div>
					</div>
					<hr>
					<h1 class="align-right">Total: <span id= "totalPrice" data-total="0">$ 0.00</span></h1>
				</div>
				<div class="col-md-12">
					<div class="button-cart">
						<button type="submit">Add to Cart</button>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="js-no-total">
				<h1>Minimum order should be at least <u>20 pieces.</u></h1>
			</div>
		</div>
		<!-- End TOTAL -->

	</div>
</div>
<!--</form> -->

<div id="solidCustomColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="solidPreviewColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" class="custom-color-solid-button" data-toggle="modal" data-target="#ColorModal">Custom Color</button>
		<!-- Modal -->
		<div class="modal fade" class="ColorModal" id="ColorModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pick Custom Color</h4>
					</div>
					<div class="modal-body">
						<?php include "solid-color-dynamic-template.php";?>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- End Modal Content -->
			</div>
		</div>
		<!-- End Modal Div -->
		<div class="clearfix"></div>
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
		<div class="color-text" style="display:none">
			<div class="col-sm-1">
				<?php include "colorAdult-template.php";?>
			</div>
			<div class="col-sm-1">
				<?php include "colorMedium-template.php";?>
			</div>
			<div class="col-sm-1">
				<?php include "colorYouth-template.php";?>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="segmentedCustomColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="segmentedPreviewColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" class="custom-color-segmented-button" data-toggle="modal" data-target="#ColorSegModal">Custom Color</button>
		<!-- Modal -->
		<div class="modal fade" id="ColorSegModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Pick Custom Color</h4>
						</div>
						<div class="modal-body">
							<?php include "segmented-color-dynamic-template.php";?>
							<div class="clearfix"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- End Modal Content -->
				</div>
			</div>
			<!-- End Modal Div -->
		<div class="clearfix"></div>
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
			<div class="color-text" style="display:none">
				<div class="col-sm-1">
					<?php include "colorAdult-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorMedium-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorYouth-template.php";?>
				</div>
					<div class="clearfix"></div>
			</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="swirlCustomColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="swirlPreviewColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" data-toggle="modal" data-target="#ColorSwirlModal">Custom Color</button>
		<!-- Modal -->
		<div class="modal fade" id="ColorSwirlModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pick Custom Color</h4>
					</div>
					<div class="modal-body">
						<?php include "swirl-color-dynamic-template.php";?>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- End Modal Content -->
			</div>
		</div>
		<!-- End Modal Div -->
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
			<div class="color-text" style="display:none">
				<div class="col-sm-1">
					<?php include "colorAdult-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorMedium-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorYouth-template.php";?>
				</div>
					<div class="clearfix"></div>
			</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content" style="display:none">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="dualCustomColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="dualPreviewColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" data-toggle="modal" data-target="#ColorDualModal">Custom Color</button>
		<div class="modal fade" id="ColorDualModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pick Custom Color</h4>
					</div>
					<div class="modal-body">
						<?php include "dual-color-dynamic-template.php";?>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
			<div class="color-text" style="display:none">
				<div class="col-sm-1">
					<?php include "colorAdult-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorMedium-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorYouth-template.php";?>
				</div>
					<div class="clearfix"></div>
			</div>
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content" style="display:none">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="solidCustomFigColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="solidPreviewFigColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" class="custom-color-solid-button" data-toggle="modal" data-target="#ColorFigRegModal">Custom Color</button>
		<!-- Modal -->
		<div class="modal fade" class="ColorFigModal" id="ColorFigRegModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pick Custom Color</h4>
					</div>
					<div class="modal-body">
						<?php include "solid-color-dynamic-template.php";?>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- End Modal Content -->
			</div>
		</div>
		<!-- End Modal Div -->
		<div class="clearfix"></div>
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
		<div class="color-text" style="display:none">
			<div class="col-sm-1">
				<?php include "colorAdult-template.php";?>
			</div>
			<div class="col-sm-1">
				<?php include "colorMedium-template.php";?>
			</div>
			<div class="col-sm-1">
				<?php include "colorYouth-template.php";?>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="segmentedFigCustomColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="segmentedPreviewFigColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" class="custom-color-segmented-button" data-toggle="modal" data-target="#ColorFigSegModal">Custom Color</button>
		<!-- Modal -->
		<div class="modal fade" id="ColorFigSegModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Pick Custom Color</h4>
						</div>
						<div class="modal-body">
							<?php include "segmented-color-dynamic-template.php";?>
							<div class="clearfix"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- End Modal Content -->
				</div>
			</div>
			<!-- End Modal Div -->
		<div class="clearfix"></div>
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
			<div class="color-text" style="display:none">
				<div class="col-sm-1">
					<?php include "colorAdult-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorMedium-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorYouth-template.php";?>
				</div>
					<div class="clearfix"></div>
			</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div id="swirlCustomFigColorSelector" class="hide" style="display:none;">
	<div class="col-xs-4 box-color dynamic-box-color">
		<button class="btn-close-custom-color">X</button>
		<img class="swirlPreviewFigColorModal" src="assets/images/src/custom.png"/>
		<button id="custom-color-button" data-toggle="modal" data-target="#ColorFigSwirlModal">Custom Color</button>
		<!-- modal -->
		<div class="modal fade" id="ColorFigSwirlModal" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Pick Custom Color</h4>
					</div>
					<div class="modal-body">
						<?php include "swirl-color-dynamic-template.php";?>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
				<!-- End Modal Content -->
			</div>
		</div>
		<!-- End Modal Div -->
		<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="qtyin-adult-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="qtyin-medium-qty" placeholder="Qty"/></div>
		<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="qtyin-youth-qty" placeholder="Qty"/></div>
		<div class="clearfix"></div>
		<!-- Start text color option -->
			<div class="color-text" style="display:none">
				<div class="col-sm-1">
					<?php include "colorAdult-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorMedium-template.php";?>
				</div>
				<div class="col-sm-1">
					<?php include "colorYouth-template.php";?>
				</div>
					<div class="clearfix"></div>
			</div>
		<!-- End text color -->
		<span class="view-more col-xs-12">View More Sizes</span>
		<div class="show-content" style="display:none">
			<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="Qty"/></div>
			<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="Qty"/></div>
		</div>
	</div>
</div>
<div class="modal fade" id="FontColorQtyModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center">Font Color Picker</h4>
			</div>
			<div class="modal-body">
				<?php include "font-color-template.php";?>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- End Modal Content -->
	</div>
</div>

<script>

	var dynamicSolidCount = 0;
	var dynamicSSegmentedCount = 0;
	var dynamicSwirlCount = 0;
	var dynamicDualCount = 0;
	var dynamicSolidFigCount = 0;
	var dynamicSegmentedFigCount = 0;
	var dynamicSwirlFigCount = 0;

	$(document).ready(function() {

		//show new solid custom wirstband
		$('body').on('click', '#addCustomSolid', function(e) {
			newId = "ColorModal"+dynamicSolidCount;
			dynamicSolidCount++;
			$("#solidCustomColorSelector .dynamic-box-color img.solidPreviewColorModal").attr('class','solidPreviewColorModal');
			$("#solidCustomColorSelector .dynamic-box-color img.solidPreviewColorModal").addClass("Preview"+newId)
			$("#solidCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newId)
			$("#solidCustomColorSelector .dynamic-box-color .modal").attr("id", newId);
			
			$('#home div#main-color-content').prepend($("#solidCustomColorSelector").html());
			$("#solidCustomColorSelector .dynamic-box-color img.solidPreviewColorModal").attr('class','solidPreviewColorModal');
		});

		//show new segmented custom wirstband
		$('body').on('click', '#addCustomSegmented', function(e) {
			newId = "ColorSegModal"+dynamicSSegmentedCount;
			dynamicSSegmentedCount++;
			$("#segmentedCustomColorSelector .dynamic-box-color img.segmentedPreviewColorModal").attr('class','segmentedPreviewColorModal');
			$("#segmentedCustomColorSelector .dynamic-box-color img.segmentedPreviewColorModal").addClass("Preview"+newId)
			$("#segmentedCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newId)
			$("#segmentedCustomColorSelector .dynamic-box-color .modal").attr("id", newId);
			
			$('#segmented div#main-color-content').prepend($("#segmentedCustomColorSelector").html());
			$("#segmentedCustomColorSelector .dynamic-box-color img.segmentedPreviewColorModal").attr('class','segmentedPreviewColorModal');
		});

		//show new swirl custom wirstband
		$('body').on('click', '#addCustomSwirl', function(e) {
			newId = "ColorSwirlModal"+dynamicSwirlCount;
			dynamicSwirlCount++;
			$("#swirlCustomColorSelector .dynamic-box-color img.swirlPreviewColorModal").attr('class','swirlPreviewColorModal');
			$("#swirlCustomColorSelector .dynamic-box-color img.swirlPreviewColorModal").addClass("Preview"+newId)
			$("#swirlCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newId)
			$("#swirlCustomColorSelector .dynamic-box-color .modal").attr("id", newId);
			
			$('#swirls div#main-color-content').prepend($("#swirlCustomColorSelector").html());
			$("#swirlCustomColorSelector .dynamic-box-color img.swirlPreviewColorModal").attr('class','swirlPreviewColorModal');
		});

		//show new dual custom wirstband
		$('body').on('click', '#addCustomDual', function(e) {
			newId = "ColorDualModal"+dynamicDualCount;
			dynamicDualCount++;
			$("#dualCustomColorSelector .dynamic-box-color img.dualPreviewColorModal").attr('class','dualPreviewColorModal');
			$("#dualCustomColorSelector .dynamic-box-color img.dualPreviewColorModal").addClass("Preview"+newId)
			$("#dualCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newId)
			$("#dualCustomColorSelector .dynamic-box-color .modal").attr("id", newId);
			
			$('#dual-fig-reg div#main-color-content').prepend($("#dualCustomColorSelector").html());
			$("#dualCustomColorSelector .dynamic-box-color img.dualPreviewColorModal").attr('class','dualPreviewColorModal');
		});

		// ----- FIGURED -----

		//show new solid custom wirstband
		$('body').on('click', '#addCustomFiguredSolid', function(e) {
			newRegId = "ColorFigRegModal"+dynamicSolidFigCount;
			newLrgId = "ColorFigLrgModal"+dynamicSolidFigCount;
			dynamicSolidFigCount++;

			// For regular
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").attr('class','solidPreviewFigColorModal');
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").addClass("Preview"+newRegId)
			$("#solidCustomFigColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newRegId)
			$("#solidCustomFigColorSelector .dynamic-box-color .modal").attr("id", newRegId);

			$('#home-fig-reg div#main-color-content').prepend($("#solidCustomFigColorSelector").html());
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").attr('class','solidPreviewFigColorModal');

			// For large
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").attr('class','solidPreviewFigColorModal');
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").addClass("Preview"+newLrgId)
			$("#solidCustomFigColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newLrgId)
			$("#solidCustomFigColorSelector .dynamic-box-color .modal").attr("id", newLrgId);

			$('#home-fig-large div#main-color-content').prepend($("#solidCustomFigColorSelector").html());
			$("#solidCustomFigColorSelector .dynamic-box-color img.solidPreviewFigColorModal").attr('class','solidPreviewFigColorModal');
		});

		//show new solid custom wirstband
		$('body').on('click', '#addCustomFiguredSegmented', function(e) {
			newRegId = "ColorSegFigRegModal"+dynamicSegmentedFigCount;
			newLrgId = "ColorSegFigLrgModal"+dynamicSegmentedFigCount;
			dynamicSegmentedFigCount++;

			// For regular
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").attr('class','segmentedPreviewFigColorModal');
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").addClass("Preview"+newRegId)
			$("#segmentedFigCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newRegId)
			$("#segmentedFigCustomColorSelector .dynamic-box-color .modal").attr("id", newRegId);

			$('#segmented-fig-reg div#main-color-content').prepend($("#segmentedFigCustomColorSelector").html());
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").attr('class','segmentedPreviewFigColorModal');

			// For large
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").attr('class','segmentedPreviewFigColorModal');
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").addClass("Preview"+newLrgId)
			$("#segmentedFigCustomColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newLrgId)
			$("#segmentedFigCustomColorSelector .dynamic-box-color .modal").attr("id", newLrgId);

			$('#segmented-fig-large div#main-color-content').prepend($("#segmentedFigCustomColorSelector").html());
			$("#segmentedFigCustomColorSelector .dynamic-box-color img.segmentedPreviewFigColorModal").attr('class','segmentedPreviewFigColorModal');
		});

		//show new solid custom wirstband
		$('body').on('click', '#addCustomFiguredSwirl', function(e) {
			newRegId = "ColorSegFigRegModal"+dynamicSegmentedFigCount;
			newLrgId = "ColorSegFigLrgModal"+dynamicSegmentedFigCount;
			dynamicSegmentedFigCount++;

			// For regular
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").attr('class','swirlPreviewFigColorModal');
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").addClass("Preview"+newRegId)
			$("#swirlCustomFigColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newRegId)
			$("#swirlCustomFigColorSelector .dynamic-box-color .modal").attr("id", newRegId);

			$('#swirls-fig-reg div#main-color-content').prepend($("#swirlCustomFigColorSelector").html());
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").attr('class','swirlPreviewFigColorModal');

			// For large
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").attr('class','swirlPreviewFigColorModal');
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").addClass("Preview"+newLrgId)
			$("#swirlCustomFigColorSelector .dynamic-box-color #custom-color-button").attr("data-target", "#"+newLrgId)
			$("#swirlCustomFigColorSelector .dynamic-box-color .modal").attr("id", newLrgId);

			$('#swirls-fig-large div#main-color-content').prepend($("#swirlCustomFigColorSelector").html());
			$("#swirlCustomFigColorSelector .dynamic-box-color img.swirlPreviewFigColorModal").attr('class','swirlPreviewFigColorModal');
		});

		//show new dynamic modals
		$('body').on('click', '.custom-color-solid-button, .custom-color-segmented-button, .custom-color-swirl-button, .custom-color-dual-button', function(e) {
			var iD = $(this).attr("data-target");

			// if(iD.charAt(0) === "#") {
			// 	$(iD).modal("show");
			// } else {
				$("#"+iD).modal("show");
			// }
		});

		$('body').on('click', '.btn-close-custom-color', function(e) {
			$(this).closest(".dynamic-box-color").remove();
		});

		//colorpicker for dynamic color picker
		$('body').on('click', '.dynamic-pick-color-list li', function(e) {
			var color = $(this).attr('refcode');
			var p = $(this).parent('.dynamic-pick-color-list').prev('.box-opt-color');
			var num = p.find('input[type="text"]').length;
			var pick = $(this);
			var limit = $(this).parent('.dynamic-pick-color-list').find('li.active').length;
			var box = $(this).parents('.box-color');

			if(!pick.hasClass('active') && limit < num) {
				var f = p.find('li:not(.active)').eq(0);
				pick.addClass('active');
				pick.addClass('select-box-col');
				f.find('input').val(color);
				f.addClass('active').css('border-color', '#'+color);
				f.attr('refcode', color);

				if(num == 1) {
					box.find('input[type="number"]').attr('ref', color);
				}
				if(num > 1) {
					var colors = [];
					p.find('li.active').each(function(){
						var c = $(this).attr('refcode');
						colors.push(c);
					});
					box.find('input[type="number"]').attr('ref', colors.join(','));
				}
			} else {
				pick.removeClass('active');
				pick.removeClass('select-box-col');
				var f = p.find('li[refcode="'+color+'"]');
				f.removeClass('active');
				f.removeAttr('refcode');
				f.removeAttr('style');
				f.find('input').val('');
			}
		});

	});
</script>