<?php

	include_once 'belt/solid.php';
	include_once 'belt/segmented.php';
	include_once 'belt/swirl.php';
	include_once 'belt/fig-solid.php';
	include_once 'belt/fig-segmented.php';
	include_once 'belt/fig-swirl.php';

	// Only allowed styles
	$list_style = array( 'solid', 'segmented', 'swirl' );

	if( !isset( $_REQUEST['style'] ) ) {
		die('Error: Library not defined!');
	} else if ( !isset( $_REQUEST['color'] ) ) {
		die('Error: Library not defined!');
	}

	$style = trim($_REQUEST['style']);
	$color = explode( ',', trim($_REQUEST['color']));
	$type = isset($_REQUEST['type']) ? trim($_REQUEST['type']) : "";

	// Check if style selected is valid
	if ( !in_array( $style, $list_style ) ) {
		die('Error: Library not defined!');
	}

	// Check all colors
	foreach ( $color as $clr ) {
		// Check if hex color is valid
		if ( !ctype_xdigit( $clr ) ) {
			die('Error: Library not defined!');
		}
	}

	if ($type !== "figured") {

		// Check selected colors
		if ( $style == 'solid' ) {

			// Check maximum & minimum color count
			if ( count( $color ) == 1 ) {
				generate_solid($color);
			}

		} else if ( $style == 'segmented' ) {

			// Check maximum & minimum color count
			if ( count( $color ) <= 6 && count( $color ) >= 1 ) {
				generate_segmented($color);
			}

		} else if ( $style == 'swirl' ) {

			// Check maximum & minimum color count
			if ( count( $color ) <= 4 && count( $color ) >= 1 ) {
				generate_swirl($color);
			}

		}

	} else {


		// Check selected colors
		if ( $style == 'solid' ) {

			// Check maximum & minimum color count
			if ( count( $color ) == 1 ) {
				generate_fig_solid($color);
			}

		} else if ( $style == 'segmented' ) {

			// Check maximum & minimum color count
			if ( count( $color ) <= 6 && count( $color ) >= 1 ) {
				generate_fig_segmented($color);
			}

		} else if ( $style == 'swirl' ) {

			// Check maximum & minimum color count
			if ( count( $color ) <= 4 && count( $color ) >= 1 ) {
				generate_fig_swirl($color);
			}

		}

	}

	die('Error: Library not defined!');

?>