$(function(){

	 var $style_value;
	 var $size_value;

	 $(".my_color").spectrum({
			 color: "#079665"
	 });

	//color segmented custom
	 $(".my_color1_segmented").spectrum({
			 color: "#cc33ff"
	 });

	 //color segmented custom
	 $(".my_color2_segmented").spectrum({
			 color: "#99ff66"
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
	$(".view-more").click(function() {
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
	$(".cont-select").click(function() {
		$('.front-back-select').prop('checked', false)
		$('.c-select').css("display","block");
		$('.fb-select').css("display","none");
		$('.f-input').css("display","none");
		$('.c-input').css("display","block");
	});
	

	$('body').on('click', '.preview-pill', function(e) {
		$('.preview-pill').removeClass('active');
		$(this).addClass('active');

		$("#front-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
		$("#back-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
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
	$('.band-text').keyup().trigger;

	$('.band-color').click(function(){

		$color = $(this).attr('value');
		$('.band').css('background', $color);
	});

	//select wristband style
	$('.js-style').click(function(){
		$('.js-style').find('input[type="radio"]').prop('checked', false);
		$('.js-style').removeClass('active');
		$(this).find('input[type="radio"]').prop('checked', true);
		$(this).addClass('active');

		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
	});

	//select wristband size
	$('.js-size').click(function(){
		$('.js-size').find('input[type="radio"]').prop('checked', false);
		$('.js-size').removeClass('active');
		$(this).find('input[type="radio"]').prop('checked', true);
		$(this).addClass('active');

		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
	});

	//adding quantity to wristband colors
	$('.box-color').find('input[name$="-qty"]').keydown(function(e){
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
		    // Allow: Ctrl+A
		    (e.keyCode == 65 && e.ctrlKey === true) ||
		    // Allow: home, end, left, right
		    (e.keyCode >= 35 && e.keyCode <= 39)) {
		        // let it happen, don't do anything
		        return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105 || e.keyCode == 190 || e.keyCode == 110)) {
		    e.preventDefault();
		}
		else {
			get_style_size('fixed_price');
		}
	});

	$('.box-color').find('input[name$="-qty"]').blur(function(){
		var total = 0;
		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').each(function(i, el){
			var qty = $(this).val();

			if(qty != '') {
				total += parseInt(qty);
			}
		});

		if(total == 0) {
			$('.js-total').hide();
			$('.js-no-total').fadeIn(300);
		}
	});


});

function get_style_size(type) {

	var check_style = $('input[name="wrist_style"]:checked').length;
	var check_size = $('input[name="wrist_size"]:checked').length;

	if(check_size == 0) {
		var $size = '1/2';
	}
	else {
		var $size = $('input[name="wrist_size"]:checked').data('size');
	}

	if(check_style == 0) {
		var $style = 'imprinted';
	}
	else {
		var $style = $('input[name="wrist_style"]:checked').data('style');
	}

	color_type = $('#wrist_color_container ul.js-colors li.active').attr('data-color-style');
	colors = [];
	if(color_type === "solid") {
		colors.push($("#solid-color-0").val());
	} else if(color_type === "segmented") {
		if($("#segmented-color-0").val() !== "") { colors.push($("#segmented-color-0").val()); }
		if($("#segmented-color-1").val() !== "") { colors.push($("#segmented-color-1").val()); }
		if($("#segmented-color-2").val() !== "") { colors.push($("#segmented-color-2").val()); }
		if($("#segmented-color-3").val() !== "") { colors.push($("#segmented-color-3").val()); }
		if($("#segmented-color-4").val() !== "") { colors.push($("#segmented-color-4").val()); }
		if($("#segmented-color-5").val() !== "") { colors.push($("#segmented-color-5").val()); }
	} else if(color_type === "swirls") {
		if($("#swirl-color-0").val() !== "") { colors.push($("#swirl-color-0").val()); }
		if($("#swirl-color-1").val() !== "") { colors.push($("#swirl-color-1").val()); }
		if($("#swirl-color-2").val() !== "") { colors.push($("#swirl-color-2").val()); }
	}

	generatePreviewImage( color_type, colors );
	get_price_data($style, $size, type);
}

function get_price_data($style, $size, type) {

	//get JSON Price list
	var count = 0;
	$.getJSON( "order.json", function( data ) {
	  	var items = [];
	  	var arr = $.map(data, function(elem) { return elem });
	  	var len = arr.length - 1;

	  	for(var keys in arr) {

	  		for(var wb_style in arr[keys]) {
	  			if(wb_style == $style) {

	  				for (i in arr[keys][wb_style]) {
	  					for (var wb_size in arr[keys][wb_style][i]) {
	  						if(wb_size == $size) {
	  							var obj_price = arr[keys][wb_style][i][$size][0];

	  							if(type == 'price_table') {
		  							$('#priceTable').find('td.js-temp').remove();
		  							$.each(obj_price, function(key, val){
		  								$('#priceTable').append('<td class="js-temp">$<span data-qty-range="'+key+'">'+val+'</span></td>');
		  								$('.js-pricing-table').fadeIn(300);
		  							});
		  							$('.js-wb-caption').find('.style').text($style.toUpperCase());
		  							$('.js-wb-caption').find('.size').text($size);
		  						}
		  						if(type == 'fixed_price') {

		  							var total_qty = 0;
		  							$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').each(function(i, el){
		  								var qty = $(this).val();

		  								if(qty != '') {
		  									total_qty += parseInt(qty);
		  								}
		  							});

		  							var arr_keys = Object.keys(obj_price);

		  							for(key in arr_keys) {
		  								if(key < (arr_keys.length-1)) {
		  									var k = parseInt(key) + 1;

		  									if(total_qty >= arr_keys[key] && total_qty < arr_keys[k]) {
		  										get_total_price(obj_price[arr_keys[key]], total_qty,wb_style, $size);
		  									}
		  								}
		  							}
		  						}
	  						}
	  					}
	  				}
	  			}
	  		}
	  	}

	});
}

function get_total_price(price, qty, wb_style, wb_size) {

	var total_price = 0;
	$('.js-item-summary').html('');
	$('#wrist_color_container').find('.js-color').each(function(){
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
			var added_val = parseFloat($(this).data('value'));

			var sub_price = added_val + parseFloat(price);
			var total_subprice = sub_price * sub_qty;

			//calculate total price
			total_price += total_subprice;

			var html_item = '<div class="row summary-item"><div class="col-md-8 col-sm-6">- '+color+' ('+sub_qty+' x '+formatCurrency(sub_price)+' each)</div><div class="col-md-4 col-sm-6 align-right">'+formatCurrency(total_subprice)+'</div></div>';

			$('.js-item-summary').append(html_item);
		}
	});

	var style_name = wb_style;
	var inc = wb_size >= 2 ? 'Inches':'Inch';

	$('#wristband_style').text(wb_style.toUpperCase());
	$('#wristband_size').text(wb_size+' '+inc);

	$('#totalPrice').text(formatCurrency(total_price));

	/*
	$('#style_name').text(style_name);
	$('#qty_style').text("....$"+ price + "x"+qty);
	$('#order_title').text("Order Summary:");
	*/

	$('.js-total').fadeIn(300);
	$('.js-no-total').hide();
}

function formatCurrency(total) {
    var neg = false;
    if(total < 0) {
        neg = true;
        total = Math.abs(total);
    }
    return (neg ? "-$" : '$') + parseFloat(total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString();
}

function resetDrpMenu() {
	$('.drpMenuItems_clipart').fadeOut(300);
	$('.wristForm .clipart li a').removeClass('open');
	$('.wristForm .clipart li a').addClass('closex');
}

$('[input]').live('focus',function(){
	resetDrpMenu();
});

$('.clipart .drpMenuItems').live('click',function(){
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
