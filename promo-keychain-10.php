<style>

	#dv-10-free-keychains.promo-add-ons{
		margin-top: 30px;
	}

	#dv-10-free-keychains .box-thumb{
		background: #325277;
		padding: 0px;
	}

	#dv-10-free-keychains .row-title{
		background: #0a1a38;
	}

	#dv-10-free-keychains .row-title h1{
		color: #ffffff;
		font-size: 45px;
		margin: 25px 0;
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

<div class="modal fade" id="modal-10-free-keychains" role="dialog">
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
		<!---------End Modal Content-------------->
	</div>
</div>