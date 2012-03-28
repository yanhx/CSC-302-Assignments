<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css" />
<title>Order Processed</title>
</head>
<body>
	<?php
	$username = $_REQUEST["username"];
	$apples = $_REQUEST["apples"];
	$bananas = $_REQUEST["bananas"];
	$oranges = $_REQUEST["oranges"];
	$payment = $_REQUEST["payment"];
	$errorMsg = array();
	try {
		// Code block for checking for invalid input values
		if (is_null($username)) {
			array_push($errorMsg, "Invalid user name.");
		}
		if (is_null($apples) || is_nan($$apples) || $apples < 0) {
			array_push($errorMsg, "Invalid number of apples.");
		}
		if (is_null($bananas) || is_nan($bananas) || $bananas < 0) {
			array_push($errorMsg, "Invalid number of bananas.");
		}
		if (is_null($oranges) || is_nan($oranges) || $oranges < 0) {
			array_push($errorMsg, "Invalid number of oranges.");
		}
		if (is_null($payment)) {
			array_push($errorMsg, "Invalid payment mode.");
		}
		if (sizeOf($errorMsg) > 0) {
			throw new UnexpectedValueException($errorMsg);
		}

		echo '<div class="receipt">
		<div class="header">
		<label class="summary">Your order has been received.</label>
		</div>
		<div class="header">
		<label>Username: </label> <label class="data">';
		echo $username;
		echo '</label>
		</div>
		<div class="header">
		<label>Number of apples: </label> <label class="data">';
		echo $apples;
		echo '</label>
		</div>
		<div class="header">
		<label>Number of bananas: </label> <label class="data">';
		echo $bananas;
		echo '</label>
		</div>
		<div class="header">
		<label>Number of oranges: </label> <label class="data">';
		echo $oranges;
		echo '</label>
		</div>
		<div class="header">
		<label>Total Cost: $</label>
		</div>
		</div>';
	}
	catch(UnexpectedValueException $e) {

	}
	?>
</body>
</html>