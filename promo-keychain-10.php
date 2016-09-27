<style>

	#dv-10-free-keychains.promo-add-ons{
		margin-top: 30px;
	}

	#dv-10-free-keychains .box-thumb, .message_wristband_100 .box-thumb{
		background: #008da9;
		padding: 0px;
	}

	#dv-10-free-keychains .row-title{
		background: #325277;
	}

	.message_wristband_100 .row-title{
		background: #325277;
		padding-bottom: 25px;
	}

	#dv-10-free-keychains .row-title h1{
		color: #ffffff;
		font-size: 45px;
		margin: 25px 0;
	}

	.message_wristband_100 .row-title h1{
		color: #ffffff;
		font-size: 45px;
		margin: 25px 0 15px 0;
	}

	.message_wristband_100 .fwb-text-header{
		background-color: #325277;
		color: #ffffff;
		height: 100%;
		text-decoration: underline;
	}

	.message_wristband_100 .fwb-text-hidden-header{
		background-color: #325277;
		color: #ffffff;
		font-weight: bold;
		height: 100%;
		padding: 5px 0;
		text-decoration: underline;
	}

	#dv-10-free-keychains .row-content{
		padding: 25px 0;
	}

	#dv-10-free-keychains .row-content input{
		height: auto;
		padding: 10px 15px;
		text-align: center;
	}

	#dv-10-free-keychains .row-content button{
		background-color: #17a589;
		border-color: #117864;
		color: #ffffff;
		font-size: 20px;
		margin: 0px;
		outline: none;
		padding: 6px 10px;
		top: 0px;
	}

	#dv-10-free-keychains .btn-success:hover, #dv-10-free-keychains .btn-success:focus {
		color: rgba(0,0,0,.4);
		background-color: #449d44;
		border-color: #398439;
	}

	#dv-10-free-keychains .btn-warning:hover, #dv-10-free-keychains .btn-warning:focus {
		color: rgba(0,0,0,.4);
		background-color: #ec971f;
		border-color: #d58512;
	}

</style>

<div id="dv-10-free-keychains" class="col-md-12 promo-add-ons" style="display:none;">
	<div class="box-thumb clearfix">
		<div class="row row-title">
			<h1>You have <strong class="js-free-bands-count">10</strong> <strong>FREE</strong> keychains!</h1>
		</div>
		<div class="row row-content">
			<!-- <span>:</span> -->
			<div class="input-group input-group col-xs-12 col-md-6 col-md-offset-3">
				<input id="freekc" class="form-control" type="number" pattern="[0-9]*" placeholder="Input keychain quantity" min="0" max="10" data-maxlength="2">
				<!-- <input id="freekc" class="freewb-input col-xs-12 col-md-offset-3 col-md-6" type="number" pattern="[0-9]*" placeholder="Input keychain quantity" data-maxlength="2"> -->
				<span class="input-group-btn">
					<button id="btnfreekc" class="btn btn-success glyphicon glyphicon-ok"></button>
				</span>
			</div><!-- /input-group -->
		</div>
	</div>
</div>

<div id="modal-10-free-keychains" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Error</h4>
			</div>
			<div class="modal-body text-center">
				<h2 style="font-size:25px;padding:10px 0;">Quantity must not be over 10 pieces.</h2>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default modal-close" data-dismiss="modal" style="padding:10px 15px;">Close</button>
			</div>
		</div>
		<!-- End Modal Content -->
	</div>
</div>

<div id="dv-100-free-wristbands" class="col-md-12 message_wristband_100" style="display:none;">
	<div class="box-thumb clearfix">
		<div class="row row-title">
			<h1>You have <strong class="js-free-bands-count">100</strong> <strong>FREE</strong> wristbands!</h1>
			<label class="js-free-bands-accept">
				<div class="free-wristbands">
					<input type="checkbox" name="add-ons-extra" data-code="free-wristbands" class="free-bands"/> <span style="margin-left:10px;">Click to claim free wristbands</span>
				</div>
			</label>
		</div>
		<div class="row row-content">
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
						<div class="col-md-6 col-sm-12 fwb-text fwb-text-header text-center">
							<div class="col-xs-4 fwb-text-header"><h4>STYLE</h4></div>
							<div class="col-xs-4 fwb-text-header"><h4>COLOR</h4></div>
							<div class="col-xs-4 fwb-text-header"><h4>SIZE</h4></div>
						</div>
						<div class="col-md-6 fwb-text fwb-text-header hidden-sm hidden-xs text-center">
							<div class="col-xs-12 fwb-text-header"><h4>INPUT QUANTITY</h4></div>
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
		</div>
	</div>
</div>

<div id="modal-100-free-wristbands" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Error</h4>
			</div>
			<div class="modal-body text-center">
				<h2 style="font-size:25px;padding:10px 0;">Total quantity must not be over 100 pieces.</h2>
				<div class="clearfix"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default modal-close" data-dismiss="modal" style="padding:10px 15px;">Close</button>
			</div>
		</div>
		<!-- End Modal Content -->
	</div>
</div>