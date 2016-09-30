<?php
	function curPageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}

	$url = curPageName();
	// Check page for proper button actions
	if($url == "order.php") {

		// For order.php
		echo("<button id='submitOrder' type='submit'>ADD TO CART</button>");

	} else if($url == "quote.php") {

		// For quote.php
		echo("<button id='submitEmail' type='submit' data-submit-type='quote'>SUBMIT QUOTE</button>");

	} else if($url == "school_po.php") {

		// For school_po.php
		echo("<button id='submitEmail' type='submit' data-submit-type='schoolpo'>SUBMIT PURCHASE ORDER</button>");

	} else if($url == "digital_design.php") {

		// For digital_design.php
		echo("<button id='submitEmail' type='submit' data-submit-type='ddesign'>SUBMIT DESIGN</button>");

	}

?>

