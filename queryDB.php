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

	//get production price by style, qty and size
	function getProductionPrice($style,$size,$qty)
	{
		echo "Style: ".$style;
		echo "Size: ".$size;
		echo "Qty: ".$qty;
		if($qty>=20 && $qty<50){
			$limit=50;
			$sql = "SELECT  qty, price , days
					FROM price_production
				WHERE style_id ='".$style."' AND size_id = '".$size."' AND qty <= '".$qty."' AND qty > '".$limit."'";
		}
		else if($qty>=50 && $qty<100){
				$limit=100;
				$sql = "SELECT  qty, price , days
					FROM price_production
				WHERE style_id ='".$style."' AND size_id = '".$size."' AND qty <= '".$qty."' AND qty > '".$limit."'";
			}
		
	    return $sql;

	}
	
	
	//get shipping price by style, qty and size
	function getShippingPrice($style,$size,$qty,$limit)
	{
        $sql = "SELECT  qty, price , days
					FROM price_production
				WHERE style_id ='".$style."' AND size_id = '".$size."' AND qty <= '".$qty."' AND qty > '".$limit."'";
			  
	    return $sql;

	}

?>