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
		dynamic_font_color = $(this);
		$('#FontColorQtyModal').modal('show');
	});

	//font-color selection per qty
	$('body').on('click', '#FontColorQtyModal ul.font-color-list li', function(){
		dynamic_font_color.css('background-color', '#'+$(this).attr('refcode')).attr('ref-font-color', $(this).attr('refcode'));
		$('#FontColorQtyModal').modal('hide');
		
		$("#preview-pane-selection").html("");

		var total = 0;
		var map = [];

		var style = $('.js-style .wrist_style:checked').val();
		var size = $('.js-size .wrist_size:checked').val();

		if(style === "figured") {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-fig");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-reg");
			$(".preview-text").css("line-height", "104px");
		} else {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-reg");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-fig");
			$(".preview-text").css("line-height", "54px");
		}

		$('.wrist_color_container:visible .js-color input[name$="-qty"]').each(function(){
             
			var ref_type = $(this).parents('.tab-pane').data('color').toLowerCase();
			var ref_color = $(this).attr('ref');
			if(!ref_color){ return; }

			var ref_color_str = ref_color.replace(/,/g, '-');
			var ref_color_arr = ref_color.split(',');

			var qty = $(this).val();

			if(qty) {
				
				var name = $(this).attr("name");
				var ref_color_font = $(this).parents('.qty-box').find('.fntin').attr('ref-font-color');
				var idx = ref_type+"-"+style+"-"+name;
					qty = parseInt(qty);

				if(qty>0){

					$('.prod-ship').css('display','block');
					sendToQuery('get_prices', style, size, qty);
					// mapi[dx].push({'style':style, 'type':ref_type, 'size':name, 'qty':qty, 'color':ref_color_str});
					map.push({'style':style, 'type':ref_type, 'size':name, 'qty':qty, 'color':ref_color_str});

					if(ref_type === "swirls") {
						ref_type = "swirl";
					} else if (ref_type === "dual") {
						ref_type = "solid";
						ref_color_font = ref_color_arr[1];
						ref_color_arr = ref_color_arr.slice(0,1);
					}

					if (style === "debossed") {
						ref_color_font = "000000";
					} else if (style === "embossed") {
						ref_color_font = "000000";
					}
					
					//if background black and font-color black
					if(ref_color_arr=="000000" && ref_color_font == "000000"){
						ref_color_font = "464646";
					}
					S('.click-pre').show();
					$("#preview-pane-selection").append('<li class="blink preview-pill preview-color-'+ref_type+'-'+ref_color_arr.join("-")+'-font-'+ref_color_font+'" data-type="'+ref_type+'" data-font-color="'+ref_color_font+'" data-image-link="gd/belt.php?style='+ref_type+'&type='+style+'&color='+ref_color_arr.join(",")+'" style="background-image:url(\'gd/belt.php?style='+ref_type+'&color='+ref_color_arr.join(",")+'\');background-size:30px;background-repeat: no-repeat;background-size: 100% 100%;color:#'+ref_color_font+'">Y</li>');

				}

				total += parseInt(qty);
			}
		});
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
	$('body').on('click', '.add-ons', function(e) {
		e.stopPropagation();
		get_style_size('fixed_price');
	});
	
	// Free wristbands EVENTS
	$('.free-bands').change(function(){
        if(this.checked){
            $(".free-convert").show();
		}
		else{
            $(".free-convert").hide();
        }
    });
	
	
	//Confirm on freewristband conversion
	$(".done-button-fwb").on("click",function(e) {
		var qty = 0;
		var html_item="";
		$('.freewb').each(function() {
			qty += +$(this).val();
		});
	
		if(qty>100){
			alert("You have exceeded the limit number for free wristbands.");
		}else{
			$('.js-free-bands').show().delay(5000).hide(0);
			html_item = '<div class="row total-summary-freewb"><div class="col-md-8 col-sm-6">- Free Wristbands ('+qty+')</div><div class="clearfix"></div></div>';
		}
		
		$('.total-summary-after').html(html_item);

	});

	//Select on production and shipping option
	$('body').on('click', '.js-time-options', function(e) {
		e.stopPropagation();

		var $size = '1/2';;
		var $style = 'imprinted';

		if($('input[name="wrist_size"]:checked').length == 0) {
		} else { $size = $('input[name="wrist_size"]:checked').data('size'); }

		if($('input[name="wrist_style"]:checked').length == 0) {
		} else {
			var $style = $('input[name="wrist_style"]:checked').data('style');
			if($style === "printed" || $style === "ink-injected" || $style === "embossed-printed" || $style === "figured") {
				$('.fntin').show().addClass('active');
			} else {
				$('.fntin').hide().removeClass('active');
			}
		}

		//get JSON Price list
		var ttlQty = 0;
		var ttlPrice = 0;
		var arrBand = {};
		var $data = $.parseJSON(price_json);

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
		var style = $('.js-style .wrist_style:checked').val();
		var size = parseFloat($('.js-size .wrist_size:checked').val());
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

	});

	//submit order form
	$('body').on('submit', '#order-form', function(e) {
		e.preventDefault();
		e.stopPropagation();

		console.log('DATA >>>');
		console.log('Style : ' + $('#wristband_style').html() );
		console.log('Size  : ' + $('#wristband_size').html() );
		console.log('Price (Addon) : ' + $('#wristband_add_ons').html() );
		console.log('Price (Prod)  : ' + $('#wristband_ptime').attr('data-production-price') );
		console.log('Price (Ship)  : ' + $('#wristband_stime').attr('data-shipping-price') );
		console.log('Days (Prod) : ' + $('#wristband_ptime').attr('data-production-time') );
		console.log('Days (Ship) : ' + $('#wristband_stime').attr('data-shipping-time') );
		console.log('Total : ' + $('#totalPrice').html());
	});

	// var has_checked = false;
	// var has_checked_count = 0;
	// var has_checked_count_value = $(".wrist_size").length;
	// //Check if has default size
	// $(".wrist_size").each(function(){
	// 	has_checked_count++;
	// 	if ($(this).prop('checked')==true) {
	// 		has_checked == true;
	// 	}
	// 	if(has_checked_count == has_checked_count_value) {
	// 		if(!has_checked) {
	// 			$(".wrist_size:first").prop('checked', true);
				get_style_size('price_table');
	// 		}
	// 	}
	// });

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

	//preview message
	$('.band-text').keyup(function(){
		$.each($('.band-text'), function(key, obj){
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

	// $('.band-text').keyup().trigger;

	// $('.band-color').click(function(){
	// 	$color = $(this).attr('value');
	// 	$('.band').css('background', $color);
	// });

	//select wristband style
	$('body').on('click', '.js-style', function() {

		// Uncheck others
		$('.js-style').find('input[type="radio"]').prop('checked', false);
		$('.js-style').removeClass('active');
		$('.click-pre').hide();
		
		// Check & set as active
		$(this).find('input[type="radio"]').prop('checked', true);
		$(this).addClass('active');

		//check style hide size divs
		var style = $(this).find('input[type="radio"]').val();

		if(style === "printed" || style === "ink-injected" || style === "embossed-printed" || style === "figured"){
			$('.fntin').show().addClass('active');
		}else{
			$('.fntin').hide().removeClass('active');
		}

		$(".wsize-default .js-size").hide();
		$(".wristband-view-color").hide();
		
		$('.js-size').removeClass('active');
		$(".wristband-view-color").hide();

		var style = $('.js-style .wrist_style:checked').val();
		$(".preview-panel").find("img").remove();
		
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
			var item = $('.js-size:visible .wrist_size:checked').val();

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
			var item = $('.js-size:visible .wrist_size:checked').val();

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
			var item = $('.js-size:visible .wrist_size:checked').val();

			// Show items
			if($.inArray(item, ["1/4", "1/2", "3/4", "1"]) > 0) {
				$(".regular-color-size").show(); // Show regular sizes
			} else {
				$(".large-color-size").show(); // Show large sizes
			}
		}
		
		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
	});

	//select wristband size
	$('body').on('click', '.js-size', function(){
		$('.js-size').find('input[type="radio"]').prop('checked', false);
		$('.js-size').removeClass('active');
		$(this).find('input[type="radio"]').prop('checked', true);
		$(this).addClass('active');

		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		
		var item = $('.js-size:visible .wrist_size:checked').val();
		var style = $('.js-style .wrist_style:checked').val();

		$(".wristband-view-color").hide();

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

		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
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

		$(".area-conversion-list").html("");
		$("#preview-pane-selection").html("");

		var total = 0;
		var style = $('.js-style .wrist_style:checked').val();
		var size = $('.js-size .wrist_size:checked').val();

		if(style === "figured") {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-fig");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-reg");
			$(".preview-text").css("line-height", "104px");
		} else {
			$("#front-view, #back-view, #inside-view, #continue-view").addClass("set-height-reg");
			$("#front-view, #back-view, #inside-view, #continue-view").removeClass("set-height-fig");
			$(".preview-text").css("line-height", "54px");
		}

		$.ajax({
			type: 'GET',
			url: 'sample.php', //this should be url to your PHP file
			dataType: 'html',
			data: {},
			beforeSend: function() {},
			complete: function() {},
			success: function(html) {

				$('.wrist_color_container:visible .box-color input[name$="-qty"]').each(function(){

					var ref_type = $(this).parents('.tab-pane').data('color').toLowerCase();
					var ref_color = $(this).attr('ref');
					if(!ref_color){ return; }

					var ref_color_str = ref_color.replace(/,/g, '-');
					var ref_color_arr = ref_color.split(',');
					var qty = $(this).val();
			
					if(qty) {
						var name = $(this).attr("name");
						var ref_color_font = $(this).parents('.qty-box').find('.fntin').attr('ref-font-color');
						var idx = ref_type+"-"+style+"-"+name;
						var color_title = $(this).attr('reftitle');
							qty = parseInt(qty);

						if(qty>0){
							$('.prod-ship').css('display','block');

							// For preview ------------
							// Fix proper preview type
							if(ref_type === "swirls") {
								ref_type = "swirl";
							} else if (ref_type === "dual") { // Fix dual's proper values
								ref_type = "solid";
								ref_color_font = ref_color_arr[1];
								ref_color_arr = ref_color_arr.slice(0,1);
							}
							// Fix proper font-color
							if (style === "debossed") {
								ref_color_font = "000000";
							} else if (style === "embossed") {
								ref_color_font = "000000";
							}
							//if background black and font-color black
							if(ref_color_arr=="000000" && ref_color_font == "000000"){
								ref_color_font = "464646";
								$("#front-view, #back-view, #inside-view, #continue-view").addClass("clipart-black");
							}

							$('.click-pre').show();
							$("#preview-pane-selection").append('<li class="blink preview-pill preview-color-'+ref_type+'-'+ref_color_arr.join("-")+'-font-'+ref_color_font+'" data-type="'+ref_type+'" data-font-color="'+ref_color_font+'" data-image-link="gd/belt.php?style='+ref_type+'&type='+style+'&color='+ref_color_arr.join(",")+'" style="background-image:url(\'gd/belt.php?style='+ref_type+'&color='+ref_color_arr.join(",")+'\');background-size:30px;background-repeat: no-repeat;background-size: 100% 100%;">Y</li>');
							// End : for preview ------------

							// For free 100 conversions
							// getFreeWristbands(name, ref_type, color_title, qty);

							qty = qty.toString().toLowerCase();
							type = ref_type.toString().toLowerCase();

							sizeStr = name.toString().toLowerCase();
							sizeStr = sizeStr.replace("-qty", "");
							sizeStrUp = sizeStr.capitalizeFirstLetter();

							color = color_title.toString();
							colorStr = color.toLowerCase().replace(/ /g, "-");

							if(!$('.conversion-wrist-'+type+'.free-wrist-'+type+'-'+sizeStr+'-'+colorStr).length > 0) {
								var html = '<li class="fwb-list conversion-wrist-'+type+' free-wrist-'+type+'-'+sizeStr+'-'+colorStr+'" data-band-color="' + color + '">';
									html += '<div class="fwb-text col-md-6 col-xs-12 row">';
										html += '<div class="col-xs-4">'+type.toUpperCase()+'</div>';
										html += '<div class="col-xs-4">'+color+'</div>';
										html += '<div class="col-xs-4">'+sizeStrUp+'</div>';
									html += '</div>';
									html += '<div class="col-md-6 col-xs-12"><label>Input Quantity</label><input type="number" class="freewb col-xs-12" id="freewb-'+type+'-'+sizeStr+'-'+colorStr+'" name="'+type+'-'+sizeStr+'-'+colorStr+'-fwb" placeholder="0" data-maxlength="3" /></div>';
									html += '<div class="clearfix"></div>';
									html += '</li>';
								$(".area-conversion-list").append(html);
							}

							total += qty;
						}
					}
				});

				get_style_size('fixed_price');
			}
		});
		// END AJAX

	});


	// $('body').on('click', '#free-100-wristband', function(){
	// 	if($(this).hasClass('checked')){
	// 		$(this).prop('checked',false);
	// 		$(this).removeClass('checked');
	// 		$('#dv-100-free-band-content').hide();
	// 	}else{
	// 		$(this).prop('checked',true);
	// 		$(this).addClass('checked');
	// 		$('#dv-100-free-band-content').show();
	// 	}
	// });
	
	// $('body').on('click', '.done-free', function(){
	// 	total = 0;
	// 	$('.freewb-input').each(function(){
	// 		var qty = ($(this).val()) ? parseInt($(this).val()) : 0;
	// 		total+=qty;
	// 	});

	// 	if(total>100) {
	// 		alert("Total must not be over 100 wristbands.");
	// 		return;
	// 	}

	// 	$('#wb-free-count').html(total+' of 100');

	// 	if($(this).hasClass('done')){
	// 		$(this).hide();
	// 		$('.done-free.update').show();
	// 		$('.freewb-input').prop('disabled', true);
	// 	}else if($(this).hasClass('update')){
	// 		$(this).hide();
	// 		$('.done-free.done').show();
	// 		$('.freewb-input').prop('disabled', false)
	// 	}
	// });

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

//Resets
$('[input]').on('focus',function(){
	resetDrpMenu();
});


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

//Get Free wristbands
function getFreeWristbands(size, type, color, qty) {
	size = size.toString();
	color = color.toString();

	qty = qty.toString().toLowerCase();
	type = type.toString().toLowerCase();

	sizeStr = size.toLowerCase();
	sizeStr = sizeStr.replace("-qty", "");
	sizeStrUp = sizeStr.capitalizeFirstLetter();

	colorStr = color.toString().toLowerCase();
	colorStr = colorStr.replace(/ /g, "-");

	if(!$('.conversion-wrist-'+type+'.free-wrist-'+type+'-'+sizeStr+'-'+colorStr).length > 0) {
		var html = '<li class="fwb-list conversion-wrist-'+type+' free-wrist-'+type+'-'+sizeStr+'-'+colorStr+'" data-band-color="' + color + '">';
			html += '<div class="fwb-text col-md-12 col-xs-6">';
				html += '<div class="col-xs-3">'+type.toUpperCase()+'</div>';
				html += '<div class="col-xs-3">'+color+'</div>';
				html += '<div class="col-xs-3">'+sizeStrUp+'</div>';
			html += '</div>';
			html += '<div class="col-md-12 col-xs-6 align-right"><input type="number" class="freewb col-xs-12" id="freewb-'+type+'-'+sizeStr+'-'+colorStr+'" name="'+type+'-'+sizeStr+'-'+colorStr+'-fwb" placeholder="0" data-maxlength="3" /></div>';
			html += '<div class="clearfix"></div>';
			html += '</li>';
		$(".area-conversion-list").append(html);
	}

}

//Capitalize First letter
String.prototype.capitalizeFirstLetter = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}
