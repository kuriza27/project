<?php 
	include_once 'dbconfig.php';
	//include_once 'dbconfigSite.php';

	if(isset($_POST['action'])) {

		if($_POST['action'] == 'get_prices') {

			$data = $arr_prod = $arr_ship = [];

			// PRODUCTION
			$price_production = getProductionPrice($_POST['style'], $_POST['size'], $_POST['qty']);
			$price_production = $conn->query($price_production);

			if ($price_production->num_rows > 0) {
				while($row = $price_production->fetch_assoc()) {
					$arr_prod[] = $row;
				}

			} else {}
			$data['production'] = $arr_prod;

			// SHIPING			
			$price_shipping = getShippingPrice($_POST['style'], $_POST['size'], $_POST['qty']);
			$price_shipping = $conn->query($price_shipping);

			if ($price_shipping->num_rows > 0) {
				while($row = $price_shipping->fetch_assoc()) {
					$arr_ship[] = $row;
				}

			} else {}
			$data['shipping'] = $arr_ship;

			echo json_encode($data);
			die;
		}

		if($_POST['action'] == 'get_addons') {

			$data = [];
			$total = 0;
			$where = (isset($_POST['where'])) ? $_POST['where'] : [];

			// PRODUCTION
			$addon = getAddOnsPrice($where, $_POST['size'], $_POST['qty']);

			$addon = $conn->query($addon);

			if ($addon) {
				if ($addon->num_rows > 0) {
					while($row = $addon->fetch_assoc()) {
						$total += ($_POST['qty']*$row['price']);
					}

				} else {}
			}

			echo json_encode($total);
			die;
		}

	}

	//get wristband price by style and size
	function getWristbandPrice($style,$size)
	{
		$sql = "SELECT size_id, qty, price 
					FROM price where style_id ='".$style."' AND size_id = '".$size."'";
		
		return $sql;
	}

	function getPriceJSON()
	{
		$sql = "SELECT p.id, wst.code AS `style_code`, wst.name AS `style_name`, wsz.code AS `size_code`, wsz.name AS `size_name`, p.qty, p.price 
					FROM `price` AS `p` 
				JOIN `wristband_style` AS `wst` ON p.style_id = wst.id 
				JOIN `wristband_size` AS `wsz` ON p.size_id = wsz.id 
				ORDER BY p.style_id ASC";
				
		return $sql;
	}

	//get production price by style, qty and size
	function getProductionPrice($style,$size,$qty)
	{
			$sql = "SELECT pd.qty, pd.price, pd.days 
						FROM price_production AS pd 
					JOIN wristband_style AS wst ON wst.id = pd.style_id 
					JOIN wristband_size AS wsz ON wsz.id = pd.size_id 
					WHERE wst.code ='".$style."' AND wsz.code = '".$size."' AND qty >= '20' AND qty < '50' ORDER BY pd.days ASC";
	
			return $sql;	

	}
	
	
	//get shipping price by style, qty and size
	function getShippingPrice($style,$size,$qty)
	{

			$sql = "SELECT ps.qty, ps.price, ps.days 
						FROM price_shipping AS ps JOIN wristband_style AS wst ON wst.id = ps.style_id
					JOIN wristband_size AS wsz ON wsz.id = ps.size_id 
					WHERE wst.code ='".$style."' AND wsz.code = '".$size."' AND qty >= '20' AND qty < '50' ORDER BY ps.days ASC";
					
			return $sql;

	}

	function getAddOnsPrice($addons,$size,$qty)
	{
		$strWhere = "";
		foreach ($addons as $key => $value) {
			if($strWhere==="") {
				$strWhere .= "'".$value."'";
			} else {
				$strWhere .= ",'".$value."'";
			}
		}

		return $sql = "SELECT * 
							FROM add_ons AS ao 
					  JOIN price_add_ons AS pao ON ao.id = pao.add_on_id 
					  WHERE ao.code IN (".$strWhere.") AND qty >= '20' AND qty < '50'";
	}

?>