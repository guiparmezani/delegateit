<div class="first-section section">
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
			  echo "<p style='text-align: center;'>Thank you for registering for our service. We will get back to you shortly.<br>The Delegateit Team.</p>";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		?>

	</div>
</div>