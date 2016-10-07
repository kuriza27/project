<?php

	function mail_template($type, $name, $data)
	{
		// Initialize body
		$copy = "";
		// Body depends on submit type
		if($type == "quote") {
			// Set body
			$copy = '<style>body{font-family:Arial;}div.row,section{margin-bottom: 10px;}</style>
									<div class="container">
											<div class="row">
													Hello <span style="font-style:italic;">' . ucwords(strtolower(trim($name))) . '</span> ,
											</div>
													<br/>
											<div class="row">
													We received your request to get a price quote for silicone wristbands.
															<br/>
															<br/>
													Below is the exact price computation for this order based on the details we captured online.
											</div>
													<br/>
											<section>
													<strong>ORDER DETAILS :</strong>
															<br/>
															<br/>
													<div style="margin-left:20px;">' . $data . '</div>
															<br/>
													<span style="font-style:italic;">
															with total price
													</span>
											</section>
													<br/>
													<br/>
											<div class="row">
													For inquiries and digital proof request, kindly call our toll-free number 1-800-989-0440 to talk to our sales specialists.
															<br/>
															<br/>
													Looking forward to doing business with you.
															<br/>
															<br/>
													Thank you.
											</div>
													<br/>
											<div class="row">
													<strong style="font-size:16px;text-decoration:underline;">Sales Department</strong>
															<br/>
													Promotional Wristband
															<br/>
													Toll Free: <span style="font-style:italic;">1-800-989-0440</span> | Fax: <span style="font-style:italic;">(908) 344-5362</span>
															<br/>
													<span style="font-style:italic;">sales@promotionalwristband.com</span> | <span style="font-style:italic;">www.promotionalwristband.com</span>
											</div>
									</div>';
		} else if($type == "schoolpo") {
			// Set body
			$copy = '<style>body{font-family:Arial;}div.row,section{margin-bottom: 10px;}</style>
									<div class="container">
											<div class="row">
													Hello <span style="font-style:italic;">' . ucwords(strtolower(trim($name))) . '</span> ,
											</div>
													<br/>
											<div class="row">
													We already received your PO Request. It is now being verified and under approval.
															<br/>
															<br/>
													Below is the exact price computation for this order based on the details we captured online.
											</div>
													<br/>
											<section>
													<strong>ORDER DETAILS :</strong>
															<br/>
															<br/>
													<div style="margin-left:20px;">' . $data . '</div>
															<br/>
													<span style="font-style:italic;">
															with total price
													</span>
											</section>
													<br/>
													<br/>
											<div class="row">
													Please Reply to this email with your shipping and billing address. Also please attach a signed W9 form of your School or Company. You can also fax the W9 form to (908) 344-5362.
															<br/>
															<br/>
													For inquiries and digital proof request, kindly call our toll-free number 1-800-989-0440 to talk to our sales specialists.
															<br/>
															<br/>
													Looking forward to doing business with you.
															<br/>
															<br/>
													Thank you.
											</div>
													<br/>
											<div class="row">
													<strong style="font-size:16px;text-decoration:underline;">Sales Department</strong>
															<br/>
													Promotional Wristband
															<br/>
													Toll Free: <span style="font-style:italic;">1-800-989-0440</span> | Fax: <span style="font-style:italic;">(908) 344-5362</span>
															<br/>
													<span style="font-style:italic;">sales@promotionalwristband.com</span> | <span style="font-style:italic;">www.promotionalwristband.com</span>
											</div>
									</div>';
		} else if($type == "ddesign") {
			// Set body
			$copy = '<style>body{font-family:Arial;}div.row,section{margin-bottom: 10px;}</style>
									<div class="container">
											<div class="row">
													Hello <span style="font-style:italic;">' . ucwords(strtolower(trim($name))) . '</span> ,
											</div>
													<br/>
											<div class="row">
													We received your request to get a Digital Design for your silicone wristbands.
															<br/>
															<br/>
													You will received another email to email with the design of the details we capture online.
															<br/>
															<br/>
													Order Quotation:
															<br/>
													Below is the exact price computation for this order based on the details we captured online.
											</div>
													<br/>
											<section>
													<strong>ORDER DETAILS :</strong>
															<br/>
															<br/>
													<div style="margin-left:20px;">' . $data . '</div>
															<br/>
													<span style="font-style:italic;">
															with total price
													</span>
											</section>
													<br/>
													<br/>
											<div class="row">
													For inquiries and digital proof request, kindly call our toll-free number 1-800-989-0440 to talk to our sales specialists.
															<br/>
															<br/>
													Looking forward to doing business with you.
															<br/>
															<br/>
													Thank you.
											</div>
													<br/>
											<div class="row">
													<strong style="font-size:16px;text-decoration:underline;">Sales Department</strong>
															<br/>
													Promotional Wristband
															<br/>
													Toll Free: <span style="font-style:italic;">1-800-989-0440</span> | Fax: <span style="font-style:italic;">(908) 344-5362</span>
															<br/>
													<span style="font-style:italic;">sales@promotionalwristband.com</span> | <span style="font-style:italic;">www.promotionalwristband.com</span>
											</div>
									</div>';
		}

		// Return body
		return $copy;
	}

?>
