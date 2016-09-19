var has_preview = {};
var dynamic_font_color = "";
var default_font_color = "000000";

$(document).ready(function(){

	// For regular wristband size
	$('.qtyin-adult-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-adult-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-medium-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-medium-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-youth-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-youth-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	// For regular wristband xt size
	$('.xt-small-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-xt-small-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.xt-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-xt-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');

	// For large wristband size
	$('.qtyin-adult-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-adult-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-medium-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-medium-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-youth-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-qtyin-youth-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');

	// For large wristband xt size
	$('.xt-small-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-xt-small-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.xt-large-large-qty').closest('div').addClass('qty-box text-center').append('<div class="fntin fnt-xt-large-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');

	// For font color select event
	$('body').on('click', '.fntin', function(){
		e.preventDefault();
		e.stopPropagation();

		dynamic_font_color = $(this);
		$('#FontColorQtyModal').modal('show');
	});

	//font-color selection per qty
	$('body').on('click', '#FontColorQtyModal ul.font-color-list li', function(){
		e.preventDefault();
		e.stopPropagation();

		dynamic_font_color.css('background-color', '#'+$(this).attr('refcode')).attr('ref-font-color', $(this).attr('refcode'));

		$('#FontColorQtyModal').modal('hide');
		$("#preview-pane-selection").html("");
		// $("#front-view, #back-view, #inside-view, #continue-view").attr('style', '');

		var collectionData = getTotalData();

		// For preview ------------
		$('.click-pre').show();
		if(collectionData.style === "figured") {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-fig");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-reg");
			$(".preview-text").css("line-height", "104px");
		} else {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-reg");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-fig");
			$(".preview-text").css("line-height", "54px");
		}
		var html_preview = "";
		// Loop through all items
		$.each(collectionData.items, function(key_style, value_style) {
			$.each(value_style.data, function(key, value) {
				//if background black and font-color black
				if(value.color.join("-")=="000000" && value.font == "000000") {
					value.font = "464646";
					$("#front-view, #back-view, #inside-view, #continue-view").addClass("clipart-black");
				}
				// List all wristbands for preview
				html_preview += "<li class='blink preview-pill preview-color-" + collectionData.style + "-" + value.color.join("-") + "-font-" + value.font + "'  data-type='" + key_style + "' data-font-color='" + value.font + "' data-image-link='gd/belt.php?style=" + key_style + "&type=" + collectionData.style + "&color=" + value.color.join(",") + "' style='background-image:url(\"gd/belt.php?style=" + key_style + "&color=" + value.color.join(",") + "\");background-size:30px;background-repeat:no-repeat;background-size: 100% 100%;color:#" + value.font +";'>Y</li>";
			});
		});
		// Append wristbands for preview
		$("#preview-pane-selection").append(html_preview );
		// End : for preview ------------

		// Populate total section
		populateTotalSection(collectionData);
	});

	//blink
	function blink(selector){
		$(selector).fadeOut('slow', function(){
			$(this).fadeIn('slow', function(){
				blink(this);
			});
		});
	}
		
	blink('.blink');
	
	// ADD-ON EVENTS
	$("body").on("click", "div.add-ons", function(e) {
		e.preventDefault();
		e.stopPropagation();

		if($(this).find("input[type='checkbox'].add-ons").prop("checked") == true) {
			$(this).find("input[type='checkbox'].add-ons").prop("checked", false);
		} else {
			$(this).find("input[type='checkbox'].add-ons").prop("checked", true);
		}

		var collectionData = getTotalData();
		// Populate total section
		populateTotalSection(collectionData);
		// console.log(collectionData);
	});

	// Free wristbands EVENTS
	$('body').on("change", ".free-bands", function(e) {
		e.preventDefault();
		e.stopPropagation();

        if(this.checked) {
            $(".free-convert").show();
		} else{
            $(".free-convert").hide();
        }

		var collectionData = getTotalData();
		// Populate total section
		populateTotalSection(collectionData);
    });

	//Confirm on freewristband conversion
	$(".done-button-fwb").on("click",function(e) {
		// var qty = 0;
		// var html_item="";
		// $('.freewb').each(function() {
		// 	qty += +$(this).val();
		// });
	
		// if(qty > 100){
		// 	alert("You have exceeded the limit number for free wristbands.");
		// }else{
		// 	$('.js-free-bands').show().delay(5000).hide(0);
		// 	html_item = '<div class="row total-summary-freewb"><div class="col-md-8 col-sm-6">- Free Wristbands ('+qty+')</div><div class="clearfix"></div></div>';
		// }

		// $('.total-summary-after').html(html_item);
		e.preventDefault();
		e.stopPropagation();

		var collectionData = getTotalData();
		// Populate total section
		populateTotalSection(collectionData);
	});

	//Select on production and shipping option
	$('body').on('click', '.js-time-options', function(e) {
		e.preventDefault();
		e.stopPropagation();
		// Get order data
		var collectionData = getTotalData();
		// Populate total section
		populateTotalSection(collectionData);
	});

	//submit order form
	$("body").on("click", "#submitOrder", function(e) {
		e.preventDefault();
		e.stopPropagation();

		var collectionData = getTotalData();

		var $form_data = new FormData();
		$form_data.append('file-1', $("input[type='file'].file-1")[0].files[0]);
		$form_data.append('file-2', $("input[type='file'].file-2")[0].files[0]);
		$form_data.append('file-3', $("input[type='file'].file-3")[0].files[0]);
		$form_data.append('file-4', $("input[type='file'].file-4")[0].files[0]);
		$form_data.append('file-5', $("input[type='file'].file-5")[0].files[0]);
		$form_data.append('file-6', $("input[type='file'].file-6")[0].files[0]);
		$form_data.append('data', JSON.stringify(collectionData));

		jQuery.ajax({
			url: 'submit_order.php',
			data: $form_data,
			cache: false,
			contentType: false,
			processData: false,
			type: 'POST',
			success: function(data){ }
		});

		// console.log($collection);
	});

	// Initialize wristband price table
	get_style_size("price_table");


	$("body").on("blur", "#freekc", function(e) {
		e.preventDefault();
		e.stopPropagation();

		// Check if something actually changed
		if($(this).val().trim() != "") {

			var collectionData = getTotalData();
			if(collectionData.free.keychains.qty > 10 || collectionData.free.keychains.qty < 0){
				$('#modal-10-free-keychains').modal('show');
				return;
			}

			// Populate total section
			populateTotalSection(collectionData);
		}
	});


	$("body").on("blur", ".freewb", function(e) {
		e.preventDefault();
		e.stopPropagation();

		// Check if something actually changed
		if($(this).val().trim() != "") {

			var collectionData = getTotalData();

			if(collectionData.free.wristbands.qty > 100 || collectionData.free.wristbands.qty < 0) {
				if ($(this).val()!="") {
					$('#modal-100-free-wristbands').modal('show');
					return;
				};
			}

			// Populate total section
			populateTotalSection(collectionData);
		}
	});

});

