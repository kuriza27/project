var has_preview = {};
var dynamic_font_color = "";
var default_font_color = "000000";

$(document).ready(function(){
	// For regular wristband size
	$('.qtyin-adult-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-adult-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-medium-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-medium-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-youth-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-youth-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	// For regular wristband xt size
	$('.xt-small-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-xt-small-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.xt-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-xt-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');

	// For large wristband size
	$('.qtyin-adult-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-adult-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-medium-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-medium-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.qtyin-youth-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-qtyin-youth-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	// For large wristband xt size
	$('.xt-small-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-xt-small-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');
	$('.xt-large-large-qty').closest('div').addClass('qty-box').append('<div class="fntin fnt-xt-large-large-qty" data-toggle="tooltip" data-placement="bottom" title="Select font color" ref-font-color="'+default_font_color+'" style="background-color:#'+default_font_color+';"></div>');

	// For font color select event
	$('body').on('click', '.fntin', function(){
		dynamic_font_color = $(this);
		$('#FontColorQtyModal').modal('show');
	});

	$('body').on('click', '#FontColorQtyModal ul.font-color-list li', function(){
		dynamic_font_color.css('background-color', '#'+$(this).attr('refcode')).attr('ref-font-color', $(this).attr('refcode'));
		$('#FontColorQtyModal').modal('hide');
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
		$(this).addClass('active');

		$("#front-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
		$("#back-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');
		$("#inside-view").css('background', 'url(' + $(this).attr('data-image-link') + ')');

		if(typeof($(this).attr('data-font-color')) != "undefined"){
			$("#preview-pane").css("color", "#"+$(this).attr('data-font-color'));
		}else{
			if($("#font-color").css("display") != "none"){
				$("#preview-pane").css("color", "#"+$("#preview-textcolor").css("background-color"));
			}else{
				$("#preview-pane").css("color", "#444444");
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

		//check style hide size divs
        var style = $(this).find('input[type="radio"]').val();

		if(style === "printed" || style === "ink-injected" || style === "embossed-printed" || style === "figured"){
			$('.fntin').show().addClass('active');
		}else{
			$('.fntin').hide().removeClass('active');
		}

		if(style =='dual-layer'){
			$("#onehalf").hide();
			$("#two").hide();
			$("#quarter").hide();
			$("#one").show();
			$(".regular-color-size").css("display","none");
			$(".large-color-size").css("display","none");	
			$(".regular-figured-size").css("display","none");
			$(".regular-dual-size").css("display","block");
		}
		else if(style =='figured'){
			$("#onehalf").hide();
			$("#two").hide();
			$("#quarter").hide();	
			$("#one").hide();
			$(".regular-color-size").css("display","none");
			$(".large-color-size").css("display","none");	
			$(".regular-figured-size").css("display","block");
			$(".regular-dual-size").css("display","none");
		}
		else{
			$("#onehalf").show();
			$("#two").show();
			$("#quarter").show();	
			$("#three").show();
			$("#one").show();
			$("#half").show();
			$(".regular-color-size").css("display","block");
			$(".large-color-size").css("display","none");	
			$(".regular-figured-size").css("display","none");
			$(".regular-dual-size").css("display","none");
		}
		
		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
	});
	
	/*$(".clip-color-list a").click(function(){
		var ref = clipArt.attr('ref');
	});*/

	//select wristband size
	$('.js-size').click(function(){
		var item = $(this).find('input[type="radio"]').val();
		var style = $('.js-style .wrist_style:checked').val();

		if(style=="dual-layer" || style=="figured"){
			// Do nothing
		}else{
			if(item=="1/4" || item=="1/2"){
				$(".regular-color-size").css("display","block");
				$(".large-color-size").css("display","none");
			}else{
				$(".regular-color-size").css("display","none");
				$(".large-color-size").css("display","block");
			}
		}

		
		$('.js-size').find('input[type="radio"]').prop('checked', false);
		$('.js-size').removeClass('active');
		$(this).find('input[type="radio"]').prop('checked', true);
		$(this).addClass('active');

		$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').val('');
		$('.js-total').hide();
		$('.js-no-total').fadeIn(300);

		get_style_size('price_table');
	});

	// //adding quantity to wristband colors
	// $('.box-color').find('input[name$="-qty"]').keydown(function(e){
	// 	// Allow: backspace, delete, tab, escape, enter and .
	// 	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
	// 	    // Allow: Ctrl+A
	// 	    (e.keyCode == 65 && e.ctrlKey === true) ||
	// 	    // Allow: home, end, left, right
	// 	    (e.keyCode >= 35 && e.keyCode <= 39)) {
	// 	        // let it happen, don't do anything
	// 	        return;
	// 	}
	// 	// Ensure that it is a number and stop the keypress
	// 	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105 || e.keyCode == 190 || e.keyCode == 110)) {
	// 	    e.preventDefault();
	// 	}
	// 	else {
	// 		get_style_size('fixed_price');
	// 	}
	// });

	//adding quantity to wristband colors
	$('body').on('keydown', '.box-color input[name$="-qty"]', function(e) {
	// $('.box-color').find('input[name$="-qty"]').keydown(function(e) {
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
		} else {
			// get_style_size('fixed_price');
		}
	});

	// //adding quantity to wristband colors
	// $('body').on('blur', '.box-color input[name$="-qty"]', function(e) {
	// 	// console.log($(this).val());
	// 	get_style_size('fixed_price');
	// });

	// $('.box-color').find('input[name$="-qty"]').blur(function(){
	// 	var total = 0;
	// 	$('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').each(function(i, el){
	// 		var qty = $(this).val();

	// 		if(qty != '') {
	// 			total += parseInt(qty);
	// 		}
			
	// 	});

	// 	if(total == 0) {
	// 		$('.js-total').hide();
	// 		$('.js-no-total').fadeIn(300);
	// 	}
	// });

	

	$('body').on('blur', '.box-color input[name$="-qty"]', function(e) {
		var total = 0;
		var map = [];

		var style = $('.js-style .wrist_style:checked').val();
		var size = $('.js-size .wrist_size:checked').val();

		$('.js-color input[name$="-qty"]').each(function(){

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

				// if(typeof(map[idx]) == "undefined"){
				// 	map[idx]=[];
				// }

				if(qty>0){
					
					console.log(style,size,qty);
					sendToQuery(style,size,qty);
					// map[idx].push({'style':style, 'type':ref_type, 'size':name, 'qty':qty, 'color':ref_color_str});
					map.push({'style':style, 'type':ref_type, 'size':name, 'qty':qty, 'color':ref_color_str});
					
					// if still not defined
					if(typeof(has_preview[idx]) === "undefined"){
						has_preview[idx] = [];
					}

					if($.inArray(ref_color_str, has_preview[idx])<0){
						has_preview[idx].push(ref_color_str);
						// create
						var preview = $("#preview-pane-selection").find('.preview-pill.preview-'+ref_type+'-'+ref_color_str).length > 0;
						if(!preview) {
							generatePreviewImage(ref_type, ref_color_arr, ref_color_font);
						}
					}
				}else{
					has_preview[idx].pop(ref_color_str);
				}

				// map[$(this).attr("name")] += parseInt(qty);

				total += parseInt(qty);
			}
		});

		if(total >= 100){
			// get_style_size('fixed_price');
			$('.js-total').fadeIn(300);
			$('.js-no-total').hide();
			$('#dv-10-free-keychains').show();
		}else{
			$('#dv-10-free-keychains').hide();
			$('#freekc').val('');
		}

		if(total == 0){
			$('.js-total').hide();
			$('.js-no-total').fadeIn(300);	
		}else if(total >= 20){
			get_style_size('fixed_price');
			$('.js-total').fadeIn(300);
			$('.js-no-total').hide();
		}

	});

	$('body').on('blur', '#freekc', function(e){
		var qty = parseInt($(this).val());
		if(qty>10){
			$(this).val('').focus();
			alert('Must not be more than 10.');
		}
		return;
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

	//colorpicker
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
			$("#preview-pane").css("color", "#"+textcolor);
			$("#preview-textcolor").css("background-color", "#"+textcolor);
			$("#FontColorModal").modal('toggle');
		}
	});
	
	//font-style selection
	$('.font-style-list li').click(function(){
		var text = $(this).attr('name');
		var img = $(this).attr('ref');
		
		if(text != undefined);{
			$("#preview-pane").css("font-family", text);
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
		if($.trim($('#solid-color-0').val()) == ''){
			alert('You need to choose a color');
		}else{
			var color = [ $(this).closest('.box-opt-color').find('.solid-color-0').val() ];
			
			$(".PreviewColorModal").attr('src', generatePreviewBandImage('solid', color));
			$("#ColorModal").modal('hide');
		}
	});

	//solid dynamic done button click
	$('body').on('click', '.dynamic-done-b', function() {
		if($.trim($(this).closest('.box-opt-color').find('.dynamic-solid-color').val()) == ''){
			alert('You need to choose a color');
		}else{
			var imgID = ".Preview" + $(this).closest('.modal').attr("id");
			var color = [ $(this).closest('.box-opt-color').find('.solid-color-0').val() ];

			$(imgID).attr('src', generatePreviewBandImage('solid', color));
			$(this).closest('.modal').modal('hide');
		}
	});
	
	//segmented done button click
	$('body').on('click', '.done-s', function() {
		if($.trim($('#segmented-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.segmented-color-0').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-1').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-2').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-3').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-4').val(),
							$(this).closest('.box-opt-color').find('.segmented-color-5').val() ];
			color = color.filter(Boolean);
			$(".segPreviewColorModal").attr('src', generatePreviewBandImage('segmented', color));

			$("#ColorSegModal").modal('toggle');
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

			$(imgID).attr('src', generatePreviewBandImage('segmented', color));
			$(this).closest('.modal').modal('hide');
		}
	});
	
	//dual done button click
	$('body').on('click', '.done-d', function() {
		if($.trim($('#dual-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.dual-color-0').val(),
							$(this).closest('.box-opt-color').find('.dual-color-1').val() ];
			color = color.filter(Boolean);
			// $(".dualPreviewColorModal").attr('src', generatePreviewBandImage('dual', color));
			$(this).closest('.box-color').find(".dualPreviewColorModal").attr('src', generatePreviewBandImage('dual', color));

			$("#ColorDualModal").modal('toggle');
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

			$(imgID).attr('src', generatePreviewBandImage('dual', color));
			$(this).closest('.modal').modal('hide');
		}
	});
	
	//swirl done button click
	$('body').on('click', '.done-sw', function() {
		if($.trim($('#swirl-color-0').val()) == ''){
			alert('You need to choose colors');
		}else{
			var color = [ 	$(this).closest('.box-opt-color').find('.swirl-color-0').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-1').val(),
							$(this).closest('.box-opt-color').find('.swirl-color-2').val() ];
			color = color.filter(Boolean);
			$(".swlPreviewColorModal").attr('src', generatePreviewBandImage('swirls', color));

			$("#ColorSwirlModal").modal('hide');
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

			$(imgID).attr('src', generatePreviewBandImage('swirls', color));
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
	});
	
	$('.bclip-2').click(function(){
			$(".clip-color-list li a").addClass('bec');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('ces');
			$(".clip-color-list li a").removeClass('ccs');
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
	});
	
	$('.cclip-2').click(function(){
			$(".clip-color-list li a").addClass('ces');
			$(".clip-color-list li a").removeClass('fsc');
			$(".clip-color-list li a").removeClass('fec');
			$(".clip-color-list li a").removeClass('bsc');
			$(".clip-color-list li a").removeClass('bec');
			$(".clip-color-list li a").removeClass('ccs');
	});
	//continous message clipart button end here --------------
	
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
	}
	else {
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

		// if($style== 'debossed'){
		// 	$("#font-color").hide(); 
		// }
		// else if($style == 'embossed'){
		// 	$("#font-color").hide();
		// }
		// else if($style == 'dual-layer'){
		// 	$("#font-color").hide();
		// }
		// else if($style == 'blank'){
		// 	$("#font-color").hide();
		// }
		// else{
		// 	$("#font-color").show();
		// }
	}

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
									var count = 0;

									// $('#wrist_color_container').find('.js-color').find('input[name$="-qty"]').each(function(i, el){
									$('.js-color input[name$="-qty"]').each(function(){

										var qty = $(this).val();
										var ref_type = $(this).parents('.tab-pane').data('color').toLowerCase();
										var ref_type = $(this).parents('.tab-pane').data('color');
										var style = $('.js-style .wrist_style:checked').val();

										if(qty != ''){

											// if still not defined
											if(typeof(has_preview[style+"-"+ref_type]) === "undefined"){
												has_preview[style+"-"+ref_type] = [];
											}

											var praseQty = parseInt(qty);

											// $("#preview-pane-selection").html("");
											if(typeof $(this).attr('ref') === "undefined"){
												return false;
											}else{
												if(praseQty>0){
													// check if still has no preview
													if($.inArray($(this).attr('ref'), has_preview[style+"-"+ref_type])<0){
														has_preview[style+"-"+ref_type].push($(this).attr('ref'));

														$(".click-pre").css("display","block");
														var ref_colors = $(this).attr('ref').split(',');

														// count total
														total_qty += praseQty;

													}
												}else{
													// $('.preview-pill.preview-'+ref_type.toLowerCase()+'-'+$(this).attr('ref').replace(/,/g, '-')).remove();
													has_preview[style+"-"+ref_type].pop($(this).attr('ref'));
												}
											}
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

function sendToQuery(style,size,qty){
	$.ajax({  
    type: 'POST',  
    url: 'custom_template.php', 
    data: style,size,qty,
    success: function(response) {
        $('.summary-table').html(response);
    }
});
	
}

$('[input]').on('focus',function(){
	resetDrpMenu();
});

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

   /* function getSelectedColor(id) {
        var value='';
        console.log(id);
        // set value to be the current selected value
        value = jQuery(id+"option:selected").attr('ref');
        // change value whenever the box changes
        jQuery(id).change(function () {
            value = jQuery(id+"option:selected").attr('ref');
            console.log(value);
        });

        return value;
    }
*/

