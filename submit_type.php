<?php

// Check page for proper button actions
if(substr($_SERVER['REQUEST_URI'], 1, 9) == "order.php") {

	// For order.php
	echo("<button id='submitOrder' type='submit'>ADD TO CART</button>");

} else if(substr($_SERVER['REQUEST_URI'], 1, 9) == "quote.php") {

	// For quote.php
	echo("<button id='submitQuote' type='submit'>SUBMIT QUOTE</button>");

} else if(substr($_SERVER['REQUEST_URI'], 1, 13) == "school_po.php") {

	// For school_po.php
	echo("<button id='submitSchoolPO' type='submit'>SUBMIT PURCHASE ORDER</button>");

} else if(substr($_SERVER['REQUEST_URI'], 1, 18) == "digital_design.php") {

	// For school_po.php
	echo("<button id='submitDDesign' type='submit'>SUBMIT DESIGN</button>");

}

?>

