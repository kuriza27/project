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
	
	if(isset($_FILES['file_array'])){
    $name_array = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array = $_FILES['file_array']['type'];
    $size_array = $_FILES['file_array']['size'];
    $error_array = $_FILES['file_array']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
		// Check file size
	
		if ( $size_array[$i] > 500000) {
			echo "Sorry, your file is too large. ".$name_array[$i];
			exit;
		}
        else if(move_uploaded_file($tmp_name_array[$i], "uploads/".$name_array[$i])){
            echo $name_array[$i]." upload is complete<br>";
		} else {
            echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
        }
		}
	}

?>