<?php include_once 'dbconfig.php'; ?>
<?php include_once 'queryDB.php'; ?>

<?php
	$sql = getPriceJSON();
	// print_r($sql); die;
	$result = $conn->query($sql);

	$count_style = 0;
	$data = $style = $style_array = [];

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$style[$row['style_code']][$row['size_code']][$row['qty']] = $row['price'];
		}

		$data = $style;

	} else {}

	// array_multisort($wb_style['printed']['1-1/2-in']);

	// $data['wb_style'] = $wb_style;

	echo json_encode($data);
?>