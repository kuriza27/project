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
			// // $wb_style[$row['style_code']][$row['size_code']][$row['qty']] = $row['price'];
			// $style_array[$count_style]
			// if (isset($style_array[$count_style])) {
			// 	$style_array[$count_style][$row['style_code']] = [];
			// }

			// if(!in_array($row['style_code'], $style)) {
			// 	$style[] = $row['style_code'];
			// 	$count_style++;
			// }

			$style[$row['style_code']][$row['size_code']][$row['qty']] = $row['price'];
		}

		$data = $style;

	} else {}

	// array_multisort($wb_style['printed']['1-1/2-in']);

	// $data['wb_style'] = $wb_style;

	echo json_encode($data);
?>