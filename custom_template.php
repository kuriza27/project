<!-- WRIST SIZE -->

		<div class="wrist-size">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">2</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Size </div>
					<div class="clearfix"></div>
			</div>
			<div class="wsize-default">
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1/4" data-size="1/4">
				  <h2>1/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-2.png"></div>
				  <input type="radio" name="wrist_size" class="wrist_size" value="1/2" data-size="1/2">
				  <h2>1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/3-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="3/4" data-size="3/4">
				  <h2>3/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1" data-size="1">
				  <h2>1 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
				  <div class="box-thumb"><img src="assets/images/src/sizes/11-2.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1 1/2" data-size="1 1/2">
				  <h2>1 1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size">
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
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">3</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Color and  Quantity <i>(*Minimum of 20)</i> </div>
					<div class="clearfix"></div>
			</div>
			<div id="wrist_color_container">

				  <ul class="nav nav-pills js-colors">
					<li class="active"><a data-toggle="pill" data-value="0" href="#home">Solid</a></li>
					<li><a data-toggle="pill" href="#segmented" data-value="0.01">Segmented</a></li>
					<li><a data-toggle="pill" href="#swirls" data-value="0.01">Swirls</a></li>
					<li><a data-toggle="pill" href="#glow" data-value="0.03">Glow</a></li>
				  </ul>

				  <div class="tab-content">
					<div id="home" class="tab-pane fade in active js-color" data-value="0" data-color="Solid">
					  <h3>Solid Colors</h3>
					  <div id="main-color-content">
					  <div class="col-xs-4 box-color">
							<img src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorModal" role="dialog">
								<div class="modal-dialog">
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Pick Custom Color</h4>
									</div>
									<div class="modal-body">
									  <?php include "solid-color-template.php";?>
									   <div class="clearfix"></div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
							<div class="clearfix"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Black.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Brown.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Green.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Grey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/HotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LimeGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Maroon.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicGold.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicSilver.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/NavyBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Orange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE117.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE326.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE528.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE551.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE553.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE564.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE2587.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE3005.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE4725.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE5435.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7461.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7498.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ProcessBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Red.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ReflexBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Teal.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Violet.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/White.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Yellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<div id="segmented" class="tab-pane fade js-color" data-value="0.01" data-color="Segmented">
					  <h3>Segmented Colors</h3>
					  <div id="main-color-content">
					     <div class="col-xs-4 box-color">
							<img src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorSegModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorSegModal" role="dialog">
								<div class="modal-dialog">
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Pick Custom Color</h4>
									</div>
									<div class="modal-body">
									  <?php include "segmented-color-template.php";?>
									   <div class="clearfix"></div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
							<div class="clearfix"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicGold.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicSilver.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackPANTONE267.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackReflexBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackWhite.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BluePANTONE267Red.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenRedYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenReflexBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkBlackBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/LightPinkHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/MaroonGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/OrangeBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE103.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE376.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RainbowSegmented.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlack.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlackYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE267Black.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedYellow.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlackOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBluePANTONE267.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBrown.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGrey.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteHotPink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLightBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLimeGreen.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteOrange.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePANTONE528.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePink.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteRed.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteTeal.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/YellowBlue.png"/>
							<div class="nocustom_pick"></div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					 </div>
					</div>
					<div id="swirls" class="tab-pane fade js-color" data-value="0.01" data-color="Swirls">
					  <h3>Swirls Color</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorSwirlModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorSwirlModal" role="dialog">
								<div class="modal-dialog">
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Pick Custom Color</h4>
									</div>
									<div class="modal-body">
									  <?php include "swirl-color-template.php";?>
									   <div class="clearfix"></div>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackHotPink.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackPANTONE267.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackRed.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackYellow.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueLimeGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DesertCamo.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/GreenCamo.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlueLimeGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/LimeGreenYellowLightBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/MaroonGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/OrangeWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PANTONE267White.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PinkPANTONE267.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RainbowSwirl.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedBlackBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhiteBlue.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedYellow.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueBlack.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueGrey.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/TealWhite.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/WhiteBlackGreen.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Swirl -->
					<div id="glow" class="tab-pane fade js-color" data-value="0.03" data-color="Glow">
					  <h3>Glow</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkBLUE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkGREEN.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPINK.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
					  </div>
					</div>
					<!-- End Glow Color -->
				  </div>
				  <!--	End Tab Content -->
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
							<input class="cont-select" type="radio" value="cont-select" name="cont-select"/>Continous Message
						</div>
							<div class="clearfix"></div>
					</div>
					<div id="band-text" class="margin-div">

						<div class="f-input">
							<div class="col-sm-5"   style="border-right:2px solid #154360;">
								<span>Front Message:</span><input type="text" name="front-text" class="band-text" value=""  placeholder="Enter Front Message"> 
								<div class="clip-sec col-xs-6">
									<button class="fclip-1" data-toggle="modal" data-target="#ClipArtModal">Front Start Clip Art</button><br />		
								</div>
								<div class="clip-sec col-xs-6">
									<button class="fclip-2" data-toggle="modal" data-target="#ClipArtModal">Front End Clip Art</button><br />
									<a href="#">or Upload your own art</a>
								</div>
									<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<span>Back Message:</span><input type="text" name="back-text" class="band-text" value="" placeholder="Enter Back Message">
								<div class="clip-sec col-xs-6">
									<button class="bclip-1" data-toggle="modal" data-target="#ClipArtModal">Back Start Clip Art</button><br />
									<a href="#">or Upload your own art</a>
								</div>
								<div class="clip-sec col-xs-6">
									<button class="bclip-2" data-toggle="modal" data-target="#ClipArtModal">Back End Clip Art</button><br />
									<a href="#">or Upload your own art</a>
								</div>
									<div class="clearfix"></div>
							</div>
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
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
								<div class="clear"></div>
						</div>
						<div class="c-input" style="display:none">
							<div class="col-sm-6" style="border-right:2px solid #474747;">
							Inside Text: &nbsp;<input type="text" name="inside-text" class="band-text" value=""  placeholder="Enter Continous Message">
							</div>
						</div>
							<div class="clearfix"></div>
					</div>

					<h3>PREVIEW</h3>
					<div id="preview-pane">
					 <div class="fb-select">
						<div id="front-view" class="band">
							<div class="preview-text faded" id="front-text">
								Front Message
							</div>
						</div>
						<div id="back-view" class="band">
							<div class="preview-text faded" id="back-text">
								Back Message
							</div>
						</div>
						<div class="clearfix"></div>
					 </div>
					  <div class="c-select" style="display:none;">
							<div id="inside-view" class="band">
								<div class="preview-text faded" id="inside-text">
									Preview Message
								</div>
							</div>
					 </div>
					</div>
					<!--end preview pan -->
					<div id="add-design">
								<!--<button>Clear</button>-->
							<h3>Select Font Style</h3>
							<button id="font-button" data-toggle="modal" data-target="#FontModal">Choose Font Style</button><br />
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
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
					</div>

				</div>
			</div>
			<!-- END WRISTBAND MESSAGE -->

			<!-- ADD ONS -->
			<div class="product-add-ons">
				<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
					<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">5</span></div>
					<div class="col-xs-9 col-sm-10 offer-details float-left">ADD ONS (Optional)</i> </div>
						<div class="clearfix"></div>
				</div>
				<div class="col-md-4 add-ons">
				  <div class="box-thumb"><img src="assets/images/src/extra.png"></div>
				  <div class="add-ons-radio">
					  <input type="radio" name="add-ons-extra"  class="add-ons" value="1.99">
					  <h2>Individually Wrap</h2>
				  </div>
				</div>
			</div>
			<!-- total -->
			<div class="clearfix"></div>
			<div class="total-area">
				<div class="js-total" style="display:none;">
					<div class="col-md-4">
					   <h5>Production Time</h5>
						<select name="ProductionTime" id="ProductionTime" class="uk-form-large uk-width-1-1 js-production-options" data-title="Production" required="" data-validation-error="Please select production time." data-validation-slide-pos="production-shipping">
							<option value="0">Select Production Time…</option>
							<option value="2" data-price="4.99">Rush Production - 2 Days (+$4.99)</option>
							<option value="4" data-price="4.90">Standard Production - 4 Days (+$4.90)</option>
							<option value="7" data-price="0.00">Standard Production - 7 Days (+$0.00)</option>
						</select>
						<div style="padding-top:10px;"></div>
						<h5>Shipping Time</h5>
							<select name="Delivery" id="ShippingTime" class="uk-form-large uk-width-1-1 js-shipping-options" data-title="Shipping" required="" data-validation-error="Please select shipping time." data-validation-slide-pos="production-shipping">
								<option value="0">Select Shipping Time…</option>
								<option value="2" data-price="19.84">Rush Shipping - 2 Days (+$19.84)</option>
								<option value="4" data-price="6.84">Standard Shipping - 4 Days (+$6.84)</option>
								<option value="6" data-price="5.89">Standard Shipping - 6 Days (+$5.89)</option>
								<option value="7" data-price="15.79">International Shipping - 7 Days (+$15.79)</option>
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
											Size: <u><span id="wristband_size"></span></u>
										</strong></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-6"><strong>Colors</strong></div>
									<div class="col-md-4 col-sm-6 align-right"><strong>Subtotal</strong></div>
								</div>
								<hr>
								<div class="summary-list-item js-item-summary">
								</div>
							</div>
						</div>
						<h1 class="align-right">Total: <span id="totalPrice">$ 0.00</span></h1>
					</div>
					<div class="col-md-2">

					  <div class="button-cart">
						<button>Add to Cart</button>
					  </div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="js-no-total">
					<h1>Minimum order should be at least <u>20 pieces.</u></h1>
				</div>
			</div>
			<!-- total -->
		</div>
	</div>
</div>