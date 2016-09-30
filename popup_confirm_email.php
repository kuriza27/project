	
<div id="modal-confirm-submit" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<form id="form-submit-email">
				<div class="modal-header">
					<h4 class="modal-title">Order Information</h4>
				</div>
				<div class="modal-body">
					<input type="hidden" class="form-control" id="submit_order_type" value="" required>
					<div class="form-group clearfix">
						<div class="col-sm-3 col-xs-12">
							<label for="email" class="control-label">Full name :</label>
						</div>
						<div class="col-sm-9 col-xs-12">
							<input type="text" class="form-control" id="submit_order_fullname" value="" required>
						</div>
					</div>
					<div class="form-group clearfix">
						<div class="col-sm-3 col-xs-12">
							<label for="email" class="control-label">Email address :</label>
						</div>
						<div class="col-sm-9 col-xs-12">
							<input type="email" class="form-control" id="submit_order_email" value="" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="confirm-footer-buttons">
						<button type="button" class="btn btn-default modal-close" data-dismiss="modal">CANCEL</button>
						<button type='submit' class="btn btn-submit" id="submitCnfEmail">CONTINUE</button>
					</div>
					<div class="confirm-footer-loader" style="color:#325277;display:none;font-size:20px;padding:16px 22px;text-transform:uppercase;">
						<span>SUBMITTING...</span>
					</div>
				</div>
			</form>
		</div>
		<!-- End Modal Content -->
	</div>
</div>
