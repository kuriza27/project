<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">3</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Color and  Quantity <i>(*Minimum of 20)</i> </div>
					<div class="clearfix"></div>
			</div>
			<div id="wrist_color_container">

				  <ul class="nav nav-pills js-colors">
					<li class="active" data-color-style="solid">
						<a data-toggle="pill" data-value="0" href="#home-fig-reg">Solid</a>
					</li>
					<li data-color-style="segmented">
						<a data-toggle="pill" href="#segmented-fig-reg" data-value="0.01">Segmented</a>
					</li>
					<li data-color-style="swirls">
						<a data-toggle="pill" href="#swirls-fig-reg" data-value="0.01">Swirls</a>
					</li>
					<li data-color-style="glow">
						<a data-toggle="pill" href="#glow-fig-reg" data-value="0.03">Glow</a>
					</li>
				  </ul>

				  <div class="tab-content">
					<div id="home-fig-reg" class="tab-pane fade in active js-color" data-value="0" data-color="Solid">
					  <h3>Solid Colors</h3> <button id="addCustomFiguredSolid" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
					  <div class="col-xs-4 box-color">
							<img class="PreviewFigColorModal" src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorFigRegModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorFigRegModal" role="dialog">
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Black.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Brown.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="6A491A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="6A491A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Green.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Grey.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/HotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/LightBlue.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/LightPink.png"/>
							<div class="nocustom_pick">Light Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F997B7" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F997B7" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F997B7" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F997B7" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F997B7" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/LimeGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8CD50B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8CD50B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Pantone202.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="891C2E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="891C2E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Pantone125.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="836F3D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="836F3D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/RoyalBlue.png"/>
							<div class="nocustom_pick">Royal Blue</div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="01214E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="01214E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Orange.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Pantone729.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="B99474" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="B99474" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Red.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Teal.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="079CA5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="079CA5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/White.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/solid/Yellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Home -->
					<div id="segmented-fig-reg" class="tab-pane fade js-color" data-value="0.01" data-color="Segmented">
					  <h3>Segmented Colors</h3> <button id="addCustomFiguredSegmented" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
					     <div class="col-xs-4 box-color">
							<img class="segPreviewFigColorModal" src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorFigRegSegModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorFigRegSegModal" role="dialog">
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackHotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackMetallicGold.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,836F3D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,836F3D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackMetallicSilver.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,8D8F8C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,8D8F8C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackOrange.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackPANTONE267.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,5A108B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,5A108B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackWhite.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlackYellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlueGrey.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlueHotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BlueLightBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  ref="0B45BB,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  ref="0B45BB,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/BluePANTONE267Red.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/GreenRedYellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/GreenReflexBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,191597" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,191597" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/HotPinkBlackYellow.png"/>
							<div class="nocustom_pick">Hot Pink Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FD029A,000000,F8FC1B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FD029A,000000,F8FC1B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FD029A,000000,F8FC1B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,000000,F8FC1B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,000000,F8FC1B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/HotPinkLightBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FD029A,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FD029A,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/PANTONE376PANTONE7459.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="7BB201,44A3BC" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="7BB201,44A3BC" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RainbowFigured.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedBlack.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedBlackYellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,000000,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,000000,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedBlueHotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedBlueYellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedGrey.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedHotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedPANTONE267Black.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,5A108B,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,5A108B,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick">Red Light Blue</div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,419DB5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,419DB5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FB78B2" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FB78B2" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedWhiteBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedWhiteGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/RedYellow.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EA0D2C,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EA0D2C,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteBlackOrange.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EF6B01,FEFEFE,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EF6B01,FEFEFE,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteBluePANTONE267.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteBrown.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,6A491A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,6A491A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteGrey.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,A0A29F"  type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteHotPink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteLightBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteLimeGreen.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,8CD50B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,8CD50B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteOrange.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhitePANTONE528.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,AD71C5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,AD71C5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhitePink.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,FB78B2" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,FB78B2" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteRed.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/WhiteTeal.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,079CA5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,079CA5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/segmented/YellowBlue.png"/>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F2E80F,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F2E80F,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					 </div>
					</div>
					<!-- End Segmented -->
					<div id="swirls-fig-reg" class="tab-pane fade js-color" data-value="0.01" data-color="Swirls">
					  <h3 style="width:auto;">Swirls Color</h3> <button id="addCustomFiguredSwirl" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img class="swlPreviewFigColorModal" src="assets/images/src/custom.png"/>
							<button id="custom-color-button" data-toggle="modal" data-target="#ColorFigRegSwirlModal">Custom Color</button>
							<!--------Modal---------->
							<div class="modal fade" id="ColorFigRegSwirlModal" role="dialog">
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
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="021509,0C9040"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="021509,0C9040" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="021509,0C9040" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="021509,0C9040" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="021509,0C9040" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackGrey.png"/>
							<div class="nocustom_pick">Black Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,9DA09C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,9DA09C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,9DA09C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,9DA09C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,9DA09C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E5028B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E5028B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E5028B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E5028B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E5028B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,560F88" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,560F88" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,560F88" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,560F88" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,560F88" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackRed.png"/>
							<div class="nocustom_pick">Black Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E30C2A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E30C2A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E30C2A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E30C2A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E30C2A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,F3F3F3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,F3F3F3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,F3F3F3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,F3F3F3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,F3F3F3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="070707,E4DA0E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="070707,E4DA0E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="070707,E4DA0E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="070707,E4DA0E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="070707,E4DA0E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlueLimeGreen.png"/>
							<div class="nocustom_pick">Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="1753A6,8AD40C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="1753A6,8AD40C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="1753A6,8AD40C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="1753A6,8AD40C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="1753A6,8AD40C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/BlueWhite.png"/>
							<div class="nocustom_pick">Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F3F6FC,0D46BA" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F3F6FC,0D46BA" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F3F6FC,0D46BA" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F3F6FC,0D46BA" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F3F6FC,0D46BA" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F3F6FC,174830" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F3F6FC,174830" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F3F6FC,174830" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F3F6FC,174830" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F3F6FC,174830" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/DesertCamo.png"/>
							<div class="nocustom_pick">Desert Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="4E4726,DECE76,6B5619" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="4E4726,DECE76,6B5619"  type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="4E4726,DECE76,6B5619" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/GreenCamo.png"/>
							<div class="nocustom_pick">Green Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000000,BE8B5E,64631C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000000,BE8B5E,64631C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000000,BE8B5E,64631C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/GreenWhite.png"/>
							<div class="nocustom_pick">Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FBFCFC,009B4F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FBFCFC,009B4F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FBFCFC,009B4F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FBFCFC,009B4F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FBFCFC,009B4F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="E22FAB,9BBAE3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="E22FAB,9BBAE3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="E22FAB,9BBAE3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="E22FAB,9BBAE3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="E22FAB,9BBAE3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/HotPinkLightBlueLimeGreen.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="98C0D7,8FCF49,F90599" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="98C0D7,8FCF49,F90599" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="98C0D7,8FCF49,F90599" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="98C0D7,8FCF49,F90599" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="98C0D7,8FCF49,F90599" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FBFCFC,11442B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FBFCFC,11442B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FBFCFC,11442B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FBFCFC,11442B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FBFCFC,11442B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/LimeGreenYellowLightBlue.png"/>
							<div class="nocustom_pick">Lime Green Yellow Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8FD040,97C1CC,F0E711" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8FD040,97C1CC,F0E711" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8FD040,97C1CC,F0E711" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="8A2232,A0A19D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="8A2232,A0A19D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="8A2232,A0A19D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="8A2232,A0A19D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="8A2232,A0A19D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/OrangeWhite.png"/>
							<div class="nocustom_pick">Orange White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F17A19,FFFCF9" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F17A19,FFFCF9" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F17A19,FFFCF9" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F17A19,FFFCF9" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F17A19,FFFCF9" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/PANTONE267White.png"/>
							<div class="nocustom_pick">Violet White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="773BA1,FBF9FC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="773BA1,FBF9FC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="773BA1,FBF9FC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="773BA1,FBF9FC" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="773BA1,FBF9FC" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/PinkPANTONE267.png"/>
							<div class="nocustom_pick">Pink Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="681990,F574B1" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="681990,F574B1" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="681990,F574B1" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="681990,F574B1" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="681990,F574B1" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RainbowSwirl.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F4303D,FEDE1E,2230A9" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F4303D,FEDE1E,2230A9" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F4303D,FEDE1E,2230A9" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedBlackBlue.png"/>
							<div class="nocustom_pick">Red Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="E10D30,08389E,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="E10D30,08389E,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="E10D30,08389E,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="E10D30,08389E,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="E10D30,08389E,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,178B41" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,178B41" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,178B41" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,178B41" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,178B41" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,A1A19C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,A1A19C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,A1A19C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,A1A19C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,A1A19C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedWhite.png"/>
							<div class="nocustom_pick">Red White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D9152C,FFFFFF,0F42B6" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D9152C,FFFFFF,0F42B6"type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="EB2328,F2E50F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="EB2328,F2E50F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="EB2328,F2E50F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="EB2328,F2E50F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="EB2328,F2E50F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/ReflexBlueBlack.png"/>
							<div class="nocustom_pick">Reflex Blue Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="000001,120F6D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="000001,120F6D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="000001,120F6D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="000001,120F6D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="000001,120F6D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/ReflexBlueGrey.png"/>
							<div class="nocustom_pick">Reflex Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="242097,999C9E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="242097,999C9E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="242097,999C9E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="242097,999C9E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="242097,999C9E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/TealWhite.png"/>
							<div class="nocustom_pick">Teal White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,1CA4AD" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,1CA4AD" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,1CA4AD" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/swirl/WhiteBlackGreen.png"/>
							<div class="nocustom_pick">White Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="FEFEFE,000000,05461F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="FEFEFE,000000,05461F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="FEFEFE,000000,05461F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="FEFEFE,000000,05461F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="FEFEFE,000000,05461F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Swirl -->
					<div id="glow-fig-reg" class="tab-pane fade js-color" data-value="0.03" data-color="Glow">
					  <h3>Glow</h3>
					  <div id="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/glow/GlowDarkFIGUREDBLUE.png"/>
							<div class="nocustom_pick">Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="3886C4" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="3886C4" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="3886C4" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="3886C4" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="3886C4" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/glow/GlowDarkFIGUREDGREEN.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="5DCE66" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="5DCE66" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="5DCE66" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="5DCE66" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="5DCE66" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/glow/GlowDarkFIGUREDPINK.png"/>
							<div class="nocustom_pick">Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="D57DA3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="D57DA3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="D57DA3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="D57DA3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="D57DA3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/glow/GlowDarkFIGUREDPURPLE.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="A078AD" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="A078AD" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="A078AD" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="A078AD" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="A078AD" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/figured/glow/GlowDarkFIGUREDWHITE.png"/>
							<div class="nocustom_pick">White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input ref="F5F5F5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input ref="F5F5F5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input ref="F5F5F5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
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
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input ref="F5F5F5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input ref="F5F5F5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
					  </div>
					</div>
					<!-- End Glow Color -->
				  </div>
				  <!--	End Tab Content -->
				</div>