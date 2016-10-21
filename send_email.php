<?php

	require_once("assets/class/PHPMailer-master/PHPMailerAutoload.php"); // Library added in download source.
	require_once("mail_template.php");

	$mailer_username = "sales@promotionalwristband.com";
	$mailer_password = "4gKP=&FH";

	$subj = "Wristband Order";
	$body = "";
	$body_ = "";
	$body_total = "";
	$data = array();

	$name = "Wristband Support";
	$mail_from = "sales@promotionalwristband.com";
	$mail_to = "sales@promotionalwristband.com";

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

 	if(isset($_REQUEST['name'])) {
		$body .= "CUSTOMER NAME : " . $_REQUEST['name'] . "<br/>";
	}

 	if(isset($_REQUEST['mail'])) {
		$body .= "CUSTOMER EMAIL ADDRESS : " . $_REQUEST['mail'] . "<br/>";
	}

	// Email body
	if(isset($_REQUEST['data'])) {

		$data = json_decode($_REQUEST['data'], true);
		$first = true;

		foreach($data as $key => $value) {

			if($first) {
				$first = false;
			} else {
				$body_ .= "<br/>";
			}

			if($key != "total_price") {

				$body_ .= ucwords(strtolower(str_replace("_", " ", $key))) . " : ";
			} else {

				$body_total .= ucwords(strtolower(str_replace("_", " ", $key))) . " : ";
			}

			if($key == "add_ons") {

				foreach($value as $inkey => $invalue) {

					$body_ .= "<br/><span style='padding-left:10px;'>- " . ucwords(str_replace("_", " ", $inkey)) . " : </span>";

					foreach($invalue as $aokey => $aovalue) {

						if($aokey == "code") { continue; }
						if($aokey == "all") { continue; }
						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $aokey)) . " : " . strtoupper($aovalue) . "</span>";
					}
				}
			} else if($key == "free") {

				foreach($value as $inkey => $invalue) {

					$body_ .= "<br/><span style='padding-left:10px;'>- " . ucwords(str_replace("_", " ", $inkey)) . " : </span>";

					foreach($invalue as $frkey => $frvalue) {

						if($frkey == "code") { continue; }

						if(is_array($frvalue)) {

							$body_ .= "<br/>";
							$body_ .= "<span style='padding-left:20px;'>- List : </span>";

							foreach($frvalue as $datakey => $datavalue) {

								$body_ .= "<br/>";
								$body_ .= "<span style='padding-left:30px;'>- " . ucwords(str_replace("_", " ", $datavalue["name"])) . " : </span>";

								if(isset($datavalue["qty"])) {

									$body_ .= "<br/>";
									$body_ .= "<span style='padding-left:40px;'>- Quantity : " . strtoupper($datavalue["qty"]) . "</span>";
								}

								if(isset($datavalue["size"])) {

									$body_ .= "<br/>";
									$body_ .= "<span style='padding-left:40px;'>- Size : " . strtoupper($datavalue["size"]) . "</span>";
								}

								if(isset($datavalue["style"])) {

									$body_ .= "<br/>";
									$body_ .= "<span style='padding-left:40px;'>- Style : " . strtoupper($datavalue["style"]) . "</span>";
								}

								if(isset($datavalue["font"])) {

									$body_ .= "<br/>";
									$body_ .= "<span style='padding-left:40px;'>- Font Color : #" . strtoupper($datavalue["font"]) . "</span>";
								}

								if(isset($datavalue["color"])) {

									$body_ .= "<br/>";
									$body_ .= "<span style='padding-left:40px;'>- Color : </span>";

									foreach($datavalue["color"] as $colorvalue) {

										$body_ .= "<br/>";
										$body_ .= "<span style='padding-left:50px;'>- #" . strtoupper($colorvalue) . "</span>";
									}
								}
							}
						} else {

							$body_ .= "<br/>";
							$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $frkey)) . " : " . strtoupper($frvalue) . "</span>";
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

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-2']) && $icnkey == "front_end") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-3']) && $icnkey == "back_start") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-4']) && $icnkey == "back_end") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-5']) && $icnkey == "continues_start") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else if(isset($_FILES['file-6']) && $icnkey == "continues_end") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : Please see attachments</span>";
					} else {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $icnkey)) . " : " . $icnvalue . "</span>";
					}
				}
			}  else if($key == "text") {

				foreach($value as $txtkey => $txtvalue) {

					if($txtkey == "type") {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $txtkey)) . " : " . strtoupper($txtvalue) . "</span>";
					} else {

						$body_ .= "<br/>";
						$body_ .= "<span style='padding-left:20px;'>- " . ucwords(str_replace("_", " ", $txtkey)) . " : " . ((!empty($txtvalue)) ? strtoupper($txtvalue) : "NONE") . "</span>";
					}
				}
			}  else if($key == "total_price") {

					$body_total .= strtoupper($value);
			} else {

				$body_ .= strtoupper($value);
			}
		}
	}

	// Trigger
	$result = smtpmailer($mail_to, $mail_from, $name ,$subj, mail_template("quote", $_REQUEST['name'], $body_.$body_total, $data['total_price']), true, true);
	smtpmailer(trim($_REQUEST['mail']), $mail_from, $name ,$subj, mail_template("quote", $_REQUEST['name'], $body_.$body_total, $data['total_price']), true, true);
	echo $result;
	die;

	/**
	 * Send an email using PHPMailer library
	 * url: https://github.com/PHPMailer/PHPMailer
	 *
	 * return json string
	 */
	function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail=true, $with_attachment=false)
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

		if($with_attachment) {

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
