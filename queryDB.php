<?php 

	//get wristband price by style and size
	function getWristbandPrice($style,$size)
	{
		$sql = "SELECT size_id, qty, price FROM price where style_id ='".$style."' AND size_id = '".$size."'";
		
		return $sql;
	}

	function getPriceJSON()
	{
		$sql = "SELECT p.id, wst.code AS `style_code`, wst.name AS `style_name`, wsz.code AS `size_code`, wsz.name AS `size_name`, p.qty, p.price FROM `price` AS `p` JOIN `wristband_style` AS `wst` ON p.style_id = wst.id JOIN `wristband_size` AS `wsz` ON p.size_id = wsz.id ORDER BY p.style_id ASC";
		
		return $sql;
	}

?>