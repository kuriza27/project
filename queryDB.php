<?php 
	
	//get wristband price by style and size
	function getWristbandPrice($style,$size)
	{
        $sql = "SELECT size_id, qty, price 
					FROM price 
				WHERE style_id ='".$style."' AND size_id = '".$size."'";
			  
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