<?php

	require_once("assets/class/PHPMailer-master/PHPMailerAutoload.php"); // Library added in download source.

	$mailer_username = "dummy.alibi000@gmail.com";
	$mailer_password = "alibi000";

	$subj = "Wristband Order";
	$body  = "";

	$name = "Wristband Support";
	$mail_from = "dummy.alibi000@gmail.com";

	$mail_to = "dummy.alibi000@gmail.com";

	// Update subject title depeneding on submit type
	if($_REQUEST['type'] == "quote") {
		$subj .= " - Free Quote";
	} else if($_REQUEST['type'] == "schoolpo") {
		$subj .= " - School Purchase Order";
	} else if($_REQUEST['type'] == "ddesign") {
		$subj .= " - Digital Design";
	}

	$body .= "ORDER SUMMARY (" . date("m-d-Y h:i:s") . ")";
	$body .= "<hr/><br/>";

	// Email body
	if(isset($_REQUEST['data'])) {

		$data = json_decode($_REQUEST['data'], true);

		foreach($data as $key => $value) {

			$body .= strtoupper(str_replace("_", " ", $key)) . " : ";

			if($key == "add_ons") {

				foreach($value as $inkey => $invalue) {

					$body .= "<br/><span style='padding-left:10px;'>- " . ucwords(str_replace("_", " ", $inkey)) . " : </span>";

					foreach($invalue as $aokey => $aovalue) {

						if($aokey == "code") { continue; }
						if($aokey == "all") { continue; }
						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $aokey)) . " : " . strtoupper($aovalue) . "</span>";
					}
				}
			} else if($key == "free") {

				foreach($value as $inkey => $invalue) {

					$body .= "<br/><span style='padding-left:10px;'>- " . ucwords(str_replace("_", " ", $inkey)) . " : </span>";

					foreach($invalue as $frkey => $frvalue) {

						if($frkey == "code") { continue; }

						if(is_array($frvalue)) {

							$body .= "<br/>";
							$body .= "<span style='padding-left:20px;'>- List : </span>";

							foreach($frvalue as $datakey => $datavalue) {

								$body .= "<br/>";
								$body .= "<span style='padding-left:30px;'>- " . ucwords(str_replace("_", " ", $datavalue["name"])) . " : </span>";

								if(isset($datavalue["qty"])) {

									$body .= "<br/>";
									$body .= "<span style='padding-left:40px;'>- Quantity : " . strtoupper($datavalue["qty"]) . "</span>";	
								}

								if(isset($datavalue["size"])) {

									$body .= "<br/>";
									$body .= "<span style='padding-left:40px;'>- Size : " . strtoupper($datavalue["size"]) . "</span>";	
								}

								if(isset($datavalue["style"])) {

									$body .= "<br/>";
									$body .= "<span style='padding-left:40px;'>- Style : " . strtoupper($datavalue["style"]) . "</span>";	
								}

								if(isset($datavalue["font"])) {

									$body .= "<br/>";
									$body .= "<span style='padding-left:40px;'>- Font Color : #" . strtoupper($datavalue["font"]) . "</span>";	
								}

								if(isset($datavalue["color"])) {

									$body .= "<br/>";
									$body .= "<span style='padding-left:40px;'>- Color : </span>";

									foreach($datavalue["color"] as $colorvalue) {

										$body .= "<br/>";
										$body .= "<span style='padding-left:50px;'>- #" . strtoupper($colorvalue) . "</span>";	
									}
								}
							}
						} else {

							$body .= "<br/>";
							$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $frkey)) . " : " . strtoupper($frvalue) . "</span>";
						}
					}
				}
			} else if($key == "items") {

				foreach($value as $itmkey => $itmvalue) {

					foreach($itmvalue['data'] as $datakey => $datavalue) {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $datavalue["name"])) . " : </span>";

						$body .= "<br/>";
						$body .= "<span style='padding-left:30px;'>- Style : " . strtoupper($itmkey) . "</span>";

						if(isset($datavalue["qty"])) {

							$body .= "<br/>";
							$body .= "<span style='padding-left:30px;'>- Quantity : " . strtoupper($datavalue["qty"]) . "</span>";
						}

						if(isset($datavalue["size"])) {

							$body .= "<br/>";
							$body .= "<span style='padding-left:30px;'>- Size : " . strtoupper($datavalue["size"]) . "</span>";	
						}

						if(isset($datavalue["font"])) {

							$body .= "<br/>";
							$body .= "<span style='padding-left:30px;'>- Font Color : #" . strtoupper($datavalue["font"]) . "</span>";	
						}

						if(isset($datavalue["color"])) {

							$body .= "<br/>";
							$body .= "<span style='padding-left:30px;'>- Color : </span>";

							foreach($datavalue["color"] as $colorvalue) {

								$body .= "<br/>";
								$body .= "<span style='padding-left:50px;'>- #" . strtoupper($colorvalue) . "</span>";	
							}
						}
					}
				}

			} else if($key == "icon") {

				foreach($value as $icnkey => $icnvalue) {

					if(isset($_FILES['file-1']) && $icnkey == "front_start") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-2']) && $icnkey == "front_end") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-3']) && $icnkey == "back_start") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-4']) && $icnkey == "back_end") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-5']) && $icnkey == "continues_start") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-6']) && $icnkey == "continues_end") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : " . $icnvalue . "</span>";
					}
				}
			}  else if($key == "text") {

				foreach($value as $txtkey => $txtvalue) {

					if($txtkey == "type") {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $txtkey)) . " : " . strtoupper($txtvalue) . "</span>";
					} else {

						$body .= "<br/>";
						$body .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $txtkey)) . " : " . $txtvalue . "</span>";
					}
				}
			} else {

				$body .= strtoupper($value);
			}

			$body .= "<br/>";
		}
	}

	// Trigger
	$result = smtpmailer($mail_to, $mail_from, $name ,$subj, $body);
	echo $result;
	die;

	/**
	 * Send an email using PHPMailer library
	 * url: https://github.com/PHPMailer/PHPMailer
	 *
	 * return json string
	 */
	function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail=true)
	{
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;									// Enable verbose debug output

		$mail->isSMTP();										// Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';							// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;									// Enable SMTP authentication
		$mail->Username = $GLOBALS["mailer_username"];			// SMTP username
		$mail->Password = $GLOBALS["mailer_password"];			// SMTP password
		$mail->SMTPSecure = 'tls';								// Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;										// TCP port to connect to

		$mail->setFrom($from, $from_name);						// Add a from information
		$mail->addAddress($to);									// Add a recipient

		// Add attachments
		if(isset($_FILES['file-1'])) {
			$mail->addAttachment($_FILES['file-1']['tmp_name'], 'Front Start.png'); 
		}
		if(isset($_FILES['file-2'])) {
			$mail->addAttachment($_FILES['file-2']['tmp_name'], 'Front End.png'); 
		}
		if(isset($_FILES['file-3'])) {
			$mail->addAttachment($_FILES['file-3']['tmp_name'], 'Back Start.png'); 
		}
		if(isset($_FILES['file-4'])) {
			$mail->addAttachment($_FILES['file-4']['tmp_name'], 'Back End.png'); 
		}
		if(isset($_FILES['file-5'])) {
			$mail->addAttachment($_FILES['file-5']['tmp_name'], 'Continuous Start.png'); 
		}
		if(isset($_FILES['file-6'])) {
			$mail->addAttachment($_FILES['file-6']['tmp_name'], 'Continuous End.png'); 
		}

		$mail->isHTML(true);									// Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $body;
		// $mail->AltBody = "";

		if(!$mail->send()) {
			return json_encode(array("status"=>false, "message"=>"Mailer error: ".$mail->ErrorInfo));
		}

		return json_encode(array("status"=>true, "message"=>"Order Successfully Submitted."));
	}

?>