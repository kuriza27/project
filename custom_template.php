<!-- WRIST SIZE -->
    <div id="dialog">
		<p>You can choose only one color</p>
	</div>
		<div class="wrist-size">
			<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">2</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Size </div>
					<div class="clearfix"></div>
			</div>
			<div class="wsize-default">
				<div class="col-md-4 prod-size js-size" id="quarter">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1/4" data-size="1/4">
				  <h2>1/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size"  id="half">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1-2.png"></div>
				  <input type="radio" name="wrist_size" class="wrist_size" value="1/2" data-size="1/2">
				  <h2>1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="three">
				  <div class="box-thumb"><img src="assets/images/src/sizes/3-4.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="3/4" data-size="3/4">
				  <h2>3/4 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="one">
				  <div class="box-thumb"><img src="assets/images/src/sizes/1.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1" data-size="1">
				  <h2>1 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="onehalf">
				  <div class="box-thumb"><img src="assets/images/src/sizes/11-2.png"></div>
				  <input type="radio" name="wrist_size"  class="wrist_size" value="1 1/2" data-size="1 1/2">
				  <h2>1 1/2 Inch</h2>
				</div>
				<div class="col-md-4 prod-size js-size" id="two">
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
					<li class="active" data-color-style="solid">
						<a data-toggle="pill" data-value="0" href="#home">Solid</a>
					</li>
					<li data-color-style="segmented">
						<a data-toggle="pill" href="#segmented" data-value="0.01">Segmented</a>
					</li>
					<li data-color-style="swirls">
						<a data-toggle="pill" href="#swirls" data-value="0.01">Swirls</a>
					</li>
					<li data-color-style="glow">
						<a data-toggle="pill" href="#glow" data-value="0.03">Glow</a>
					</li>
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
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>

						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Black.png"/>
							<div class="nocustom_pick">Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Brown.png"/>
							<div class="nocustom_pick">Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="6A491A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="6A491A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="6A491A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="6A491A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="6A491A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Green.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Grey.png"/>
							<div class="nocustom_pick">Solid Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A0A29F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/HotPink.png"/>
							<div class="nocustom_pick">Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightBlue.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="9ABFE5" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="9ABFE5" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="9ABFE5" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="9ABFE5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="9ABFE5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightPink.png"/>
							<div class="nocustom_pick">Light Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F997B7" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F997B7" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F997B7" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F997B7" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F997B7" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LimeGreen.png"/>
							<div class="nocustom_pick">Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8CD50B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8CD50B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8CD50B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8CD50B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8CD50B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Maroon.png"/>
							<div class="nocustom_pick">Maroon</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="891C2E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="891C2E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="891C2E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="891C2E" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="891C2E" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicGold.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="836F3D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input  ref="836F3D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  ref="836F3D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="836F3D" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="836F3D" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicSilver.png"/>
							<div class="nocustom_pick">Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8D8F8C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8D8F8C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8D8F8C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8D8F8C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8D8F8C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/NavyBlue.png"/>
							<div class="nocustom_pick">Navy Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="01214E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="01214E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="01214E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="01214E" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="01214E" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Orange.png"/>
							<div class="nocustom_pick">Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE117.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D5A927" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D5A927" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D5A927" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D5A927" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D5A927" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE326.png"/>
							<div class="nocustom_pick">Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="00B2AC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="00B2AC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="00B2AC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="00B2AC" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="00B2AC" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE528.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="AD71C5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="AD71C5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="AD71C5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="AD71C5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="AD71C5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE551.png"/>
							<div class="nocustom_pick">Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A0B8C2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A0B8C2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A0B8C2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A0B8C2" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A0B8C2" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE553.png"/>
							<div class="nocustom_pick">Dark Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="22452D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="22452D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="22452D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="22452D" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="22452D" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE564.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8DBDBF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8DBDBF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8DBDBF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8DBDBF" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8DBDBF" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE2587.png"/>
							<div class="nocustom_pick">Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8643A4" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8643A4" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8643A4" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8643A4" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8643A4" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE3005.png"/>
							<div class="nocustom_pick">Cornflower Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="3B83CB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="3B83CB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="3B83CB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="3B83CB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="3B83CB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE4725.png"/>
							<div class="nocustom_pick">Khaki</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="B99474" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="B99474" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="B99474" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="B99474" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="B99474" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE5435.png"/>
							<div class="nocustom_pick">Blue Gray</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A1B5BE" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A1B5BE" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A1B5BE" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A1B5BE" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A1B5BE" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7461.png"/>
							<div class="nocustom_pick">True Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0086BA" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0086BA" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0086BA" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0086BA" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0086BA" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7498.png"/>
							<div class="nocustom_pick">Dark Moss Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="50582E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="50582E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="50582E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="50582E" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="50582E" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ProcessBlue.png"/>
							<div class="nocustom_pick">Process Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0F8CCC"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0F8CCC"  type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0F8CCC"  type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0F8CCC"  type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0F8CCC"  type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Red.png"/>
							<div class="nocustom_pick">Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ReflexBlue.png"/>
							<div class="nocustom_pick">Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="191597" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="191597" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Teal.png"/>
							<div class="nocustom_pick">Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="079CA5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="079CA5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="079CA5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="079CA5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="079CA5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Violet.png"/>
							<div class="nocustom_pick">Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A108B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A108B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/White.png"/>
							<div class="nocustom_pick">White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FFFFFF" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FFFFFF" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Yellow.png"/>
							<div class="nocustom_pick">Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
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
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,0E9543"type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,0E9543" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,0E9543" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicGold.png"/>
							<div class="nocustom_pick">Black Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,836F3D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,836F3D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,836F3D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,836F3D" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,836F3D" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicSilver.png"/>
							<div class="nocustom_pick">Black Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,8D8F8C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,8D8F8C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,8D8F8C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,8D8F8C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,8D8F8C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackOrange.png"/>
							<div class="nocustom_pick">Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,EF6B01" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,EF6B01" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,5A108B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,5A108B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackReflexBlue.png"/>
							<div class="nocustom_pick">Black Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,191597" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,191597" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FFFFFF" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FFFFFF" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueGrey.png"/>
							<div class="nocustom_pick">Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,A0A29F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueHotPink.png"/>
							<div class="nocustom_pick">Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueLightBlue.png"/>
							<div class="nocustom_pick">Blue Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="0B45BB,9ABFE5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="0B45BB,9ABFE5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BluePANTONE267Red.png"/>
							<div class="nocustom_pick">Blue Violet Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,5A108B,EA0D2C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenRedYellow.png"/>
							<div class="nocustom_pick">Green Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,EA0D2C,F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenReflexBlue.png"/>
							<div class="nocustom_pick">Green Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,191597" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,191597" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkBlackBlue.png"/>
							<div class="nocustom_pick">Hot Pink Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,000000,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,000000,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,000000,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,000000,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,000000,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,9ABFE5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,9ABFE5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/LightPinkHotPink.png"/>
							<div class="nocustom_pick">Light Pink Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,F997B7" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,F997B7" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,F997B7" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,F997B7" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,F997B7" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="891C2E,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="891C2E,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="891C2E,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="891C2E,A0A29F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="891C2E,A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/OrangeBlue.png"/>
							<div class="nocustom_pick">Orange Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,A0A29F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE103.png"/>
							<div class="nocustom_pick">Gold Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="C1A900,5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="C1A900,5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="C1A900,5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="C1A900,5A108B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="C1A900,5A108B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE376.png"/>
							<div class="nocustom_pick">Lime Green Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="7BB201,44A3BC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="7BB201,44A3BC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="7BB201,44A3BC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="7BB201,44A3BC" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="7BB201,44A3BC" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RainbowSegmented.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlack.png"/>
							<div class="nocustom_pick">Red Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlackYellow.png"/>
							<div class="nocustom_pick">Red Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,000000,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000,F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000,F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlue.png"/>
							<div class="nocustom_pick">Red Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueHotPink.png"/>
							<div class="nocustom_pick">Red Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueYellow.png"/>
							<div class="nocustom_pick">Red Blue Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0E9543" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0E9543" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,A0A29F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedHotPink.png"/>
							<div class="nocustom_pick">Red Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE267Black.png"/>
							<div class="nocustom_pick">Red Violet Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,5A108B,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,5A108B,000000" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,5A108B,000000" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick">Red Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,419DB5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,419DB5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,419DB5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,419DB5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,419DB5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPink.png"/>
							<div class="nocustom_pick">Red Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FB78B2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FB78B2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FB78B2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FB78B2" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FB78B2" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteGreen.png"/>
							<div class="nocustom_pick">Red White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0E9543" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,F2E80F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,F2E80F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlackOrange.png"/>
							<div class="nocustom_pick">White Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01,FEFEFE,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,FEFEFE,000000" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,FEFEFE,000000" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlue.png"/>
							<div class="nocustom_pick">White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EFEFE,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EFEFE,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBluePANTONE267.png"/>
							<div class="nocustom_pick">White Blue Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A108B,FEFEFE,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBrown.png"/>
							<div class="nocustom_pick">White Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,6A491A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,6A491A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,6A491A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,6A491A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,6A491A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGreen.png"/>
							<div class="nocustom_pick">White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,0E9543" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,0E9543" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGrey.png"/>
							<div class="nocustom_pick">White Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,A0A29F"  type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,A0A29F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteHotPink.png"/>
							<div class="nocustom_pick">White Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FD029A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FD029A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLightBlue.png"/>
							<div class="nocustom_pick">White Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,9ABFE5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,9ABFE5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLimeGreen.png"/>
							<div class="nocustom_pick">White Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,8CD50B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,8CD50B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,8CD50B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,8CD50B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,8CD50B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteOrange.png"/>
							<div class="nocustom_pick">White Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EF6B01" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EF6B01" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePANTONE528.png"/>
							<div class="nocustom_pick">White Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,AD71C5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,AD71C5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,AD71C5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,AD71C5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,AD71C5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePink.png"/>
							<div class="nocustom_pick">White Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,FB78B2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,FB78B2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,FB78B2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FB78B2" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FB78B2" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteRed.png"/>
							<div class="nocustom_pick">White Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EA0D2C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EA0D2C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteTeal.png"/>
							<div class="nocustom_pick">White Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,079CA5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,079CA5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,079CA5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,079CA5" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,079CA5" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/YellowBlue.png"/>
							<div class="nocustom_pick">Yellow Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F2E80F,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F2E80F,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F2E80F,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F,0B45BB" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F,0B45BB" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
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
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="021509,0C9040"  type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="021509,0C9040" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="021509,0C9040" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="021509,0C9040" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="021509,0C9040" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGrey.png"/>
							<div class="nocustom_pick">Black Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,9DA09C" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,9DA09C" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,9DA09C" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,9DA09C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,9DA09C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E5028B" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E5028B" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E5028B" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E5028B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E5028B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,560F88" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,560F88" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,560F88" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,560F88" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,560F88" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackRed.png"/>
							<div class="nocustom_pick">Black Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E30C2A" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E30C2A" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E30C2A" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E30C2A" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E30C2A" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,F3F3F3" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,F3F3F3" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,F3F3F3" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,F3F3F3" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,F3F3F3" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E4DA0E" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E4DA0E" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E4DA0E" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E4DA0E" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E4DA0E" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueLimeGreen.png"/>
							<div class="nocustom_pick">Black Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="1753A6,8AD40C" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="1753A6,8AD40C" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="1753A6,8AD40C" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="1753A6,8AD40C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="1753A6,8AD40C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueWhite.png"/>
							<div class="nocustom_pick">Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F3F6FC,0D46BA" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F3F6FC,0D46BA" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F3F6FC,0D46BA" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F3F6FC,0D46BA" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F3F6FC,0D46BA" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F3F6FC,174830" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F3F6FC,174830" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F3F6FC,174830" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F3F6FC,174830" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F3F6FC,174830" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DesertCamo.png"/>
							<div class="nocustom_pick">Desert Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="4E4726,DECE76,6B5619" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="4E4726,DECE76,6B5619"  type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="4E4726,DECE76,6B5619" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/GreenCamo.png"/>
							<div class="nocustom_pick">Green Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,BE8B5E,64631C" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,BE8B5E,64631C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,BE8B5E,64631C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="E22FAB,9BBAE3" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="E22FAB,9BBAE3" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="E22FAB,9BBAE3" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="E22FAB,9BBAE3" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="E22FAB,9BBAE3" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlueLimeGreen.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="98C0D7,8FCF49,F90599" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="98C0D7,8FCF49,F90599" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="98C0D7,8FCF49,F90599" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="98C0D7,8FCF49,F90599" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="98C0D7,8FCF49,F90599" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FBFCFC,11442B" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FBFCFC,11442B" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FBFCFC,11442B" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FBFCFC,11442B" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FBFCFC,11442B" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/LimeGreenYellowLightBlue.png"/>
							<div class="nocustom_pick">Lime Green Yellow Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8FD040,97C1CC,F0E711" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8FD040,97C1CC,F0E711" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8FD040,97C1CC,F0E711" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8A2232,A0A19D" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8A2232,A0A19D" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8A2232,A0A19D" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8A2232,A0A19D" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8A2232,A0A19D" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/OrangeWhite.png"/>
							<div class="nocustom_pick">Orange White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F17A19,FFFCF9" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F17A19,FFFCF9" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F17A19,FFFCF9" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F17A19,FFFCF9" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F17A19,FFFCF9" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PANTONE267White.png"/>
							<div class="nocustom_pick">Violet White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="773BA1,FBF9FC" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="773BA1,FBF9FC" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="773BA1,FBF9FC" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="773BA1,FBF9FC" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="773BA1,FBF9FC" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PinkPANTONE267.png"/>
							<div class="nocustom_pick">Pink Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="681990,F574B1" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="681990,F574B1" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="681990,F574B1" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="681990,F574B1" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="681990,F574B1" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RainbowSwirl.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F4303D,FEDE1E,2230A9" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F4303D,FEDE1E,2230A9" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F4303D,FEDE1E,2230A9" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedBlackBlue.png"/>
							<div class="nocustom_pick">Red Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="E10D30,08389E,000000" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="E10D30,08389E,000000" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="E10D30,08389E,000000" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="E10D30,08389E,000000" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="E10D30,08389E,000000" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,178B41" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,178B41" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,178B41" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,178B41" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,178B41" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,A1A19C" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,A1A19C" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,A1A19C" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,A1A19C" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,A1A19C" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhite.png"/>
							<div class="nocustom_pick">Red White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,FFFFFF" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,FFFFFF" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,FFFFFF" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,FFFFFF" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,FFFFFF" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,FFFFFF,0F42B6" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,FFFFFF,0F42B6"type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,FFFFFF,0F42B6"type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EB2328,F2E50F" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EB2328,F2E50F" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EB2328,F2E50F" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EB2328,F2E50F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EB2328,F2E50F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueBlack.png"/>
							<div class="nocustom_pick">Reflex Blue Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000001,120F6D" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000001,120F6D" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000001,120F6D" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000001,120F6D" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000001,120F6D" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueGrey.png"/>
							<div class="nocustom_pick">Reflex Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="242097,999C9E" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="242097,999C9E" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="242097,999C9E" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="242097,999C9E" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="242097,999C9E" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/TealWhite.png"/>
							<div class="nocustom_pick">Teal White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,1CA4AD" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,1CA4AD" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,1CA4AD" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/WhiteBlackGreen.png"/>
							<div class="nocustom_pick">White Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,000000,05461F" type="number" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,000000,05461F" type="number" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,000000,05461F" type="number" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,000000,05461F" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,000000,05461F" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
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
							<div class="nocustom_pick">Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="3886C4" type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="3886C4" type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="3886C4" type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="3886C4" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="3886C4" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkGREEN.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5DCE66" type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5DCE66" type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5DCE66" type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5DCE66" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5DCE66" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPINK.png"/>
							<div class="nocustom_pick">Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D57DA3" type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D57DA3" type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D57DA3" type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D57DA3" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D57DA3" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A078AD" type="text" name="adult-qty" class="adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A078AD" type="text" name="medium-qty" class="medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A078AD" type="text" name="youth-qty" class="youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
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
							<!-------End text color-------------->
							<span class="view-more">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A078AD" type="text" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A078AD" type="text" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
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
							<input class="cont-select" type="radio" value="cont-select" name="cont-select"/>Continuous Message
						</div>
							<div class="clearfix"></div>
					</div>
					<div id="band-text" class="margin-div">

						<div class="f-input">
							<div class="col-sm-5"   style="border-right:2px solid #154360;">
								<span>Front Message:</span><input type="text" name="front-text" class="band-text" value=""  placeholder="Enter Front Message" maxlength="11">
								<div class="clip-sec col-xs-6">
									<button class="fclip-1" data-toggle="modal" data-target="#ClipArtModal">Front Start Clipart</button><br />
								</div>
								<div class="clip-sec col-xs-6">
									<button class="fclip-2" data-toggle="modal" data-target="#ClipArtModal">Front End Clipart</button><br />
									<a href="#">or Upload your own art</a>
								</div>
									<div class="clearfix"></div>
							</div>
							<div class="col-sm-5">
								<span>Back Message:</span><input type="text" name="back-text" class="band-text" value="" placeholder="Enter Back Message" maxlength="11">
								<div class="clip-sec col-xs-6">
									<button class="bclip-1" data-toggle="modal" data-target="#ClipArtModal">Back Start Clipart</button><br />
									
								</div>
								<div class="clip-sec col-xs-6">
									<button class="bclip-2" data-toggle="modal" data-target="#ClipArtModal">Back End Clipart</button><br />
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
							Inside Text: &nbsp;<input type="text" name="inside-text" class="band-text" value=""  placeholder="Enter Continuous Message">
							</div>
							<div class="clearfix"></div>
							<div class="clip-sec" style="float:left;width:20%;">
								<button class="fclip-1" data-toggle="modal" data-target="#ClipArtModalC">Start Clipart</button><br />
							</div>
							<div class="clip-sec" style="float:left;width:20%;">
								<button class="fclip-2" data-toggle="modal" data-target="#ClipArtModalC">End Clipart</button><br />
								<a href="#">or Upload your own art</a>
							</div>
								<div class="clearfix"></div>
							<div class="modal fade" id="ClipArtModalC" role="dialog">
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
							<div class="clearfix"></div>
					</div>

					<?php include_once 'preview_template.php'; ?>

					<h3>PREVIEW</h3>
						<div id="preview-pane">
							<div class="fb-select">
								<div id="front-view" class="band">
									<div class="preview-text faded" id="front-text">
										<span class="start-fc"></span>Front Message<span class="end-fc"></span>
									</div>
								</div>
								<div id="back-view" class="band">
									<div class="preview-text faded" id="back-text">
										<span class="start-bc"></span>Back Message<span class="end-bc"></span>
									</div>
								</div>
								<div class="clearfix"></div>
								<span style="color:#ff0000;">maximum of 22 characters for both front and back</span>
							</div>
							<div class="c-select" style="display:none;">
								<div id="inside-view" class="band">
									<div class="preview-text faded" id="inside-text">
										<span class="start-cc"></span>Preview Message<span class="end-cc"></span>
									</div>
								</div>
								<span style="color:#ff0000;">maximum of 22 characters for continuous message</span>
							</div>
						</div>
						<div class="text-center">
							<ul id="preview-pane-selection" class="nav nav-pills preview-pane-colors" style="width:100%;">
							</ul>
						</div>
						<!-- <div id="preview_color_container">
							<ul class="nav nav-pills js-colors">
								<li class="active"><a data-toggle="pill" href="#preview1">1</a></li>
								<li><a data-toggle="pill" href="#preview2" >2</a></li>
								<li><a data-toggle="pill" href="#preview3">3</a></li>
								<li><a data-toggle="pill" href="#preview4">4</a></li>
							</ul>

							<div class="tab-content">
								<div id="preview1" class="tab-pane fade in active preview-color">
									1
								</div>
								<div id="preview2" class="tab-pane fade preview-color">
									2
								</div>
								<div id="preview3" class="tab-pane fade preview-color">
									3
								</div>
								<div id="preview4" class="tab-pane fade preview-color">
									4
								</div>
							</div>
						</div> -->
					</div>
					<!--end preview pane -->
					<div id="font-color">
					<h3>Select Font Color</h3>
						<button id="font-button" data-toggle="modal" data-target="#FontColorModal">Select Font Color</button><div id="preview-textcolor"></div>
							<!--------Modal---------->
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
								  <!---------End Modal Content-------------->
								</div>
							  </div>
                               <!-----End Modal Div ---->
							   <div class="clearfix"></div>
				    </div>
					<div id="add-design">
								<!--<button>Clear</button>-->
							<h3>Select Font Style</h3>
							<button id="font-button" data-toggle="modal" data-target="#FontModal">Choose Font Style</button><br /><div id="preview-textfont"></div>
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
							   <div class="clearfix"></div>
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
						<h1 class="align-right">Total: <span id= "totalPrice">$ 0.00</span></h1>
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