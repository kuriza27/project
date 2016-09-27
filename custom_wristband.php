
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