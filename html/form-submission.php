<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title>DelegateIt</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/site.min.css">
</head>
<body>
	<div class="section thank-you">
		<div class="container">

			<?php 
			$first_name = $_POST["first_name"];
			$last_name = $_POST["last_name"];
			$phone = $_POST["phone"];
			$zip = $_POST["zip"];

			$servername = "localhost";
			$username = "parmezan_root";
			$password = "Delegateit";

			$conn = new mysqli($servername, $username, $password);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			// Writes inputs to database
			$sql = "INSERT INTO parmezan_delegateit.CLIENT (FIRST_NAME, LAST_NAME, PHONE, ZIP) VALUES ('" . $first_name . "', '" . $last_name . "', '" . $phone . "', '" . $zip . "');";

			if ($conn->query($sql) === TRUE) {
				echo "<p style='text-align: center;'>Thank you for registering for our service. We will get back to you shortly.<br>The <a href='http://delegateit.co'>Delegateit</a> Team.<br><br><a href='http://delegateit.co'>< Back to home</a></p>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			?>

		</div>
	</div>
	<script src="js/site.min.js"></script>
</body>
</html>