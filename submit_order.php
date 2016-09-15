<?php include_once 'queryDB.php'; ?>

<?php
	$data = json_decode($_POST['data'], true);
	// print_r($_FILES);
	// print_r($data);
	foreach ($data['add_ons'] as $value) {
		// print_r($value);
		$queryString = getAddOnsPrice($value, $data['total_qty']);
		$queryResult = $conn->query($queryString);

		if ($queryResult->num_rows > 0) {
			while($row = $queryResult->fetch_assoc()) {
				print_r($row);
			}
		}
	}

?>