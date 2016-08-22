<?php 


	//get wristband price by style and size
	function getWristbandPrice($style,$size)
	{
        $sql = "SELECT size_id, qty, price FROM price where style_id ='".$style."' AND size_id = '".$size."'";
			  
	    return $sql;

	}

	

?>