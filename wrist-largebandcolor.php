<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">3</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Color and  Quantity <i>(*Minimum of 20)</i> </div>
					<div class="clearfix"></div>
			</div>
			<div id="wrist_color_container">

				  <ul class="nav nav-pills js-colors">
					<li class="active" data-color-style="solid">
						<a data-toggle="pill" data-value="0" href="#home-large">Solid</a>
					</li>
					<li data-color-style="segmented">
						<a data-toggle="pill" href="#segmented-large" data-value="0.01">Segmented</a>
					</li>
					<li data-color-style="swirls">
						<a data-toggle="pill" href="#swirls-large" data-value="0.01">Swirls</a>
					</li>
					<li data-color-style="glow">
						<a data-toggle="pill" href="#glow-large" data-value="0.03">Glow</a>
					</li>
				  </ul>

				  <div class="tab-content">
					<div id="home-large" class="tab-pane fade in active js-color" data-value="0" data-color="Solid">
					  <h3>Solid Colors</h3> <button id="addCustomSolid" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
					  <div class="col-xs-4 box-color">
							<img class="PreviewColorModal" src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorLargeModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorLargeModal" role="dialog">
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
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Black.png"/>
							<div class="nocustom_pick">Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Blue.png"/>
							<div class="nocustom_pick">Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Brown.png"/>
							<div class="nocustom_pick">Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="6A491A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="6A491A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="6A491A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="6A491A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="6A491A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Green.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Grey.png"/>
							<div class="nocustom_pick">Solid Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A0A29F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Hot-Pink.png"/>
							<div class="nocustom_pick">Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Light-Blue.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="9ABFE5" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="9ABFE5" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="9ABFE5" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="9ABFE5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="9ABFE5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Light-Pink.png"/>
							<div class="nocustom_pick">Light Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F997B7" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F997B7" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F997B7" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F997B7" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F997B7" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Lime-Green.png"/>
							<div class="nocustom_pick">Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8CD50B" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8CD50B" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8CD50B" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8CD50B" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8CD50B" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Maroon.png"/>
							<div class="nocustom_pick">Maroon</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="891C2E" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="891C2E" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="891C2E" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="891C2E" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="891C2E" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Metallic-Gold.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="836F3D" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input  ref="836F3D" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  ref="836F3D" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="836F3D" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="836F3D" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Metallic-Silver.png"/>
							<div class="nocustom_pick">Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8D8F8C" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8D8F8C" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8D8F8C" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8D8F8C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8D8F8C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Navy-Blue.png"/>
							<div class="nocustom_pick">Navy Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="01214E" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="01214E" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="01214E" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="01214E" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="01214E" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Orange.png"/>
							<div class="nocustom_pick">Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-117.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D5A927" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D5A927" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D5A927" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D5A927" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D5A927" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-326.png"/>
							<div class="nocustom_pick">Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="00B2AC" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="00B2AC" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="00B2AC" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="00B2AC" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="00B2AC" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-528.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="AD71C5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="AD71C5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="AD71C5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="AD71C5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="AD71C5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-551.png"/>
							<div class="nocustom_pick">Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A0B8C2" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A0B8C2" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A0B8C2" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A0B8C2" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A0B8C2" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-553.png"/>
							<div class="nocustom_pick">Dark Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="22452D" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="22452D" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="22452D" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="22452D" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="22452D" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-564.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8DBDBF" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8DBDBF" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8DBDBF" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8DBDBF" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8DBDBF" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-2587.png"/>
							<div class="nocustom_pick">Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8643A4" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8643A4" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8643A4" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8643A4" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8643A4" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-3005.png"/>
							<div class="nocustom_pick">Cornflower Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="3B83CB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="3B83CB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="3B83CB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="3B83CB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="3B83CB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-4725.png"/>
							<div class="nocustom_pick">Khaki</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="B99474" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="B99474" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="B99474" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="B99474" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="B99474" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-5435.png"/>
							<div class="nocustom_pick">Blue Gray</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A1B5BE" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A1B5BE" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A1B5BE" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A1B5BE" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A1B5BE" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-7461.png"/>
							<div class="nocustom_pick">True Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0086BA" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0086BA" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0086BA" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0086BA" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0086BA" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/PANTONE-7498.png"/>
							<div class="nocustom_pick">Dark Moss Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="50582E" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="50582E" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="50582E" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="50582E" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="50582E" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Process-Blue.png"/>
							<div class="nocustom_pick">Process Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0F8CCC"  type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0F8CCC"  type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0F8CCC"  type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0F8CCC"  type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0F8CCC"  type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Red.png"/>
							<div class="nocustom_pick">Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C"  type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Reflex-Blue.png"/>
							<div class="nocustom_pick">Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="191597" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="191597" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="191597" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="191597" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="191597" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Teal.png"/>
							<div class="nocustom_pick">Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="079CA5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="079CA5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="079CA5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="079CA5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="079CA5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Violet.png"/>
							<div class="nocustom_pick">Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5A108B" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5A108B" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5A108B" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A108B" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A108B" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/White.png"/>
							<div class="nocustom_pick">White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FFFFFF" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FFFFFF" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FFFFFF" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FFFFFF" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FFFFFF" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/solid/Yellow.png"/>
							<div class="nocustom_pick">Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Home -->
					<div id="segmented-large" class="tab-pane fade js-color" data-value="0.01" data-color="Segmented">
					  <h3>Segmented Colors</h3> <button id="addCustomSegmented" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
					     <div class="col-xs-4 box-color">
							<img class="segPreviewColorModal" src="assets/images/src/custom.png"/>
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
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,0E9543" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,0E9543" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,0E9543"type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,0E9543" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,0E9543" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackMetallicGold.png"/>
							<div class="nocustom_pick">Black Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,836F3D" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,836F3D" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,836F3D" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,836F3D" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,836F3D" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackMetallicSilver.png"/>
							<div class="nocustom_pick">Black Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,8D8F8C" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,8D8F8C" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,8D8F8C" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,8D8F8C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,8D8F8C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackOrange.png"/>
							<div class="nocustom_pick">Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,EF6B01" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,EF6B01" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,EF6B01" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,EF6B01" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,EF6B01" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,5A108B" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,5A108B" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,5A108B" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,5A108B" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,5A108B" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackReflexBlue.png"/>
							<div class="nocustom_pick">Black Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,191597" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,191597" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,191597" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,191597" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,191597" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,FFFFFF" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,FFFFFF" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,FFFFFF" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FFFFFF" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FFFFFF" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlueGrey.png"/>
							<div class="nocustom_pick">Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,A0A29F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlueHotPink.png"/>
							<div class="nocustom_pick">Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BlueLightBlue.png"/>
							<div class="nocustom_pick">Blue Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,9ABFE5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,9ABFE5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,9ABFE5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="0B45BB,9ABFE5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="0B45BB,9ABFE5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/BluePANTONE267Red.png"/>
							<div class="nocustom_pick">Blue Violet Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/GreenRedYellow.png"/>
							<div class="nocustom_pick">Green Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/GreenReflexBlue.png"/>
							<div class="nocustom_pick">Green Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,191597" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,191597" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,191597" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,191597" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,191597" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/HotPinkBlackBlue.png"/>
							<div class="nocustom_pick">Hot Pink Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,000000,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,000000,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,000000,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,000000,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,000000,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,9ABFE5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,9ABFE5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,9ABFE5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,9ABFE5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,9ABFE5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/LightPinkHotPink.png"/>
							<div class="nocustom_pick">Light Pink Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,F997B7" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,F997B7" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,F997B7" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,F997B7" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,F997B7" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="891C2E,A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="891C2E,A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="891C2E,A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="891C2E,A0A29F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="891C2E,A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/OrangeBlue.png"/>
							<div class="nocustom_pick">Orange Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01,A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01,A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01,A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,A0A29F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/PANTONE103PANTONE267.png"/>
							<div class="nocustom_pick">Gold Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="C1A900,5A108B" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="C1A900,5A108B" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="C1A900,5A108B" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="C1A900,5A108B" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="C1A900,5A108B" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/PANTONE376PANTONE7459.png"/>
							<div class="nocustom_pick">Lime Green Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="7BB201,44A3BC" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="7BB201,44A3BC" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="7BB201,44A3BC" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="7BB201,44A3BC" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="7BB201,44A3BC" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RainbowSegmented.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedBlack.png"/>
							<div class="nocustom_pick">Red Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,000000" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,000000" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,000000" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedBlackYellow.png"/>
							<div class="nocustom_pick">Red Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,000000,F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000,F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedBlue.png"/>
							<div class="nocustom_pick">Red Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedBlueHotPink.png"/>
							<div class="nocustom_pick">Red Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedBlueYellow.png"/>
							<div class="nocustom_pick">Red Blue Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,0E9543" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,0E9543" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,0E9543" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0E9543" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0E9543" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,A0A29F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedHotPink.png"/>
							<div class="nocustom_pick">Red Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedPANTONE267Black.png"/>
							<div class="nocustom_pick">Red Violet Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,5A108B,000000" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,5A108B,000000" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick">Red Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,419DB5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,419DB5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,419DB5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,419DB5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,419DB5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedPink.png"/>
							<div class="nocustom_pick">Red Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FB78B2" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FB78B2" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FB78B2" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FB78B2" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FB78B2" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedWhiteGreen.png"/>
							<div class="nocustom_pick">Red White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EA0D2C,F2E80F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EA0D2C,F2E80F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EA0D2C,F2E80F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,F2E80F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,F2E80F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteBlackOrange.png"/>
							<div class="nocustom_pick">White Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01,FEFEFE,000000" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,FEFEFE,000000" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteBlue.png"/>
							<div class="nocustom_pick">White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EFEFE,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EFEFE,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EFEFE,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EFEFE,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EFEFE,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteBluePANTONE267.png"/>
							<div class="nocustom_pick">White Blue Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteBrown.png"/>
							<div class="nocustom_pick">White Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,6A491A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,6A491A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,6A491A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,6A491A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,6A491A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteGreen.png"/>
							<div class="nocustom_pick">White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,0E9543" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,0E9543" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,0E9543" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,0E9543" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,0E9543" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteGrey.png"/>
							<div class="nocustom_pick">White Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,A0A29F" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,A0A29F" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,A0A29F" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,A0A29F"  type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,A0A29F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteHotPink.png"/>
							<div class="nocustom_pick">White Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,FD029A" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,FD029A" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,FD029A" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FD029A" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FD029A" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteLightBlue.png"/>
							<div class="nocustom_pick">White Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,9ABFE5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,9ABFE5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteLimeGreen.png"/>
							<div class="nocustom_pick">White Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,8CD50B" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,8CD50B" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,8CD50B" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,8CD50B" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,8CD50B" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteOrange.png"/>
							<div class="nocustom_pick">White Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,EF6B01" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,EF6B01" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,EF6B01" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EF6B01" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EF6B01" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhitePANTONE528.png"/>
							<div class="nocustom_pick">White Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,AD71C5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,AD71C5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,AD71C5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,AD71C5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,AD71C5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhitePink.png"/>
							<div class="nocustom_pick">White Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,FB78B2" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,FB78B2" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,FB78B2" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FB78B2" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FB78B2" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteRed.png"/>
							<div class="nocustom_pick">White Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,EA0D2C" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EA0D2C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/WhiteTeal.png"/>
							<div class="nocustom_pick">White Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,079CA5" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,079CA5" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,079CA5" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,079CA5" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,079CA5" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/large/segmented/YellowBlue.png"/>
							<div class="nocustom_pick">Yellow Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F2E80F,0B45BB" type="number" name="adult-large-qty" class="qtyin-adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F2E80F,0B45BB" type="number" name="medium-large-qty" class="qtyin-medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F2E80F,0B45BB" type="number" name="youth-large-qty" class="qtyin-youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F,0B45BB" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F,0B45BB" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					 </div>
					</div>
					<!-- End Segmented -->
					<div id="swirls-large" class="tab-pane fade js-color" data-value="0.01" data-color="Swirls">
					  <h3 style="width:auto;">Swirls Color</h3> <button id="addCustomSwirl" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img class="swlPreviewColorModal" src="assets/images/src/custom.png"/>
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
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlackOrange.png"/>
							<div class="nocustom_pick">Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EB6900,080400" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EB6900,080400" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EB6900,080400" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EB6900,080400" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EB6900,080400" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlackOrangeLightBlue.png"/>
							<div class="nocustom_pick">Black Orange Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EF6B01,040200,97BCE1" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EF6B01,040200,97BCE1" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EF6B01,040200,97BCE1" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,040200,97BCE1" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,040200,97BCE1" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlackPantone267.png"/>
							<div class="nocustom_pick">Black Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,560F88" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,560F88" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,560F88" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,560F88" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,560F88" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlueBlack.png"/>
							<div class="nocustom_pick">Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="093EAB,000206" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="093EAB,000206" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="093EAB,000206" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="093EAB,000206" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="093EAB,000206" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlueRed.png"/>
							<div class="nocustom_pick">Blue Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="293CA6,E00E31" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="293CA6,E00E31" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="293CA6,E00E31" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="293CA6,E00E31" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="293CA6,E00E31" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlueWhite.png"/>
							<div class="nocustom_pick">Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F3F6FC,0D46BA" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F3F6FC,0D46BA" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F3F6FC,0D46BA" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F3F6FC,0D46BA" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F3F6FC,0D46BA" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/BlueWhiteBrown.png"/>
							<div class="nocustom_pick">Blue White Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="1144AE,664921,F3F1ED" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="1144AE,664921,F3F1ED" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="1144AE,664921,F3F1ED" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="1144AE,664921,F3F1ED" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="1144AE,664921,F3F1ED" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/DesertCamoflage.png"/>
							<div class="nocustom_pick">Desert Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="4E4726,DECE76,6B5619" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="4E4726,DECE76,6B5619"  type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/GreenCamoflage.png"/>
							<div class="nocustom_pick">Green Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,BE8B5E,64631C" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,BE8B5E,64631C" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/LightBlueWhite.png"/>
							<div class="nocustom_pick">Light Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="ABCBEA,FCFDFE" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="ABCBEA,FCFDFE" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="ABCBEA,FCFDFE" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="ABCBEA,FCFDFE" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="ABCBEA,FCFDFE" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/LimeGreenWhite.png"/>
							<div class="nocustom_pick">Light Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="9BDB2B,FCFDFE" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="9BDB2B,FCFDFE" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="9BDB2B,FCFDFE" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="9BDB2B,FCFDFE" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="9BDB2B,FCFDFE" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/LmGreenLtBlueYellowWhite.png"/>
							<div class="nocustom_pick">Lime Green Yellow Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8FD040,97C1CC,F0E711" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8FD040,97C1CC,F0E711" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/OrangeWhite.png"/>
							<div class="nocustom_pick">Orange White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F17A19,FFFCF9" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F17A19,FFFCF9" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F17A19,FFFCF9" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F17A19,FFFCF9" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F17A19,FFFCF9" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/Pantone528White.png"/>
							<div class="nocustom_pick">Purple White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="AE72C5,FEFDFE" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="AE72C5,FEFDFE" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="AE72C5,FEFDFE" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="AE72C5,FEFDFE" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="AE72C5,FEFDFE" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/PinkLtBlueLmGreen.png"/>
							<div class="nocustom_pick">Pink Light Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F878B3,99BFE5,8CD60D" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F878B3,99BFE5,8CD60D" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F878B3,99BFE5,8CD60D" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F878B3,99BFE5,8CD60D" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F878B3,99BFE5,8CD60D" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/Rainbow.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F4303D,FEDE1E,2230A9" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F4303D,FEDE1E,2230A9" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/RedBlack.png"/>
							<div class="nocustom_pick">Red Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="E10C29,040001" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="E10C29,040001" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="E10C29,040001" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="E10C29,040001" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="E10C29,040001" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,178B41" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,178B41" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,178B41" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,178B41" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,178B41" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/RedWhite.png"/>
							<div class="nocustom_pick">Red White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,FFFFFF" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,FFFFFF" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,FFFFFF" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,FFFFFF" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,FFFFFF" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/RoyalBlueWhite.png"/>
							<div class="nocustom_pick">Royal Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="11277F,FFFFFF" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="11277F,FFFFFF" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="11277F,FFFFFF" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="11277F,FFFFFF" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="11277F,FFFFFF" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/TealWhite.png"/>
							<div class="nocustom_pick">Teal White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,1CA4AD" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,1CA4AD" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/VioletLtBlueWhite.png"/>
							<div class="nocustom_pick">Violet Light Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5A118D,A2C5E7,F5F9FC" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5A118D,A2C5E7,F5F9FC" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5A118D,A2C5E7,F5F9FC" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A118D,A2C5E7,F5F9FC" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A118D,A2C5E7,F5F9FC" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/WhiteGreen.png"/>
							<div class="nocustom_pick">White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,05461F" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,05461F" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,05461F" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,05461F" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,05461F" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/WhiteGrey.png"/>
							<div class="nocustom_pick">White Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,A4A7A2" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,A4A7A2" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,A4A7A2" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,A4A7A2" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,A4A7A2" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/WhitePink.png"/>
							<div class="nocustom_pick">White Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,F97BB4" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,F97BB4" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,F97BB4" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,F97BB4" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,F97BB4" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/WhiteYellow.png"/>
							<div class="nocustom_pick">White Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,F3EA22" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,F3EA22" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,F3EA22" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,F3EA22" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,F3EA22" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images//large/swirl/WhiteYellowBrown.png"/>
							<div class="nocustom_pick">White Yellow Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,F3EA22,6B4919" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,F3EA22,6B4919" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,F3EA22,6B4919" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,F3EA22,6B4919" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,F3EA22,6B4919" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Swirl -->
					<div id="glow-large" class="tab-pane fade js-color" data-value="0.03" data-color="Glow">
					  <h3>Glow</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkBLUE.png"/>
							<div class="nocustom_pick">Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="3886C4" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="3886C4" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="3886C4" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="3886C4" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="3886C4" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkGREEN.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5DCE66" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5DCE66" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5DCE66" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5DCE66" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5DCE66" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPINK.png"/>
							<div class="nocustom_pick">Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D57DA3" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D57DA3" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D57DA3" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D57DA3" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D57DA3" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A078AD" type="number" name="adult-large-qty" class="adult-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A078AD" type="number" name="medium-large-qty" class="medium-large-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A078AD" type="number" name="youth-large-qty" class="youth-large-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A078AD" type="number" name="xt-small-large-qty" class="xt-small-large-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A078AD" type="number" name="xt-large-large-qty" class="xt-large-large-qty" placeholder="0"/></div>
							</div>
						</div>
					  </div>
					</div>
					<!-- End Glow Color -->
				  </div>
				  <!--	End Tab Content -->
				</div>