$(function(){

	var $style_value;
	var $size_value;

	$('#prod-main').click(function(){
		window.location = 'product-printed.php';
	});
	
	$('#prod-main2').click(function(){
		window.location = 'fonts.php';
	});

	//removes file 
	$("#remove-1").click(function() {
		$(".file-1").val("");
	});

	//removes file 
	$("#remove-2").click(function() {
		$(".file-2").val("");
	});

	//removes file 
	$("#remove-3").click(function() {
		$(".file-3").val("");
	});

	//removes file 
	$("#remove-4").click(function() {
		$(".file-4").val("");
	});

	//removes file 
	$("#remove-5").click(function() {
		$(".file-5").val("");
	});

	//removes file 
	$("#remove-6").click(function() {
		$(".file-6").val("");
	});

	//change font
	$("#fs").change(function() {
		//alert($(this).val());
		$('.changeMe').css("font-family", $(this).val());
	});

	//change font
	$("#size").change(function() {
		$('#float').css("font-size", $(this).val() + "px");
	});
	
	//change file-upload get value
	$('input[class^="file"').change(function() {
		if($(this).hasClass('file-1')){
			$(".start-fc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-2')){
			$(".end-fc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-3')){
			$(".back-mc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-4')){
			$(".backend-mc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-5')){
			$(".start-cc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-6')){
			$(".end-cc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
		else if($(this).hasClass('file-7')){
			$(".fig-fc").html("<img width='30' height='30' src='assets/images/src/upload-icon.png'/>");
		}
	});
	
	//show extra band size
	$(".show-content").hide();
	$("body").on("click", ".view-more", function() {
		$(this).next('.show-content').toggle(100);
	});

	//show front-back message selection
	$(".front-back-select").click(function() {
		$('.fb-select').css("display","block");
		$('.f-input').css("display","block");
		$('.c-input').css("display","none");
		$('.c-select').css("display","none");
		$('.cont-select').prop('checked', false)
	});

	//show continous message selection
	$(".cont-select").click(function(){
		$('.front-back-select').prop('checked', false)
		$('.c-select').css("display","block");
		$('.fb-select').css("display","none");
		$('.f-input').css("display","none");
		$('.c-input').css("display","block");
	});

	//show preview image
	$('body').on('click', '.preview-pill', function(e){
		$('.preview-pill').removeClass('active');
		$('.preview-pill').removeClass('blink');
		$(this).addClass('active');

		$("#front-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
		$("#back-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
		$("#continue-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');

		$("#inside-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');

		if(typeof($(this).attr('data-font-color')) != "undefined"){
			$(".preview-panel").css("color", "#"+$(this).attr('data-font-color'));
		}else{
			if($("#font-color").css("display") != "none"){
				$(".preview-panel").css("color", "#"+$("#preview-textcolor").css("background-color"));
			}else{
				$(".preview-panel").css("color", "#444444");
			}
		}
	});

	// Preview message event
	$('.band-text').keyup(function() {
		$.each($('.band-text'), function(key, obj) {
			var $prev_text = $(obj).val();
			var $target = $(obj).attr('name');
			if ($prev_text!='') {
				$('#'+$target).html($prev_text);
				$('#'+$target).removeClass('faded');
			} else {
				$('#'+$target).addClass('faded');
			}
		});
		return false;
	});

	// Select wristband style event
	$('body').on('click', '.js-style', function() {

		// Check if not yet checked
		if($(this).find('input[type="radio"]').prop('checked')  === false) {

			// Uncheck others
			$(".js-style").find("input[type='radio']").prop("checked", false);
			$(".js-style").removeClass("active");

			// Check & set as active
			$(this).find("input[type='radio']").prop("checked", true);
			$(this).addClass("active");

			//check style hide size divs
			var style = $(".js-style .wrist_style:checked").val();

			// Show or hide custom font selector depending on selected style
			if(style === "printed" || style === "ink-injected" || style === "embossed-printed" || style === "figured"){
				$('.fntin').show().addClass('active');
			}else{
				$('.fntin').hide().removeClass('active');
			}

			// Set what kind of preview to display
			if(style === "figured") {
				$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-fig");
				$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-reg");
				$(".preview-text").css("line-height", "104px");
			} else {
				$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-reg");
				$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-fig");
				$(".preview-text").css("line-height", "54px");
			}
			
			// Hide all sizes first
			$(".js-size").removeClass('active');
			$(".wsize-default .js-size").hide();
			$(".wristband-view-color").hide();

			// Set which sizes to display
			if(style == "figured") {
				// Show sizes
				$("#half").show();
				$("#three").show();
				$("#one").show();
				$(".start-fc").addClass("fig_move");
				$(".end-fc").addClass("fig_move");
				$(".back-mc").addClass("fig_move");
				$(".backend-mc").addClass("fig_move");
				$(".start-cc").addClass("fig_move");
				$(".end-cc").addClass("fig_move");
				$(".fig-fc").addClass("fig_move");
				$(".figarea").show();
				
				// Get current checked radio button
				var selected = $(".js-size:visible input[type='radio']:checked");
				if(selected.length <= 0) {
					selected = $(".js-size:visible:first input[type='radio']");
				}
				selected.closest('.js-size').addClass('active');
				selected.prop("checked", true);

				// Get checked style
				var item = $(".js-size:visible .wrist_size:checked").val();

				// Show items
				if($.inArray(item, ["1/4", "1/2", "3/4"]) > 0) {
					$(".regular-figured-size").show(); // Show regular sizes
				} else {
					$(".large-figured-size").show(); // Show large sizes
				}
			} else if(style=="dual-layer") {
				// Show sizes
				$("#half").show();
				$("#three").show();
				$(".start-fc").removeClass("fig_move");
				$(".end-fc").removeClass("fig_move");
				$(".back-mc").removeClass("fig_move");
				$(".backend-mc").removeClass("fig_move");
				$(".start-cc").removeClass("fig_move");
				$(".end-cc").removeClass("fig_move");
				$(".figarea").hide();

				// Get current checked radio button
				var selected = $(".js-size:visible input[type='radio']:checked");
				if(selected.length <= 0) {
					selected = $(".js-size:visible:first input[type='radio']");
				}
				selected.closest('.js-size').addClass('active');
				selected.prop("checked", true);

				// Get checked style
				var item = $(".js-size:visible .wrist_size:checked").val();

				// Show items
				if($.inArray(item, ["1/4", "1/2"]) > 0) {
					$(".regular-dual-size").show(); // Show regular sizes
				} else {
					$(".large-dual-size").show(); // Show large sizes
				}
			} else {
				// Show sizes
				$("#quarter").show();
				$("#half").show();
				$("#three").show();
				$("#one").show();
				$("#onehalf").show();
				$("#two").show();
				$(".start-fc").removeClass("fig_move");
				$(".end-fc").removeClass("fig_move");
				$(".back-mc").removeClass("fig_move");
				$(".backend-mc").removeClass("fig_move");
				$(".start-cc").removeClass("fig_move");
				$(".end-cc").removeClass("fig_move");
				$(".figarea").hide();

				// Get current checked radio button
				var selected = $(".js-size:visible input[type='radio']:checked");
				if(selected.length <= 0) {
					selected = $(".js-size:visible:first input[type='radio']");
				}
				selected.closest('.js-size').addClass('active');
				selected.prop("checked", true);

				// Get checked style
				var item = $(".js-size:visible .wrist_size:checked").val();

				// Show items
				if($.inArray(item, ["1/4", "1/2", "3/4", "1"]) > 0) {
					$(".regular-color-size").show(); // Show regular sizes
				} else {
					$(".large-color-size").show(); // Show large sizes
				}
			}

			// Empty all quantities
			$(".wrist_color_container:visible").find(".js-color").find("input[name$='-qty']").val("");

			// Clear previews
			$(".click-pre").hide();
			$(".preview-panel").attr("style", "");
			$(".preview-panel").find("img").remove();
			$("#preview-pane-selection").html("");
			$("#front-view, #back-view, #inside-view, #continue-view").attr("style", "");

			// Hide total
			$('.js-total').hide();
			$('.js-no-total').fadeIn(300);

			// Get new price table
			get_style_size('price_table');
		}
	});

	// Select wristband size event
	$('body').on('click', '.js-size', function() {

		// Check if not yet checked
		if($(this).find('input[type="radio"]').prop('checked') === false) {

			// Uncheck others
			$(".js-size").find("input[type='radio']").prop("checked", false);
			$(".js-size").removeClass("active");

			// Check & set as active
			$(this).find("input[type='radio']").prop("checked", true);
			$(this).addClass("active");

			// Hide visible wristband selector
			$(".wristband-view-color").hide();

			// Get wristband size & style
			var item = $('.js-size:visible .wrist_size:checked').val();
			var style = $('.js-style .wrist_style:checked').val();

			// Decide which wristband selector to display
			if(style == "figured") {
				// Show items
				if($.inArray(item, ["1/4", "1/2", "3/4"]) > 0) {
					$(".regular-figured-size").show(); // Show regular sizes
				} else {
					$(".large-figured-size").show(); // Show large sizes
				}
			} else if(style=="dual-layer") {
				// Show items
				if($.inArray(item, ["1/4", "1/2"]) > 0) {
					$(".regular-dual-size").show(); // Show regular sizes
				} else {
					$(".large-dual-size").show(); // Show large sizes
				}		
			} else {
				// Show items
				if($.inArray(item, ["1/4", "1/2", "3/4", "1"]) > 0) {
					$(".regular-color-size").show(); // Show regular sizes
				} else {
					$(".large-color-size").show(); // Show large sizes
				}
			}

			// Empty all quantities
			$(".wrist_color_container:visible").find(".js-color").find("input[name$='-qty']").val("");

			// Clear previews
			$(".click-pre").hide();
			$(".preview-panel").attr("style", "");
			$(".preview-panel").find("img").remove();
			$("#preview-pane-selection").html("");
			$("#front-view, #back-view, #inside-view, #continue-view").attr("style", "");

			// Hide total
			$('.js-total').hide();
			$('.js-no-total').fadeIn(300);

			// Get new price table
			get_style_size('price_table');
		}
	});

	// Adding quantity to wristband colors. Check input values on textfield
	$('body').on('keydown, keyup', '.box-color input[name$="-qty"]', function (e) {
		// // Ensure that string has no excess 0 value on first character.
		if(this.value.length === 1 && (e.keyCode === 96 || e.keyCode === 32)) {
			$(this).val("");
		}
		// Allow: backspace, delete, tab, escape, enter and 
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			// Allow: Ctrl+A, Command+A 
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
			// Allow: home, end, left, right, down, up 
			(e.keyCode >= 35 && e.keyCode <= 40)) {
			// let it happen, don't do anything 
			return;
		}
		// Ensure that it is a number and stop the keypress.
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
	
	//Blur on quantity
	$('body').on('blur', '.box-color input[name$="-qty"]', function(e) {
		e.preventDefault();
		e.stopPropagation();

		// Check if something actually changed
		if($(this).val().trim() != "") {

			$(".area-conversion-list").html("");
			$("#preview-pane-selection").html("");
			// $("#front-view, #back-view, #inside-view, #continue-view").attr('style', '');

			var collectionData = getTotalData();

			// For preview ------------
			$('.click-pre').show();
			if(collectionData.style === "figured") {
				$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-fig");
				$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-reg");
				$(".preview-text").css("line-height", "104px");
			} else {
				$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-reg");
				$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-fig");
				$(".preview-text").css("line-height", "54px");
			}
			var html_preview = "";
			var html_wb_free = "";
			// Loop through all items
			$.each(collectionData.items, function(key_style, value_style) {
				$.each(value_style.data, function(key, value) {
					//if background black and font-color black
					if(value.color.join("-")=="000000" && value.font == "000000") {
						value.font = "464646";
						$("#front-view, #back-view, #inside-view, #continue-view").addClass("clipart-black");
					}
					// List all wristbands for preview
					html_preview += "<li class='blink preview-pill preview-color-" + collectionData.style + "-" + value.color.join("-") + "-font-" + value.font + "'  data-type='" + key_style + "' data-font-color='" + value.font + "' data-image-link='gd/belt.php?style=" + key_style + "&type=" + collectionData.style + "&color=" + value.color.join(",") + "' style='background-image:url(\"gd/belt.php?style=" + key_style + "&color=" + value.color.join(",") + "\");background-size:30px;background-repeat:no-repeat;background-size: 100% 100%;color:#" + value.font +";'>Y</li>";

					// For free wristbands
					if(collectionData.total_qty >= 100) {
						if(!$('.conversion-wrist-' + key_style + '.free-wrist-' + key_style + '-' + value.size + '-' + value.color.join("-") ).length > 0) {
							html_wb_free += '<li class="fwb-list conversion-wrist-'+key_style+' free-wrist-'+key_style+'-'+value.size+'-'+value.name+'" data-band-color="' + value.color.join("-") + '">';
							html_wb_free += '<div class="fwb-text col-md-6 col-sm-12">';
								html_wb_free += '<div class="col-xs-4">'+key_style.toUpperCase()+'</div>';
								html_wb_free += '<div class="col-xs-4">'+value.name.toLowerCase().capitalizeFirstLetter()+'</div>';
								html_wb_free += '<div class="col-xs-4">'+value.size.toLowerCase().capitalizeFirstLetter()+'</div>';
							html_wb_free += '</div>';
							html_wb_free += '<div class="align-right col-md-6 col-sm-12"><h4 class="fwb-text col-xs-12 hidden-md hidden-lg text-center fwb-text-hidden-header">INPUT QUANTITY</h4><input type="number" class="freewb col-xs-12" id="freewb-'+key_style+'-'+value.size+'-'+value.color.join("-")+'" name="'+key_style+'-'+value.size+'-'+value.color.join("-")+'-fwb" data-style="'+key_style+'" data-color="'+value.color.join(",")+'" data-font-color="'+value.font+'" data-name="'+value.name+'" data-size="'+value.size+'" placeholder="0" data-maxlength="3" /></div>';
							html_wb_free += '<div class="clearfix"></div>';
							html_wb_free += '</li>';
						}
					}
				});
			});

			$(".area-conversion-list").html(html_wb_free);

			// Append wristbands for preview
			$("#preview-pane-selection").html(html_preview); // End : for preview ------------

			// Get proper total qty
			$.ajax({
				type: 'POST',  
				url: 'queryDB.php', 
				data: {'action':'get_prices', 'style':collectionData.style, 'size':collectionData.size, 'qty':collectionData.total_qty},
				beforeSend: function() {
					$('.js-total').hide();
					$('.js-no-total').fadeIn(300);
				},
				success: function(data) {
					data = $.parseJSON(data);
					var htmlProd, htmlShip = '';

					// List all production price/day data
					$.each(data.production, function(key, value) {
						htmlProd += "<option value='" + value.days + "' data-price='" + value.price + "'>Standard Production - " + value.days + " Days (+$" + value.price + ")</option>";
					});
					$("#ProductionTime").html(htmlProd);

					// List all shipping price/day data
					$.each(data.shipping, function(key, value) {
						htmlShip += "<option value='" + value.days + "' data-price='" + value.price + "'>Standard Production - " + value.days + " Days (+$" + value.price + ")</option>";
					});
					$("#ShippingTime").html(htmlShip);

					// Get selected production settings
					var $p_days = $("#ProductionTime option:selected").val();
						$p_days = ($p_days != "" && !isNaN(parseInt($p_days))) ? parseInt($p_days) : 0;
					var $p_price = $("#ProductionTime option:selected").attr("data-price");
						$p_price = ($p_price != "" && !isNaN(parseFloat($p_price))) ? parseFloat($p_price) : 0;

					// Set values
					collectionData.production_days = $p_days;
					collectionData.production_price = $p_price;

					// Get selected shipping settings
					var $s_days = $("#ShippingTime option:selected").val();
						$s_days = ($s_days != "" && !isNaN(parseInt($s_days))) ? parseInt($s_days) : 0;
					var $s_price = $("#ShippingTime option:selected").attr("data-price");
						$s_price = ($s_price != "" && !isNaN(parseFloat($s_price))) ? parseFloat($s_price) : 0;

					// Set values
					collectionData.shipping_days = $s_days;
					collectionData.shipping_price = $s_price;

					// Compute new total
					var new_total = 0;
					// Add production & shipping prices
					new_total += ($p_price + $s_price);
					// Add item prices
					$.each(collectionData.items, function(key, value) {
						new_total += parseFloat(value.total);
					});
					// Add item prices
					$.each(collectionData.add_ons, function(key, value) {
						new_total += parseFloat(value.total);
					});

					// Set new overall total price
					collectionData.total_price = new_total;

					// Populate total section
					populateTotalSection(collectionData);
				}
			});
		}
	});

	// Colorpicker
	$('.pick-color-list li').click(function(){
		var color = $(this).attr('refcode');
		var p = $(this).parent('.pick-color-list').prev('.box-opt-color');
		var num = p.find('input[type="text"]').length;
		var pick = $(this);
		var limit = $(this).parent('.pick-color-list').find('li.active').length;
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
		}
		else {
			pick.removeClass('active');
			pick.removeClass('select-box-col');
			var f = p.find('li[refcode="'+color+'"]');
			f.removeClass('active');
			f.removeAttr('refcode');
			f.removeAttr('style');
			f.find('input').val('');
		}
	});

	//font-color selection
	$('#FontColorModal ul.font-color-list li').click(function(){
		var textcolor = $(this).attr('refcode');
		console.log(textcolor);
		if(textcolor != undefined || textcolor != '');{
			$(".preview-panel").css("color", "#"+textcolor);
			$("#preview-textcolor").css("background-color", "#"+textcolor);
			$("#FontColorModal").modal('toggle');
		}
	});

	//font-style selection
	$('.font-style-list li').click(function(){
		var text = $(this).attr('name');
		var img = $(this).attr('ref');
		
		if(text != undefined);{
			$(".preview-panel").css("font-family", text);
			$("#preview-textfont").html("<img src='assets/images/src/fonts/"+img+"'/>");
			$("#FontModal").modal('toggle');
		}
	});

	//start front message clipart
	$('.fclip-1').click(function(){
		$(".clip-color-list li").addClass('sfm-art');
	});

	//solid done button click
	// $('.done-b').click(function(){
	$('body').on('click', '.done-b', function() {

		if($.trim($(this).closest('.box-opt-color').find('#solid-color-0').val()) == ''){
			alert('You need to choose a color');
		}else{
			var color = [ $(this).closest('.box-opt-color').find('.solid-color-0').val() ];
			var style = $('.js-style .wrist_style:checked').val();
			
			if(style!=='figured') {
				$(".PreviewColorModal").attr('src', generatePreviewBandImage('solid', color, style));
			} else {
				$(".PreviewFigColorModal").attr('src', generatePreviewBandImage('solid', color, style));
			}

			// $("#ColorModal").modal('hide');
			$(this).closest('.modal').modal('hide');
		}
	});

	//solid dynamic done button click
	$('body').on('click', '.dynamic-done-b', function() {
		if($.trim($(this).closest('.box-opt-color').find('.dynamic-solid-color').val()) == ''){
			alert('You need to choose a color');
		}else{
			var imgID = ".Preview" + $(this).closest('.modal').attr("id");
			var color = [ $(this).closest('.box-opt-color').find('.solid-color-0').val() ];
			var style = $('.js-style .wrist_style:checked').val();

			$(imgID).attr('src', generatePreviewBandImage('solid', color, style));

			$(this).closest('.modal').modal('hide');
		}
	});
	
	//segmented done button click
	$('body').on('click', '.done-s', function() {
		if($.trim($(this).closest('.box-opt-color').find('#segmented-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.segmented-color-0').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-1').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-2').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-3').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-4').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-5').val() ];
				color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			if(style!=='figured') {
				$(".segPreviewColorModal").attr('src', generatePreviewBandImage('segmented', color, style));
			} else {
				$(".segPreviewFigColorModal").attr('src', generatePreviewBandImage('segmented', color, style));
			}

			// $("#ColorSegModal").modal('toggle');
			$(this).closest('.modal').modal('hide');
		}
	});
	
	//segmented dynamic done button click
	$('body').on('click', '.dynamic-done-s', function() {
		if($.trim($(this).closest('.box-opt-color').find('.dynamic-segmented-color').val()) == ''){
			alert('You need to choose colors');
		}else{
			var imgID = ".Preview" + $(this).closest('.modal').attr("id");
			var color = [ 	$(this).closest('.box-opt-color').find('.segmented-color-0').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-1').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-2').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-3').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-4').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-5').val() ];
				color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			$(imgID).attr('src', generatePreviewBandImage('segmented', color, style));

			$(this).closest('.modal').modal('hide');
		}
	});
	
	//dual done button click
	$('body').on('click', '.done-d', function() {
		if($.trim($(this).closest('.box-opt-color').find('#dual-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.dual-color-0').val(),
							$(this).closest('.box-opt-color').find('.dual-color-1').val() ];
			color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			// $(".dualPreviewColorModal").attr('src', generatePreviewBandImage('dual', color));
			$(this).closest('.box-color').find(".dualPreviewColorModal").attr('src', generatePreviewBandImage('dual', color, style));

			$("#ColorDualModal").modal('toggle');
			$(this).closest('.modal').modal('hide');
		}
	});

	//dual dynamic done button click
	$('body').on('click', '.dynamic-done-d', function() {
		if($.trim($(this).closest('.box-opt-color').find('.dynamic-dual-color').val()) == ''){
			alert('You need to choose colors');
		}else{
			var imgID = ".Preview" + $(this).closest('.modal').attr("id");
			var color = [ 	$(this).closest('.box-opt-color').find('.dynamic-dual-color-0').val(),
							$(this).closest('.box-opt-color').find('.dynamic-dual-color-1').val() ];
				color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			$(imgID).attr('src', generatePreviewBandImage('dual', color, style));

			$(this).closest('.modal').modal('hide');
		}
	});

	//swirl done button click
	$('body').on('click', '.done-sw', function() {
		if($.trim($(this).closest('.box-opt-color').find('#swirl-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.swirl-color-0').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-1').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-2').val() ];
				color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			if(style!=='figured') {
				$(".swlPreviewColorModal").attr('src', generatePreviewBandImage('swirls', color, style));
			} else {
				$(".swlPreviewFigColorModal").attr('src', generatePreviewBandImage('swirls', color, style));
			}

			// $("#ColorSwirlModal").modal('hide');
			$(this).closest('.modal').modal('hide');
		}
	});

	//swirl done button click
	$('body').on('click', '.dynamic-done-sw', function() {
		if($.trim($(this).closest('.box-opt-color').find('.dynamic-swirl-color').val()) == ''){
			alert('You need to choose colors');
		}else{
			var imgID = ".Preview" + $(this).closest('.modal').attr("id");
			var color = [ 	$(this).closest('.box-opt-color').find('.swirl-color-0').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-1').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-2').val() ];
				color = color.filter(Boolean);
			var style = $('.js-style .wrist_style:checked').val();

			$(imgID).attr('src', generatePreviewBandImage('swirls', color, style));

			$(this).closest('.modal').modal('hide');
		}
	});

	//front message clipart button -------------------
	$('.fclip-1').click(function(){
			$(".clip-color-list li a").addClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
	});	
	
	$('.fclip-2').click(function(){
			$(".clip-color-list li a").addClass('fec');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('bsc');
			 $(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
	});
	//front message clipart button end here -----------

	//back message clipart button ---------------------
	$('.bclip-1').click(function(){
			$(".clip-color-list li a").addClass('bsc');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bec');
		    $(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
			$(".clip-color-list li a").removeClass('figc');
	});

	$('.bclip-2').click(function(){
			$(".clip-color-list li a").addClass('bec');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
			$(".clip-color-list li a").removeClass('figc');
	});
	//back message clipart button end here --------------

	//continous message clipart button ---------------------
	$('.cclip-1').click(function(){
			$(".clip-color-list li a").addClass('ccs');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('figc');
	});
	
	$('.cclip-2').click(function(){
			$(".clip-color-list li a").addClass('ces');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('ccs');
			$(".clip-color-list li a").removeClass('figc');
	});
	//continous message clipart button end here --------------

	//figured center clipart button -------------------
	$('.fclip-3').click(function(){
			$(".clip-color-list li a").addClass('figc');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
	});	

	//clipart front message button ------
	$('.clip-color-list li a').click(function(){
		var img = $(this).attr('ref');
		
		if(img!="none.jpg"){
			if($( ".clip-color-list li a" ).hasClass( "fsc" )){
				$(".start-fc").html("<img width='34' height='30' src='assets/images/src/clipart/"+img+"'/>");
			}
			else if($( ".clip-color-list li a" ).hasClass( "fec" )){
				$(".end-fc").html("<img width='34' height='30' src='assets/images/src/clipart/"+img+"'/>");
			}
			else if($( ".clip-color-list li a" ).hasClass( "bsc" )){
				$(".back-mc").html("<img width='34' height='30' src='assets/images/src/clipart/"+img+"'/>");
			}
			else if($( ".clip-color-list li a" ).hasClass( "bec" )){
				$(".backend-mc").html("<img width='34' height='30' src='assets/images/src/clipart/"+img+"'/>");
			}
			else if($( ".clip-color-list li a" ).hasClass( "ccs" )){
				$(".start-cc").html("<img width='34' height='30' src='assets/images/src/clipart/"+img+"'/>");
			}
			else if($( ".clip-color-list li a" ).hasClass( "figc" )){
				$(".fig-fc").html("<img width='34' height='34' src='assets/images/src/clipart/"+img+"'/>");
			}
			else{
				$(".end-cc").html("<img width='34' height='34' src='assets/images/src/clipart/"+img+"'/>");
			}

		}
		else{
			
			if($( ".clip-color-list li a" ).hasClass( "fsc" )){
				$( ".start-fc" ).find("img").remove();
			}
			else if($( ".clip-color-list li a" ).hasClass( "fec" )){
				$(".end-fc").find("img").remove();
			}
			else if($( ".clip-color-list li a" ).hasClass( "bsc" )){
				$(".back-mc").find("img").remove();
			}
			else if($( ".clip-color-list li a" ).hasClass( "bec" )){
				$(".backend-mc").find("img").remove();
			}
			else if($( ".clip-color-list li a" ).hasClass( "ccs" )){
				$(".start-cc").find("img").remove();
			}
			else if($( ".clip-color-list li a" ).hasClass( "figc" )){
				$(".fig-fc").find("img").remove();
			}
			else{
				$(".end-cc").find("img").remove();
			}

		 }
		
		$("#ClipArtModal").modal('toggle');
	});

});

function get_style_size(type) {

	var check_style = $('input[name="wrist_style"]:checked').length;
	var check_size = $('input[name="wrist_size"]:checked').length;

	if(check_size == 0) {
		var $size = '1/2';
	} else {
		var $size = $('input[name="wrist_size"]:checked').data('size');
	}

	if(check_style == 0) {
		var $style = 'imprinted';
	}
	else {
		var $style = $('input[name="wrist_style"]:checked').data('style');

		if($style === "printed" || $style === "ink-injected" || $style === "embossed-printed" || $style === "figured"){
			$('.fntin').show().addClass('active');
		}else{
			$('.fntin').hide().removeClass('active');
		}

	}

	get_price_data($style, $size, type);
}

//Get Price list
function get_price_data($style, $size, type) {

	//get JSON Price list
	var ttlQty = 0;
	var ttlPrice = 0;
	var arrBand = {};
	var $data = $.parseJSON(price_json);

	if(type == 'price_table') {
		$('#priceHeader, #priceTable').find('.js-temp').remove();
		$.each($data[$style][$size], function(key_qty, val_qty){
			$('#priceHeader').append("<th class='js-temp' data-uk-tooltip='{pos:\'top\'}' title='Prices'>"+key_qty+"</th>");
			$('#priceTable').append("<td class='js-temp'>$<span data-qty-range='"+key_qty+"''>"+val_qty+"</span></td>");
		});
		$('.js-pricing-table').fadeIn(300);
		$('.js-wb-caption').find('.style').text($style.toUpperCase());
		$('.js-wb-caption').find('.size').text($size);
	} else {
		$('.wrist_color_container:visible .js-color input[name$="-qty"]').each(function() {

			var qty = $(this).val();

			if(qty) {

				qty = parseInt(qty);

				if(qty > 0) {
					
					// Variables
					var ref_type = $(this).parents('.tab-pane').data('color').toLowerCase();
					var qty = $(this).val();

					// Check and change
					if(ref_type === "swirls") { ref_type = "swirl"; }

					// List all items with quantity
					if(typeof arrBand[ref_type] == "undefined" || arrBand[ref_type] == null) {
						arrBand[ref_type] = { // color : color,
											  price : $data[$style][$size],
											  qty : parseInt(qty),
											  size : $size
											};
					} else {
						arrBand[ref_type].qty += parseInt(qty);
					}

					// Calculte total quantity
					ttlQty += parseInt(qty);
				}
			}
		});

		$('.js-item-summary').html("");
		$('.js-free-summary').html("");
		$('.total-summary-free').hide();

		// Get proper total qty
		$.ajax({
			type: 'POST',  
			url: 'queryDB.php', 
			data: {'action':'get_prices', 'style':$style, 'size':$size, 'qty':ttlQty},
			beforeSend: function() {
				$('.js-total').hide();
				$('.js-no-total').fadeIn(300);
			},
			success: function(data) {
				data = $.parseJSON(data);
				var htmlProd, htmlShip = '';

				// List all production price/day data
				$.each(data.production, function(key, value) { htmlProd += '<option value="'+value.days+'" data-price="'+value.price+'">Standard Production - '+value.days+' Days (+$'+value.price+')</option>'; });
				$("#ProductionTime").html(htmlProd);
				// List all shipping price/day data
				$.each(data.shipping, function(key, value) { htmlShip += '<option value="'+value.days+'" data-price="'+value.price+'">Standard Production - '+value.days+' Days (+$'+value.price+')</option>'; });
				$("#ShippingTime").html(htmlShip);

				// After prod and shipping prices are fetched, Do Calculations
				$.each(arrBand, function(bKey, bVal) {
					var subPrice = 0;
					var ttlSubPrice = 0;
					var hasQty = false;

					// Get item price
					$.each(bVal.price, function(pQty, pPrice){
						if(hasQty === false) {
							if(pQty <= bVal.qty) {
								subPrice = parseFloat(pPrice);
							} else if(bVal.qty < 20) {
								subPrice = parseFloat(bVal.price['20']);
							} else {
								hasQty = true;
							}
						}
					});

					// Calculate total price
					ttlSubPrice = parseFloat(subPrice) * parseFloat(bVal.qty);
					ttlPrice += parseFloat(ttlSubPrice);

					// List items to total summary
					var html_item = '<div class="row summary-item"><div class="col-md-8 col-sm-6">- '+bKey.bold().toUpperCase()+' ('+bVal.qty+' x '+formatCurrency(subPrice)+' each)</div><div class="col-md-4 col-sm-6 align-right">'+formatCurrency(ttlSubPrice)+'</div></div>';
					$('.js-item-summary').append(html_item);

				});

				// DISPLAYS FOR TOTAL

					// For free promo items
					if(ttlQty >= 100) {
						// Show free items div
						$('#dv-10-free-keychains').show();
						$('.message_wristband_100').show();
						$('.total-summary-free').show();

						// Count keychains available
						var free_qty = $("#freekc").val();
						if(free_qty === "") { free_qty = 0; }

						// Show items to total summary
						var html_item = '<div class="row summary-item"><div class="col-md-8 col-sm-6">- Keychains ('+free_qty+' piece/s)</div><div class="clearfix"></div></div>';
							html_item += '<div class="row summary-item"><div class="col-md-8 col-sm-6">- Free wristbands</div><div class="clearfix"></div></div>';
						$('.js-free-summary').append(html_item);
					} else {
						// Hide free items div
						$('#dv-10-free-keychains').hide();
						$('.message_wristband_100').hide();
						$('#freekc').val('').focus();
					}
					// END : For free promo items

				// DISPLAYS FOR TOTAL
				// Decide if to hide total summary or not
				if(ttlQty >= 20) {

					var style = $('.js-style .wrist_style:checked').val();
					var size = parseInt($('.js-size .wrist_size:checked').val());
					var inc = size >= 2 ? 'Inches':'Inch';

					$('#wristband_style').text(style.toUpperCase());
					$('#wristband_size').text(size+' '+inc);

					var p_days  = $('#ProductionTime option:selected').val();
					var p_price = $('#ProductionTime option:selected').attr('data-price');

					var s_days  = $('#ShippingTime option:selected').val();
					var s_price = $('#ShippingTime option:selected').attr('data-price');

					// Add production and shipping prices
					ttlPrice += parseFloat(p_price);
					ttlPrice += parseFloat(s_price);

					$('#wristband_ptime').attr('data-production-time', p_days).attr('data-production-price', p_price).html(p_days + " Days ("+formatCurrency(p_price)+")");
					$('#wristband_stime').attr('data-shipping-time', s_days).attr('data-shipping-price', s_price).html(s_days + " Days ("+formatCurrency(s_price)+")");

					$('#totalPrice').text(formatCurrency(ttlPrice));
					$('#totalPrice').attr('data-total', ttlPrice);

					$('.prod-ship').fadeIn(300);
					$('.js-total').fadeIn(300);
					$('.js-no-total').hide();
				} else if(ttlQty < 20) {

					$('.js-total').hide();
					$('.js-no-total').fadeIn(300);
				}

			}
		});
	}
}

//Get Total Price of wristbands
function get_total_price(price, qty, wb_style, wb_size) {

	var total_price = 0;
	$('.js-item-summary').html('');

	$('.wrist_color_container:visible .js-color').each(function() {
		var empty = true;
		var sub_qty = 0;
		$(this).find('input[name$="-qty"]').each(function(){
			var q = $(this).val();
			if(q != '') {
				sub_qty += parseInt(q);
				empty = false;
			}
		});

		if(!empty) {
			var color = $(this).data('color');
			// var added_val = ($(this).data('value')!="") ? parseFloat($(this).data('value')) : 0;
			var sub_price = 0;
			var has_qty = false;
			$.each(price, function(key_qty, val_qty){
				if(has_qty === false) {
					if(sub_qty >= key_qty) {
						sub_price = val_qty;
					}
				}
			});

			// var sub_price = added_val + parseFloat(price);
			var total_subprice = sub_price * sub_qty;
			//calculate total price
			total_price += total_subprice;
				var html = '<li class="fwb-list conversion-wrist-'+type+' free-wrist-'+type+'-'+sizeStr+'-'+colorStr+'" data-band-color="' + color + '">';
				html += '<div class="fwb-text col-md-12 col-xs-6">';
					html += '<div class="col-xs-3">'+type.toUpperCase()+'</div>';
					html += '<div class="col-xs-3">'+color+'</div>';
					html += '<div class="col-xs-3">'+sizeStrUp+'</div>';
				html += '</div>';
				html += '<div class="col-md-12 col-xs-6"><input type="number" class="freewb col-xs-12" id="freewb-'+type+'-'+sizeStr+'-'+colorStr+'" name="'+type+'-'+sizeStr+'-'+colorStr+'-fwb" placeholder="0" data-maxlength="3" /></div>';
				html += '<div class="clearfix"></div>';
				html += '</li>';
			$('.js-item-summary').append(html);
		}
	});

	var style_name = wb_style;
	var inc = wb_size >= 2 ? 'Inches':'Inch';

	$('#wristband_style').text(wb_style.toUpperCase());
	$('#wristband_size').text(wb_size+' '+inc);

	var p_days  = parseFloat($('#ProductionTime').val());
	var p_price = $('#ProductionTime').find(':selected').data('price');
	var s_days  = parseFloat($('#ShippingTime').val());
	var s_price = $('#ShippingTime').find(':selected').data('price');
	
    if(isNaN(p_days) || isNaN(p_price)){
		p_days = 0;
		p_price= 0;
	}
	
	if(isNaN(s_days) || isNaN(s_days)){
		s_days = 0;
		s_price = 0;
	}
 
	$('#wristband_ptime').attr('data-production-time', p_days).attr('data-production-price', p_price).html(p_days + " Days ("+formatCurrency(p_price)+")");
	$('#wristband_stime').attr('data-shipping-time', s_days).attr('data-shipping-price', s_price).html(s_days + " Days ("+formatCurrency(s_price)+")");

	total_price += p_price;
	total_price += s_price;

	var style = $('.js-style .wrist_style:checked').val();
	var size = $('.js-size .wrist_size:checked').val();
	var total = 0;

	var addOns = [];
	$('input[type=checkbox].add-ons:checked').each(function(i){
		addOns.push($(this).attr('data-code'));
	});

	$('.wrist_color_container:visible .js-color input[name$="-qty"]').each(function(){
		var qty = $(this).val();
		if(qty != '') {
			total += parseFloat(qty);
		}
	});

	sendToQuery('get_addons', style, size, total, addOns);

	$('#totalPrice').text(formatCurrency(total_price));
	$('#totalPrice').attr('data-total', total_price);

	$('.js-total').fadeIn(300);
	$('.js-no-total').hide();
}

//format currency
function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    }
    return (neg ? "-$" : '$') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
}

//Reset Menu
function resetDrpMenu() {
	$('.drpMenuItems_clipart').fadeOut(300);
	$('.wristForm .clipart li a').removeClass('open');
	$('.wristForm .clipart li a').addClass('close');
	$('.wristForm .clipart li a').addClass('closex');
}

//Get Query for Wristband Production
function sendToQuery(action, style, size, qty, where) {

	$.ajax({
		type: 'POST',  
		url: 'queryDB.php', 
		data: {'action':action, 'style':style, 'size':size, 'qty':qty, 'where':where},
		success: function(data) {
			data = $.parseJSON(data);
			if(action === 'get_prices') {
				var html_prod, html_ship = '';

				$.each(data.production, function(key, value) {
				html_prod += '<option value="'+value.days+'" data-price="'+value.price+'">Standard Production - '+value.days+' Days (+$'+value.price+')</option>';
				});

				$.each(data.shipping, function(key, value) {
				html_ship += '<option value="'+value.days+'" data-price="'+value.price+'">Standard Production - '+value.days+' Days (+$'+value.price+')</option>';
				});

				$("#ProductionTime").html(html_prod);
				$("#ShippingTime").html(html_ship);
				// $('.summary-table').html(response);
			} else if(action === 'get_addons') {

				$('#wristband_add_ons').html(formatCurrency(data * qty));
				$('#wristband_add_ons').attr('data-addon-total', data * qty);

				var new_ttl = parseFloat($('#totalPrice').attr('data-total')) + (data * qty);
				$('#totalPrice').text( formatCurrency(new_ttl) );
				$('#totalPrice').attr('data-total', new_ttl);
			}
			// Calculate again
			// get_style_size('fixed_price');
		}
	});
}

// //Resets
// $('[input]').on('focus',function(){
// 	resetDrpMenu();
// });

//Clipart clik on items
$('.clipart .drpMenuItems').on('click',function(){
	$('.clipart li').removeAttr('style');
	if($(this).hasClass('closex')){
		resetDrpMenu();
		$(this).removeClass('closex');
	$(this).addClass('open');
		$(this).parent().find('.drpMenuItems_clipart').fadeIn(800);
	}else{
		$(this).removeClass('open');
	$(this).addClass('closex');
		$('.drpMenuItems_clipart').fadeOut(300);
	}
});

//Capitalize First letter
String.prototype.capitalizeFirstLetter = function() {

    return this.charAt(0).toUpperCase() + this.slice(1);
}

// Get whole total data
function getTotalData() {
	// Get JSON Price list
	var $data = $.parseJSON(price_json);
	// Get wristband size & style
	var $size = $(".js-size .wrist_size:checked").val();
	var $style = $(".js-style .wrist_style:checked").val();
	// Get selected production settings
	var $p_days = $("#ProductionTime option:selected").val();
		$p_days = ($p_days != "" && !isNaN(parseInt($p_days))) ? parseInt($p_days) : 0;
	var $p_price = $("#ProductionTime option:selected").attr("data-price");
		$p_price = ($p_price != "" && !isNaN(parseFloat($p_price))) ? parseFloat($p_price) : 0;
	// Get selected shipping settings
	var $s_days = $("#ShippingTime option:selected").val();
		$s_days = ($s_days != "" && !isNaN(parseInt($s_days))) ? parseInt($s_days) : 0;
	var $s_price = $("#ShippingTime option:selected").attr("data-price");
		$s_price = ($s_price != "" && !isNaN(parseFloat($s_price))) ? parseFloat($s_price) : 0;
	// Get selected font
	var $font = $("#preview-pane").css("font-family");
	// Set up an object for collection
	var $collection = { 
						add_ons : {}, 
						font : $font, 
						free : {}, 
						icon : {}, 
						items : {}, 
						production_days : $p_days, 
						production_price : $p_price, 
						shipping_days : $s_days, 
						shipping_price : $s_price, 
						size : $size, 
						style : $style, 
						text : {}, 
						total_qty : 0, 
						total_price : 0 
					};
	// Get text format
	var $text_type = $("input[type='radio'].band-text-design:checked").val();
	// Check selected text format then get all texts
	if ($text_type == "front-back-select") {
		$collection.text["type"] = "regular";
		$collection.text["text_back"] = $("#input-back-text").val();
		$collection.text["text_front"] = $("#input-front-text").val();
		$collection.text["text_inside"] = $("#input-inside-text").val();
	} else {
		$collection.text["type"] = "continuous";
		$collection.text["text_continue"] = $("#input-continue-text").val();
		$collection.text["text_inside"] = $("#input-inside-text").val();
	}
	// Get selected icons
	$collection.icon["front_start"]		= $(".start-fc img").attr("src");
	$collection.icon["front_end"]		= $(".end-fc img").attr("src");
	$collection.icon["back_start"]		= $(".back-mc img").attr("src");
	$collection.icon["back_end"]		= $(".backend-mc img").attr("src");
	$collection.icon["continues_start"]	= $(".start-cc img").attr("src");
	$collection.icon["continues_end"]	= $(".end-cc img").attr("src");
	// Get all wristbands with quantity
	$(".wrist_color_container:visible .js-color input[name$='-qty']").each(function() {
		// Get quantity
		var $qty = $(this).val();
		if($qty) {
			$qty = parseInt($qty);
			if($qty > 0) {
				// Variables
				var _ref_color = $(this).attr("ref"); if(!_ref_color){ return; }
				var _ref_color_font = $(this).parents(".qty-box").find(".fntin").attr("ref-font-color");
				var _ref_color_title = "Custom"; if(typeof $(this).attr("reftitle") != "undefined" && $(this).attr("reftitle") != "") { _ref_color_title = $(this).attr("reftitle"); }
				var _ref_color_str = _ref_color.replace(/,/g, "-");
				var _ref_color_arr = _ref_color.split(",");
				var _ref_size_name = $(this).attr("name");
				var _ref_type = $(this).parents(".tab-pane").data("color").toLowerCase();

				// Fix proper type and color per type
				if(_ref_type === "swirls") {
					_ref_type = "swirl";
				} else if (_ref_type === "dual") { // Fix dual's proper values
					_ref_type = "solid";
					_ref_color_font = _ref_color_arr[1];
					_ref_color_arr = _ref_color_arr.slice(0,1);
				}

				// Fix proper font-color
				if ($style === "debossed") {
					_ref_color_font = "000000";
				} else if ($style === "embossed") {
					_ref_color_font = "000000";
				}

				// Check and change
				if(_ref_type === "swirls") { _ref_type = "swirl"; }

				// List all items with quantity
				if(typeof $collection.items[_ref_type] == "undefined" || $collection.items[_ref_type] == null) {
					// Set up data
					$collection.items[_ref_type] = { data:[], price:0, qty:parseInt($qty), total:0 };
				} else {
					// Add quantity
					$collection.items[_ref_type].qty += parseInt($qty);
				}

				// Get proper item price
				// Set variables
				var hasQty = false;

				// Loop through json price list
				$.each($data[$style][$size], function(_data_qty, _data_prc) {
					// Check if already found the price
					if(hasQty === false) {
						// If less than or equal
						if(parseInt(_data_qty) <= $collection.items[_ref_type].qty) {
							$collection.items[_ref_type].price = parseFloat(_data_prc); // Get price
						} else if($collection.items[_ref_type].qty < 20) {
							$collection.items[_ref_type].price = parseFloat($data[$style][$size]['20']); // Get price
						} else {
							hasQty = true;
						}
					}
				});

				// Compute total price
				$collection.items[_ref_type].total = $collection.items[_ref_type].price * $collection.items[_ref_type].qty;
				// Populate items
				$collection.items[_ref_type].data.push({ color:_ref_color_arr, font:_ref_color_font, name:_ref_color_title.toString().toLowerCase(), qty:$qty, size:_ref_size_name.toString().toLowerCase().replace("-qty", "") });
				// Compute total quantity
				$collection.total_qty += parseInt($qty);
			}
		}
	});

	// Get JSON Add-ons price list
	var $data_addon = $.parseJSON(addon_json);

	// For add-ons
	$("input[type='checkbox'].add-ons:checked").each(function() {
		// Set variables
		var hasAOPrice = false;
		var _aoCode = $(this).attr("data-code");
		// Get proper add-on price
		if(typeof $data_addon[_aoCode] != "undefined") {
			$.each($data_addon[_aoCode], function(_ao_qty, _ao_prc) {
				// Check if already found the price
				if(hasAOPrice === false) {
					// If less than or equal
					if(parseInt(_ao_qty) <= $collection.total_qty) {
						// Get price
						$collection.add_ons[_aoCode] = { code:_aoCode, price:parseFloat(_ao_prc), total:parseFloat($collection.total_qty * parseFloat(_ao_prc)) };
					} else if($collection.total_qty < 20) {
						// Get price
						$collection.add_ons[_aoCode] = { code:_aoCode, price:parseFloat(_ao_prc), total:parseFloat($collection.total_qty*parseFloat(_ao_prc)) };
						hasAOPrice = true;
					} else {
						hasAOPrice = true;
					}
				}
			});
		} else { // Ceck if add_on is not on JSON
			$collection.add_ons[_aoCode] = { code:_aoCode, price:0, total:0 };
		}
	});

	// If total quantity is equal or over 100, get all free items
	if($collection.total_qty >= 100) {
		// Check free wristbands quantity
		var free_kc_qty = $("#freekc").val().trim();
		// For keychains
		if(free_kc_qty == "") { free_kc_qty = 0; }
		free_kc_qty = parseInt(free_kc_qty);
		// Place to collection
		$collection.free["keychains"] = { qty:free_kc_qty };
		// For writbands
		$collection.free["wristbands"] = { qty:0, data:[] };
		// Place to collection
		$(".freewb").each(function() {
			$collection.free["wristbands"].data.push({ 
													color : $(this).attr("data-color").split(","), 
													font : $(this).attr("data-font-color"), 
													name : $(this).attr("data-name").toString().toLowerCase(), 
													qty : ($(this).val().trim() == "") ? 0 : parseInt($(this).val().trim()), 
													size : $(this).attr("data-size"), 
													style : $(this).attr("data-style") 
												});
			$collection.free["wristbands"].qty += ($(this).val().trim() == "") ? 0 : parseInt($(this).val().trim());
		});
	}

	// Compute total price
	// Add shipping & production prices to total
	$collection.total_price += parseFloat($collection.shipping_price);
	$collection.total_price += parseFloat($collection.production_price);
	// Add item prices to total
	$.each($collection.items, function(key, value) {
		$collection.total_price += parseFloat(value.total);
	});
	// Add add-on prices to total
	$.each($collection.add_ons, function(key, value) {
		$collection.total_price += parseFloat(value.total);
	});

	// Return order collection
	return $collection;
}

function populateTotalSection(_collection) {

	// Place selected stle & size
	$("#wristband_style").text(_collection.style.toLowerCase().capitalizeFirstLetter());
	$("#wristband_size").text(_collection.size + " Inches");

	// For items
	var html_band_item = "";
	$(".js-item-summary").html(html_band_item);
		$.each(_collection.items, function(key, value) {
			html_band_item += "<div class='row summary-item'><div class='col-md-8 col-sm-6'>- " + key.toLowerCase().capitalizeFirstLetter() + " (" + value.qty + " x " + formatCurrency(value.price) + " each)</div><div class='col-md-4 col-sm-6 align-right'>" + formatCurrency(value.total) + "</div></div>";
		});
	// Place items
	$(".js-item-summary").append(html_band_item);

	// For add-ons
	var html_add_ons = "";
	var total_add_ons = 0;
	$("#wristband_add_on_list").html(html_add_ons);
		$.each(_collection.add_ons, function(key, value) {
			if(value.code == "individual") { value.code = "individual pack"; }
			html_add_ons += "- " + value.code.replace(/-/g, " ").toLowerCase().capitalizeFirstLetter() + " (" + _collection.total_qty + " x " + formatCurrency(value.price) + " each)<br />";
			total_add_ons += value.total;
		});
	// Place add-ons
	$("#wristband_add_on_list").append(html_add_ons);
	$('#wristband_add_ons').html(formatCurrency(total_add_ons));
	$('#wristband_add_ons').attr('data-addon-total', total_add_ons);

	// Place shipping & production prices
	$("#wristband_ptime").attr("data-production-time", _collection.production_days).attr("data-production-price", _collection.production_price).html(_collection.production_days + " Days ("+formatCurrency(_collection.production_price)+")");
	$("#wristband_stime").attr("data-shipping-time", _collection.shipping_days).attr("data-shipping-price", _collection.shipping_price).html(_collection.shipping_days + " Days ("+formatCurrency(_collection.shipping_price)+")");

	// Place total price
	$("#totalPrice").text(formatCurrency(_collection.total_price));
	$("#totalPrice").attr("data-total", _collection.total_price);

	// For displaying free promo item section
	if(_collection.total_qty >= 100) {

		// Show free items at total summary
		var html_item = "";
		if(typeof _collection.free.keychains != "undefined") {
			html_item += '<div class="row summary-item"><div class="col-md-8 col-sm-6">- Keychains (' + _collection.free.keychains.qty + ' piece/s)</div><div class="clearfix"></div></div>';
		}
		if(typeof _collection.free.wristbands != "undefined") {
			html_item += '<div class="row summary-item"><div class="col-md-8 col-sm-6">- Wristbands (' + _collection.free.wristbands.qty + ' piece/s)</div><div class="clearfix"></div></div>';
			$.each(_collection.free.wristbands.data, function(key, value) {
				html_item += '<div class="row summary-item"><div class="col-md-8 col-sm-6" style="font-size:12px;">&nbsp;&nbsp;&nbsp;- ' + value.name.toLowerCase().capitalizeFirstLetter() + ' (' + value.qty + ' piece/s)</div><div class="clearfix"></div></div>';
			});
		}

		// Show free items div
		if(html_item !== "") {
			$("#dv-10-free-keychains, .message_wristband_100, .total-summary-free").show();
			// Show available free items
			$('.js-free-summary').html(html_item);
		} else { // Hide free items div
			$("#dv-10-free-keychains, .free-convert, .message_wristband_100, .total-summary-free").hide();
		}

	} else { // Hide free items div
		$("#dv-10-free-keychains, .free-convert, .message_wristband_100, .total-summary-free").hide();
		// $('#freekc').val('').focus();
	}

	// For displaying totals section
	if(_collection.total_qty >= 20) {
		$('.prod-ship').fadeIn(300);
		$('.js-total').fadeIn(300);
		$('.js-no-total').hide();
	} else {
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);
	}
}