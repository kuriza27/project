<div class="row offer-bar margin-bootom-20 __web-inspector-hide-shortcut__">
				<div class="col-xs-3 col-sm-2 offerpv float-left">Step <span class="sRename">3</span></div>
				<div class="col-xs-9 col-sm-10 offer-details float-left">Select Wristband Color and  Quantity <i>(*Minimum of 20)</i> </div>
					<div class="clearfix"></div>
			</div>
			<div id="wrist_color_container" class="wrist_color_container">

				  <ul class="nav nav-pills js-color">
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
					  <h3>Solid Colors</h3> <button id="addCustomSolid" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content" class="main-color-content">
					  <div class="col-xs-4 box-color">
							<img class="PreviewColorModal" src="assets/images/src/custom.png"/>
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
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Black.png"/>
							<div class="nocustom_pick">Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black" ref="000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black"  ref="000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black" ref="000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black" ref="000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black" ref="000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Brown.png"/>
							<div class="nocustom_pick">Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Brown"  ref="6A491A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Brown" ref="6A491A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Brown" ref="6A491A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Brown" ref="6A491A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Brown" ref="6A491A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Green.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Green" ref="0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Green" ref="0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Green" ref="0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Green" ref="0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Green" ref="0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Grey.png"/>
							<div class="nocustom_pick">Solid Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Grey" ref="A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Grey" ref="A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Grey" ref="A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Grey" ref="A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Grey" ref="A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/HotPink.png"/>
							<div class="nocustom_pick">Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Hot Pink" ref="FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Hot Pink" ref="FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Hot Pink" ref="FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Hot Pink" ref="FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Hot Pink" ref="FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightBlue.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Light Blue" ref="9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Light Blue" ref="9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Light Blue" ref="9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Light Blue" ref="9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Light Blue" ref="9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LightPink.png"/>
							<div class="nocustom_pick">Light Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Light Pink" ref="F997B7" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Light Pink" ref="F997B7" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Light Pink" ref="F997B7" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Light Pink" ref="F997B7" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Light Pink" ref="F997B7" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/LimeGreen.png"/>
							<div class="nocustom_pick">Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Lime Green" ref="8CD50B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Lime Green" ref="8CD50B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Lime Green" ref="8CD50B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Lime Green" ref="8CD50B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Lime Green" ref="8CD50B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Maroon.png"/>
							<div class="nocustom_pick">Maroon</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Marooon" ref="891C2E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Marooon" ref="891C2E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Marooon" ref="891C2E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Marooon" ref="891C2E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Marooon" ref="891C2E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicGold.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Metallic Gold" ref="836F3D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Metallic Gold" ref="836F3D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Metallic Gold" ref="836F3D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  reftitle="Metallic Gold" ref="836F3D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  reftitle="Metallic Gold" ref="836F3D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/MetallicSilver.png"/>
							<div class="nocustom_pick">Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input  reftitle="Metallic Silver" ref="8D8F8C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input 	reftitle="Metallic Silver"ref="8D8F8C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  reftitle="Metallic Silver" ref="8D8F8C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Metallic Silver" ref="8D8F8C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Metallic Silver" ref="8D8F8C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/NavyBlue.png"/>
							<div class="nocustom_pick">Navy Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Navy Blue" ref="01214E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Navy Blue" ref="01214E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Navy Blue" ref="01214E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Navy Blue" ref="01214E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Navy Blue" ref="01214E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Orange.png"/>
							<div class="nocustom_pick">Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Orange" ref="EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Orange" ref="EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Orange" ref="EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Orange" ref="EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Orange" ref="EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE117.png"/>
							<div class="nocustom_pick">Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 117" ref="D5A927" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 117" ref="D5A927" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 117" ref="D5A927" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 117" ref="D5A927" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 117" ref="D5A927" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE326.png"/>
							<div class="nocustom_pick">Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 326" ref="00B2AC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 326" ref="00B2AC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 326" ref="00B2AC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 326" ref="00B2AC" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 326" ref="00B2AC" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE528.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 528" ref="AD71C5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 528" ref="AD71C5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 528" ref="AD71C5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 528" ref="AD71C5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 528" ref="AD71C5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE551.png"/>
							<div class="nocustom_pick">Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 551" ref="A0B8C2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 551" ref="A0B8C2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 551" ref="A0B8C2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 551" ref="A0B8C2" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 551"  ref="A0B8C2" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE553.png"/>
							<div class="nocustom_pick">Dark Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 553"  ref="22452D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 553" ref="22452D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 553"  ref="22452D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 553"  ref="22452D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 553"  ref="22452D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE564.png"/>
							<div class="nocustom_pick">Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 564" ref="8DBDBF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 564"ref="8DBDBF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 564"ref="8DBDBF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 564" ref="8DBDBF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 564" ref="8DBDBF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE2587.png"/>
							<div class="nocustom_pick">Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 2587" ref="8643A4" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 2587" ref="8643A4" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 2587" ref="8643A4" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 2587" ref="8643A4" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 2587" ref="8643A4" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE3005.png"/>
							<div class="nocustom_pick">Cornflower Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 3005" ref="3B83CB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 3005" ref="3B83CB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 3005" ref="3B83CB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 3005" ref="3B83CB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 3005" ref="3B83CB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE4725.png"/>
							<div class="nocustom_pick">Khaki</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 4725" ref="B99474" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 4725" ref="B99474" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 4725" ref="B99474" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 4725" ref="B99474" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 4725" ref="B99474" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE5435.png"/>
							<div class="nocustom_pick">Blue Gray</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 5435" ref="A1B5BE" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 5435" ref="A1B5BE" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 5435" ref="A1B5BE" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 5435" ref="A1B5BE" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 5435" ref="A1B5BE" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7461.png"/>
							<div class="nocustom_pick">True Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 461" ref="0086BA" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 461" ref="0086BA" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 461" ref="0086BA" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 461" ref="0086BA" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 461" ref="0086BA" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/PANTONE7498.png"/>
							<div class="nocustom_pick">Dark Moss Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone 498" ref="50582E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone 498" ref="50582E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone 498" ref="50582E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone 498" ref="50582E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone 498" ref="50582E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ProcessBlue.png"/>
							<div class="nocustom_pick">Process Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Process Blue" ref="0F8CCC"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Process Blue" ref="0F8CCC"  type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Process Blue" ref="0F8CCC"  type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Process Blue" ref="0F8CCC"  type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Process Blue" ref="0F8CCC"  type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Red.png"/>
							<div class="nocustom_pick">Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red" ref="EA0D2C"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red" ref="EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red" ref="EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red" ref="EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red" ref="EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/ReflexBlue.png"/>
							<div class="nocustom_pick">Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Reflex Blue" ref="191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Reflex Blue" ref="191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Reflex Blue" ref="191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Reflex Blue" ref="191597" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Reflex Blue" ref="191597" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Teal.png"/>
							<div class="nocustom_pick">Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Teal" ref="079CA5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Teal" ref="079CA5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Teal" ref="079CA5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Teal" ref="079CA5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Teal" ref="079CA5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Violet.png"/>
							<div class="nocustom_pick">Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Violet" ref="5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Violet" ref="5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Violet" ref="5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Violet" ref="5A108B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Violet" ref="5A108B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/White.png"/>
							<div class="nocustom_pick">White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White" ref="FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White" ref="FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White" ref="FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White" ref="FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White" ref="FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/solid/Yellow.png"/>
							<div class="nocustom_pick">Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Yellow" ref="F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Yellow" ref="F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Yellow" ref="F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Yellow" ref="F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Yellow" ref="F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Home -->
					<div id="segmented" class="tab-pane fade js-color" data-value="0.01" data-color="Segmented">
					  <h3>Segmented Colors</h3> <button id="addCustomSegmented" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content" class="main-color-content">
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
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Green" ref="000000,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Green" ref="000000,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Green" ref="000000,0E9543"type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Green" ref="000000,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Green" ref="000000,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Hot Pink" ref="000000,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Hot Pink" ref="000000,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Hot Pink" ref="000000,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Hot Pink" ref="000000,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Hot Pink" ref="000000,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicGold.png"/>
							<div class="nocustom_pick">Black Metallic Gold</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Metallic Gold" ref="000000,836F3D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Metallic Gold" ref="000000,836F3D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Metallic Gold" ref="000000,836F3D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Metallic Gold" ref="000000,836F3D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Metallic Gold" ref="000000,836F3D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackMetallicSilver.png"/>
							<div class="nocustom_pick">Black Metallic Silver</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Metallic Silver" ref="000000,8D8F8C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Metallic Silver" ref="000000,8D8F8C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Metallic Silver" ref="000000,8D8F8C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Metallic Silver" ref="000000,8D8F8C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Metallic Silver" ref="000000,8D8F8C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackOrange.png"/>
							<div class="nocustom_pick">Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Orange" ref="000000,EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Orange" ref="000000,EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Orange" ref="000000,EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Orange" ref="000000,EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Orange" ref="000000,EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Pantone 267" ref="000000,5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Pantone 267" ref="000000,5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Pantone 267" ref="000000,5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Pantone 267" ref="000000,5A108B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Pantone 267" ref="000000,5A108B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackReflexBlue.png"/>
							<div class="nocustom_pick">Black Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Reflex Blue" ref="000000,191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Reflex Blue" ref="000000,191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Reflex Blue" ref="000000,191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Reflex Blue" ref="000000,191597" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Reflex Blue" ref="000000,191597" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black White" ref="000000,FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black White" ref="000000,FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black White" ref="000000,FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black White" ref="000000,FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black White" ref="000000,FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Yellow" ref="000000,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Yellow" ref="000000,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Yellow" ref="000000,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Yellow" ref="000000,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Yellow" ref="000000,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueGrey.png"/>
							<div class="nocustom_pick">Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue Grey" ref="0B45BB,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue Grey" ref="0B45BB,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue Grey" ref="0B45BB,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Blue Grey" ref="0B45BB,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Blue Grey" ref="0B45BB,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueHotPink.png"/>
							<div class="nocustom_pick">Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue Hot Pink" ref="0B45BB,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue Hot Pink" ref="0B45BB,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue Hot Pink" ref="0B45BB,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Blue Hot Pink" ref="0B45BB,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Blue Hot Pink" ref="0B45BB,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BlueLightBlue.png"/>
							<div class="nocustom_pick">Blue Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue Light Blue" ref="0B45BB,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue Light Blue" ref="0B45BB,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue Light Blue" ref="0B45BB,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  reftitle="Blue Light Blue" ref="0B45BB,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  reftitle="Blue Light Blue" ref="0B45BB,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/BluePANTONE267Red.png"/>
							<div class="nocustom_pick">Blue Violet Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue Pantone267 Red" ref="0B45BB,5A108B,EA0D2C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue Pantone267 Red" ref="0B45BB,5A108B,EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue Pantone267 Red" ref="0B45BB,5A108B,EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Blue Pantone267 Red" ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Blue Pantone267 Red" ref="0B45BB,5A108B,EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenRedYellow.png"/>
							<div class="nocustom_pick">Green Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Green Red Yellow" ref="0E9543,EA0D2C,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Green Red Yellow" ref="0E9543,EA0D2C,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Green Red Yellow" ref="0E9543,EA0D2C,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Green Red Yellow" ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Green Red Yellow" ref="0E9543,EA0D2C,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/GreenReflexBlue.png"/>
							<div class="nocustom_pick">Green Reflex Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Green Reflex Blue" ref="0E9543,191597" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Green Reflex Blue" ref="0E9543,191597" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Green Reflex Blue" ref="0E9543,191597" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Green Reflex Blue" ref="0E9543,191597" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Green Reflex Blue" ref="0E9543,191597" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkBlackBlue.png"/>
							<div class="nocustom_pick">Hot Pink Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Hot Pink Black Blue" ref="FD029A,000000,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Hot Pink Black Blue" ref="FD029A,000000,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Hot Pink Black Blue" ref="FD029A,000000,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Hot Pink Black Blue" ref="FD029A,000000,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Hot Pink Black Blue" ref="FD029A,000000,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Hot Pink Light Blue" ref="FD029A,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Hot Pink Light Blue" ref="FD029A,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Hot Pink Light Blue" ref="FD029A,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Hot Pink Light Blue" ref="FD029A,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Hot Pink Light Blue" ref="FD029A,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/LightPinkHotPink.png"/>
							<div class="nocustom_pick">Light Pink Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Light Pink Hot Pink" ref="FD029A,F997B7" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Light Pink Hot Pink" ref="FD029A,F997B7" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Light Pink Hot Pink" ref="FD029A,F997B7" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Light Pink Hot Pink" ref="FD029A,F997B7" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Light Pink Hot Pink" ref="FD029A,F997B7" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Maroon Grey" ref="891C2E,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Maroon Grey" ref="891C2E,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Maroon Grey" ref="891C2E,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Maroon Grey" ref="891C2E,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Maroon Grey" ref="891C2E,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/OrangeBlue.png"/>
							<div class="nocustom_pick">Orange Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Orange Blue" ref="EF6B01,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Orange Blue" ref="EF6B01,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Orange Blue" ref="EF6B01,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  reftitle="Orange Blue" ref="EF6B01,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  reftitle="Orange Blue" ref="EF6B01,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE103.png"/>
							<div class="nocustom_pick">Gold Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Gold Purple" ref="C1A900,5A108B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Gold Purple" ref="C1A900,5A108B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Gold Purple" ref="C1A900,5A108B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Gold Purple" ref="C1A900,5A108B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Gold Purple" ref="C1A900,5A108B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/PANTONE376.png"/>
							<div class="nocustom_pick">Lime Green Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Lime Green Light Blue" ref="7BB201,44A3BC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Lime Green Light Blue" ref="7BB201,44A3BC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Lime Green Light Blue" ref="7BB201,44A3BC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Lime Green Light Blue" ref="7BB201,44A3BC" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Lime Green Light Blue" ref="7BB201,44A3BC" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RainbowSegmented.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Rainbow" ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Rainbow" ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Rainbow" ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Rainbow" ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Rainbow" ref="0E9543,F2E80F,EF6B01,EA0D2C,5A108B,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlack.png"/>
							<div class="nocustom_pick">Red Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Black" ref="EA0D2C,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Black" ref="EA0D2C,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Black" ref="EA0D2C,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Black" ref="EA0D2C,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Black" ref="EA0D2C,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlackYellow.png"/>
							<div class="nocustom_pick">Red Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Black Yellow" ref="EA0D2C,000000,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Black Yellow" ref="EA0D2C,000000,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Black Yellow" ref="EA0D2C,000000,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Black Yellow" ref="EA0D2C,000000,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Black Yellow" ref="EA0D2C,000000,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlue.png"/>
							<div class="nocustom_pick">Red Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Blue" ref="EA0D2C,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Blue" ref="EA0D2C,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Blue" ref="EA0D2C,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Blue" ref="EA0D2C,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Blue" ref="EA0D2C,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueHotPink.png"/>
							<div class="nocustom_pick">Red Blue Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Blue Hot Pink" ref="EA0D2C,0B45BB,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Blue Hot Pink"ref="EA0D2C,0B45BB,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Blue Hot Pink"ref="EA0D2C,0B45BB,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Blue Hot Pink" ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Blue Hot Pink" ref="EA0D2C,0B45BB,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedBlueYellow.png"/>
							<div class="nocustom_pick">Red Blue Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Blue Yellow" ref="EA0D2C,0B45BB,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Blue Yellow" ref="EA0D2C,0B45BB,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Blue Yellow" ref="EA0D2C,0B45BB,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Blue Yellow" ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Blue Yellow" ref="EA0D2C,0B45BB,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Green" ref="EA0D2C,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Green" ref="EA0D2C,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Green" ref="EA0D2C,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Green" ref="EA0D2C,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Green" ref="EA0D2C,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Grey" ref="EA0D2C,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Grey"ref="EA0D2C,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Grey"ref="EA0D2C,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Grey" ref="EA0D2C,A0A29F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Grey" ref="EA0D2C,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedHotPink.png"/>
							<div class="nocustom_pick">Red Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Hot Pink" ref="EA0D2C,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Hot Pink" ref="EA0D2C,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Hot Pink" ref="EA0D2C,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Hot Pink" ref="EA0D2C,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Hot Pink" ref="EA0D2C,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE267Black.png"/>
							<div class="nocustom_pick">Red Violet Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Pantone267 Black" ref="EA0D2C,5A108B,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Pantone267 Black" ref="EA0D2C,5A108B,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Pantone267 Black" ref="EA0D2C,5A108B,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Pantone267 Black" ref="EA0D2C,5A108B,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Pantone267 Black" ref="EA0D2C,5A108B,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPANTONE7459.png"/>
							<div class="nocustom_pick">Red Blue Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Pantone7459 Green" ref="EA0D2C,419DB5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Pantone7459 Green" ref="EA0D2C,419DB5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Pantone7459 Green" ref="EA0D2C,419DB5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Pantone7459 Green" ref="EA0D2C,419DB5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Pantone7459 Green" ref="EA0D2C,419DB5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedPink.png"/>
							<div class="nocustom_pick">Red Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Pink" ref="EA0D2C,FB78B2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Pink" ref="EA0D2C,FB78B2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Pink" ref="EA0D2C,FB78B2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Pink" ref="EA0D2C,FB78B2" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Pink" ref="EA0D2C,FB78B2" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red White Blue" ref="EA0D2C,FEFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red White Blue" ref="EA0D2C,FEFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red White Blue" ref="EA0D2C,FEFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red White Blue" ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red White Blue" ref="EA0D2C,FEFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedWhiteGreen.png"/>
							<div class="nocustom_pick">Red White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red White Green" ref="EA0D2C,FEFEFE,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red White Green" ref="EA0D2C,FEFEFE,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red White Green" ref="EA0D2C,FEFEFE,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red White Green" ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red White Green"  ref="EA0D2C,FEFEFE,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Yellow" ref="EA0D2C,F2E80F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Yellow" ref="EA0D2C,F2E80F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Yellow" ref="EA0D2C,F2E80F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Yellow" ref="EA0D2C,F2E80F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Yellow" ref="EA0D2C,F2E80F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlackOrange.png"/>
							<div class="nocustom_pick">White Black Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Black Orange" ref="EF6B01,FEFEFE,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Black Orange" ref="EF6B01,FEFEFE,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Black Orange" ref="EF6B01,FEFEFE,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Black Orange" ref="EF6B01,FEFEFE,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Black Orange" ref="EF6B01,FEFEFE,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBlue.png"/>
							<div class="nocustom_pick">White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Blue" ref="EFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Blue" ref="EFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Blue" ref="EFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Blue" ref="EFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Blue" ref="EFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBluePANTONE267.png"/>
							<div class="nocustom_pick">White Blue Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Blue Pantone267" ref="5A108B,FEFEFE,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Blue Pantone267" ref="5A108B,FEFEFE,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Blue Pantone267" ref="5A108B,FEFEFE,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Blue Pantone267" ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Blue Pantone267" ref="5A108B,FEFEFE,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteBrown.png"/>
							<div class="nocustom_pick">White Brown</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Brown" ref="FEFEFE,6A491A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Brown" ref="FEFEFE,6A491A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Brown" ref="FEFEFE,6A491A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Brown"  ref="FEFEFE,6A491A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Brown"  ref="FEFEFE,6A491A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGreen.png"/>
							<div class="nocustom_pick">White Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Green"  ref="FEFEFE,0E9543" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Green"ref="FEFEFE,0E9543" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Green"ref="FEFEFE,0E9543" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Green" ref="FEFEFE,0E9543" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Green" ref="FEFEFE,0E9543" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteGrey.png"/>
							<div class="nocustom_pick">White Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Grey" ref="FEFEFE,A0A29F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Grey" ref="FEFEFE,A0A29F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Grey" ref="FEFEFE,A0A29F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Grey" ref="FEFEFE,A0A29F"  type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Grey" ref="FEFEFE,A0A29F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteHotPink.png"/>
							<div class="nocustom_pick">White Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Hot Pink" ref="FEFEFE,FD029A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Hot Pink" ref="FEFEFE,FD029A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Hot Pink" ref="FEFEFE,FD029A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Hot Pink" ref="FEFEFE,FD029A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Hot Pink" ref="FEFEFE,FD029A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLightBlue.png"/>
							<div class="nocustom_pick">White Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Light Blue" ref="FEFEFE,9ABFE5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Light Blue" ref="FEFEFE,9ABFE5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Light Blue" ref="FEFEFE,9ABFE5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Light Blue" ref="FEFEFE,9ABFE5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Light Blue" ref="FEFEFE,9ABFE5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteLimeGreen.png"/>
							<div class="nocustom_pick">White Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Lime Green" ref="FEFEFE,8CD50B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Lime Green" ref="FEFEFE,8CD50B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Lime Green" ref="FEFEFE,8CD50B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Lime Green" ref="FEFEFE,8CD50B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Lime Green" ref="FEFEFE,8CD50B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteOrange.png"/>
							<div class="nocustom_pick">White Orange</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Orange" ref="FEFEFE,EF6B01" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Orange" ref="FEFEFE,EF6B01" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Orange" ref="FEFEFE,EF6B01" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Orange" ref="FEFEFE,EF6B01" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Orange" ref="FEFEFE,EF6B01" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePANTONE528.png"/>
							<div class="nocustom_pick">White Lavender</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Pantone528" ref="FEFEFE,AD71C5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Pantone528" ref="FEFEFE,AD71C5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Pantone528" ref="FEFEFE,AD71C5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Pantone528" ref="FEFEFE,AD71C5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Pantone528" ref="FEFEFE,AD71C5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhitePink.png"/>
							<div class="nocustom_pick">White Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Pink" ref="FEFEFE,FB78B2" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Pink" rref="FEFEFE,FB78B2" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Pink" rref="FEFEFE,FB78B2" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Pink" rref="FEFEFE,FB78B2" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Pink" rref="FEFEFE,FB78B2" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteRed.png"/>
							<div class="nocustom_pick">White Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Red" rref="FEFEFE,EA0D2C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Red" ref="FEFEFE,EA0D2C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Red" ref="FEFEFE,EA0D2C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Red" ref="FEFEFE,EA0D2C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Red" ref="FEFEFE,EA0D2C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/WhiteTeal.png"/>
							<div class="nocustom_pick">White Teal</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Teal" ref="FEFEFE,079CA5" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Teal" ref="FEFEFE,079CA5" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Teal" ref="FEFEFE,079CA5" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Teal" ref="FEFEFE,079CA5" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Teal" ref="FEFEFE,079CA5" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/segmented/YellowBlue.png"/>
							<div class="nocustom_pick">Yellow Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Yellow Blue" ref="F2E80F,0B45BB" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Yellow Blue" ref="F2E80F,0B45BB" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Yellow Blue" ref="F2E80F,0B45BB" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Yellow Blue" ref="F2E80F,0B45BB" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Yellow Blue" ref="F2E80F,0B45BB" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
							<div class="clearfix"></div>
					 </div>
					</div>
					<!-- End Segmented -->
					<div id="swirls" class="tab-pane fade js-color" data-value="0.01" data-color="Swirls">
					  <h3 style="width:auto;">Swirls Color</h3> <button id="addCustomSwirl" class="btn-add-custom-color"><i class="fa fa-plus"></i> Add Custom Color</button>
					  <div id="main-color-content" class="main-color-content">
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
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGreen.png"/>
							<div class="nocustom_pick">Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Green" ref="021509,0C9040"  type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Green" ref="021509,0C9040" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Green" ref="021509,0C9040" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Green" ref="021509,0C9040" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Green" ref="021509,0C9040" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackGrey.png"/>
							<div class="nocustom_pick">Black Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Grey" ref="070707,9DA09C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Grey" ref="070707,9DA09C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Grey" ref="070707,9DA09C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Grey" ref="070707,9DA09C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Grey" ref="070707,9DA09C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackHotPink.png"/>
							<div class="nocustom_pick">Black Hot Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Hot Pink" ref="070707,E5028B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Hot Pink" ref="070707,E5028B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Hot Pink" ref="070707,E5028B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Hot Pink" ref="070707,E5028B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Hot Pink" ref="070707,E5028B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackPANTONE267.png"/>
							<div class="nocustom_pick">Black Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Pantone267" ref="070707,560F88" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Pantone267" ref="070707,560F88" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Pantone267" ref="070707,560F88" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Pantone267" ="070707,560F88" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Pantone267" ref="070707,560F88" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackRed.png"/>
							<div class="nocustom_pick">Black Red</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Red" ref="070707,E30C2A" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Red" ref="070707,E30C2A" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Red" ref="070707,E30C2A" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Red" ref="070707,E30C2A" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Red"  ref="070707,E30C2A" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackWhite.png"/>
							<div class="nocustom_pick">Black White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black White" ref="070707,F3F3F3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black White" ref="070707,F3F3F3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black White" ref="070707,F3F3F3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black White" ref="070707,F3F3F3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black White" ref="070707,F3F3F3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlackYellow.png"/>
							<div class="nocustom_pick">Black Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Black Yellow" ref="070707,E4DA0E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Black Yellow" ref="070707,E4DA0E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Black Yellow" ref="070707,E4DA0E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Black Yellow" ref="070707,E4DA0E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Black Yellow" ref="070707,E4DA0E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueLimeGreen.png"/>
							<div class="nocustom_pick">Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue Lime Green" ref="1753A6,8AD40C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue Lime Green" ref="1753A6,8AD40C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue Lime Green" ref="1753A6,8AD40C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Blue Lime Green" ref="1753A6,8AD40C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Blue Lime Green" ref="1753A6,8AD40C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/BlueWhite.png"/>
							<div class="nocustom_pick">Blue White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Blue White" ref="F3F6FC,0D46BA" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Blue White" ref="F3F6FC,0D46BA" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Blue White" ref="F3F6FC,0D46BA" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Blue White" ref="F3F6FC,0D46BA" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Blue White" ref="F3F6FC,0D46BA" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Dark Green White" ref="F3F6FC,174830" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Dark Green White" ref="F3F6FC,174830" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Dark Green White" ref="F3F6FC,174830" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Dark Green White" ref="F3F6FC,174830" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Dark Green White" ref="F3F6FC,174830" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DesertCamo.png"/>
							<div class="nocustom_pick">Desert Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Dessert Camo" ref="4E4726,DECE76,6B5619" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Dessert Camo" ref="4E4726,DECE76,6B5619" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Dessert Camo" ref="4E4726,DECE76,6B5619" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Dessert Camo" ref="4E4726,DECE76,6B5619"  type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Dessert Camo" ref="4E4726,DECE76,6B5619" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/GreenCamo.png"/>
							<div class="nocustom_pick">Green Camo</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Green Camo" ref="000000,BE8B5E,64631C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Green Camo" ref="000000,BE8B5E,64631C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Green Camo" ref="000000,BE8B5E,64631C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Green Camo" ref="000000,BE8B5E,64631C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Green Camo" ref="000000,BE8B5E,64631C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlue.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Hot Pink Light Blue" ref="E22FAB,9BBAE3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Hot Pink Light Blue" ref="E22FAB,9BBAE3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Hot Pink Light Blue" ref="E22FAB,9BBAE3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Hot Pink Light Blue" ref="E22FAB,9BBAE3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Hot Pink Light Blue" ref="E22FAB,9BBAE3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/HotPinkLightBlueLimeGreen.png"/>
							<div class="nocustom_pick">Hot Pink Light Blue Lime Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Hot Pink Light Blue Lime Green" ref="98C0D7,8FCF49,F90599" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Hot Pink Light Blue Lime Green" ref="98C0D7,8FCF49,F90599" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Hot Pink Light Blue Lime Green" ref="98C0D7,8FCF49,F90599" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Hot Pink Light Blue Lime Green" ref="98C0D7,8FCF49,F90599" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Hot Pink Light Blue Lime Green" ref="98C0D7,8FCF49,F90599" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/DarkGreenWhite.png"/>
							<div class="nocustom_pick">Dark Green White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Dark Green White" ref="FBFCFC,11442B" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Dark Green White" ref="FBFCFC,11442B" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Dark Green White" ref="FBFCFC,11442B" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Dark Green White" ref="FBFCFC,11442B" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Dark Green White" ref="FBFCFC,11442B" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/LimeGreenYellowLightBlue.png"/>
							<div class="nocustom_pick">Lime Green Yellow Light Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Lime Green Yellow Light Blue" ref="8FD040,97C1CC,F0E711" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Lime Green Yellow Light Blue" ref="8FD040,97C1CC,F0E711" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Lime Green Yellow Light Blue" ref="8FD040,97C1CC,F0E711" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Lime Green Yellow Light Blue" ref="8FD040,97C1CC,F0E711" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Lime Green Yellow Light Blue" ref="8FD040,97C1CC,F0E711" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/MaroonGrey.png"/>
							<div class="nocustom_pick">Maroon Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Maroon Grey" ref="8A2232,A0A19D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Maroon Grey" ref="8A2232,A0A19D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Maroon Grey" ref="8A2232,A0A19D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Maroon Grey" ref="8A2232,A0A19D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Maroon Grey" ref="8A2232,A0A19D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/OrangeWhite.png"/>
							<div class="nocustom_pick">Orange White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Orange White" ref="F17A19,FFFCF9" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Orange White" ref="F17A19,FFFCF9" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Orange White" ref="F17A19,FFFCF9" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Orange White" ref="F17A19,FFFCF9" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Orange White" ref="F17A19,FFFCF9" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PANTONE267White.png"/>
							<div class="nocustom_pick">Violet White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pantone267 White" ref="773BA1,FBF9FC" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pantone267 White"ref="773BA1,FBF9FC" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pantone267 White"ref="773BA1,FBF9FC" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pantone267 White"ref="773BA1,FBF9FC" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pantone267 White"ref="773BA1,FBF9FC" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/PinkPANTONE267.png"/>
							<div class="nocustom_pick">Pink Violet</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Pink Pantone267" ref="681990,F574B1" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Pink Pantone267" ref="681990,F574B1" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Pink Pantone267" ref="681990,F574B1" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Pink Pantone267" ref="681990,F574B1" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Pink Pantone267" ref="681990,F574B1" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RainbowSwirl.png"/>
							<div class="nocustom_pick">Rainbow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Rainbow" ref="F4303D,FEDE1E,2230A9" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Rainbow" ref="F4303D,FEDE1E,2230A9" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Rainbow" ref="F4303D,FEDE1E,2230A9" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Rainbow" ref="F4303D,FEDE1E,2230A9" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Rainbow" ref="F4303D,FEDE1E,2230A9" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedBlackBlue.png"/>
							<div class="nocustom_pick">Red Black Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Black Blue" ref="E10D30,08389E,000000" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Black Blue" ref="E10D30,08389E,000000" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Black Blue" ref="E10D30,08389E,000000" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Black Blue" ref="E10D30,08389E,000000" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Black Blue" ref="E10D30,08389E,000000" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGreen.png"/>
							<div class="nocustom_pick">Red Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Green" ref="D9152C,178B41" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Green" ref="D9152C,178B41" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Green" ref="D9152C,178B41" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Green" ref="D9152C,178B41" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Green" ref="D9152C,178B41" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedGrey.png"/>
							<div class="nocustom_pick">Red Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Grey" ref="D9152C,A1A19C" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Grey" ref="D9152C,A1A19C" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Grey" ref="D9152C,A1A19C" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Grey" ref="D9152C,A1A19C" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Grey" ref="D9152C,A1A19C" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhite.png"/>
							<div class="nocustom_pick">Red White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red White" ref="D9152C,FFFFFF" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red White" ref="D9152C,FFFFFF" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red White" ref="D9152C,FFFFFF" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  reftitle="Red White" ref="D9152C,FFFFFF" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  reftitle="Red White" ref="D9152C,FFFFFF" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedWhiteBlue.png"/>
							<div class="nocustom_pick">Red White Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input  reftitle="Red White Blue" ref="D9152C,FFFFFF,0F42B6" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input  reftitle="Red White Blue" ref="D9152C,FFFFFF,0F42B6"type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input  reftitle="Red White Blue" ref="D9152C,FFFFFF,0F42B6"type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input  reftitle="Red White Blue" ref="D9152C,FFFFFF,0F42B6"type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input  reftitle="Red White Blue" ref="D9152C,FFFFFF,0F42B6"type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/RedYellow.png"/>
							<div class="nocustom_pick">Red Yellow</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Red Yellow" ref="EB2328,F2E50F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Red Yellow" ref="EB2328,F2E50F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Red Yellow" ref="EB2328,F2E50F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Red Yellow" ref="EB2328,F2E50F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Red Yellow" ref="EB2328,F2E50F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueBlack.png"/>
							<div class="nocustom_pick">Reflex Blue Black</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Reflex Blue Black" ref="000001,120F6D" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Reflex Blue Black" ref="000001,120F6D" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Reflex Blue Black" ref="000001,120F6D" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Reflex Blue Black" ref="000001,120F6D" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Reflex Blue Black" ref="000001,120F6D" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/ReflexBlueGrey.png"/>
							<div class="nocustom_pick">Reflex Blue Grey</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Reflex Blue Grey" ref="242097,999C9E" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Reflex Blue Grey" ref="242097,999C9E" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Reflex Blue Grey" ref="242097,999C9E" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Reflex Blue Grey" ref="242097,999C9E" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Reflex Blue Grey" ref="242097,999C9E" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/TealWhite.png"/>
							<div class="nocustom_pick">Teal White</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Teal White" ref="FEFEFE,1CA4AD" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Teal White"  ref="FEFEFE,1CA4AD" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Teal White"  ref="FEFEFE,1CA4AD" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Teal White"  ref="FEFEFE,1CA4AD" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Teal White"  ref="FEFEFE,1CA4AD" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/swirl/WhiteBlackGreen.png"/>
							<div class="nocustom_pick">White Black Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="White Black Green"  ref="FEFEFE,000000,05461F" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="White Black Green"  ref="FEFEFE,000000,05461F" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="White Black Green"  ref="FEFEFE,000000,05461F" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="White Black Green"  ref="FEFEFE,000000,05461F" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="White Black Green"  ref="FEFEFE,000000,05461F" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>

							<div class="clearfix"></div>
					  </div>
					</div>
					<!-- End Swirl -->
					<div id="glow" class="tab-pane fade js-color" data-value="0.03" data-color="Glow">
					  <h3>Glow</h3>
					  <div id="main-color-content" class="main-color-content">
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkBLUE.png"/>
							<div class="nocustom_pick">Blue</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Glow Dark Blue"  ref="3886C4" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Glow Dark Blue"  ref="3886C4" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Glow Dark Blue"  ref="3886C4" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Glow Dark Blue"  ref="3886C4" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Glow Dark Blue"  ref="3886C4" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkGREEN.png"/>
							<div class="nocustom_pick">Green</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Glow Dark Green"  ref="5DCE66" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Glow Dark Green" ref="5DCE66" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Glow Dark Green" ref="5DCE66" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Glow Dark Green" ref="5DCE66" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Glow Dark Green" ref="5DCE66" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPINK.png"/>
							<div class="nocustom_pick">Pink</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Glow Dark Pink" ref="D57DA3" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Glow Dark Pink" ref="D57DA3" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Glow Dark Pink" ref="D57DA3" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Glow Dark Pink" ref="D57DA3" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Glow Dark Pink" ref="D57DA3" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
						<div class="col-xs-4 box-color">
							<img src="assets/images/src/glow/GlowDarkPURPLE.png"/>
							<div class="nocustom_pick">Purple</div>
							<div class="col-xs-4 col-sm-4"><label>Adult Qty </label><input reftitle="Glow Dark Purple" ref="A078AD" type="number" name="adult-qty" class="qtyin-adult-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Medium Qty</label><input reftitle="Glow Dark Purple" ref="A078AD" type="number" name="medium-qty" class="qtyin-medium-qty" placeholder="0"/></div>
							<div class="col-xs-4 col-sm-4"><label>Youth Qty </label><input reftitle="Glow Dark Purple" ref="A078AD" type="number" name="youth-qty" class="qtyin-youth-qty" placeholder="0"/></div>
							<div class="clearfix"></div>
							<!---------Start text color option------------>
								<div class="color-text" style="display:none">
									<div class="col-sm-1">
										<?php include "colorAdult-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorMedium-template.php";?>
									</div>
									<div class="col-sm-1">
										<?php include "colorYouth-template.php";?>
									</div>
										<div class="clearfix"></div>
								</div>
							<!-------End text color-------------->
							<span class="view-more col-xs-12">View More Sizes</span>
							<div class="show-content" style="display:none">
								<div class="col-xs-4 col-sm-6"><label>Extra Small Qty</label><input reftitle="Glow Dark Purple"  ref="A078AD" type="number" name="xt-small-qty" class="xt-small-qty" placeholder="0"/></div>
								<div class="col-xs-4 col-sm-6"><label>Extra Large Qty </label><input reftitle="Glow Dark Purple"  ref="A078AD" type="number" name="xt-large-qty" class="xt-large-qty" placeholder="0"/></div>
							</div>
						</div>
					  </div>
					</div>
					<!-- End Glow Color -->
				  </div>
				  <!--	End Tab Content -->
				</div>