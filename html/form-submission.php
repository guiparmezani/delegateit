<?php 
  $myfile = fopen("contacts.txt", "a+") or die("Unable to open file!");
  fwrite($myfile, "First Name: " . $_POST["first_name"] . "\n");
  fwrite($myfile, "Last Name: " . $_POST["last_name"] . "\n");
  fwrite($myfile, "Phone: " . $_POST["phone"] . "\n");
  fwrite($myfile, "Zip: " . $_POST["zip"] . "\n\n");
  fclose($myfile);

  echo "name: " . $_POST["first_name"] . "<br>last name: " . $_POST["last_name"] . "<br>";
  echo "phone: " . $_POST["phone"]. "<br>";
  echo "zip: " . $_POST["zip"]. "<br>";

  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $phone = $_POST["phone"];
  $zip = $_POST["zip"];

	$servername = "localhost";
	$username = "parmezan_root";
	$password = "Delegateit";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO parmezan_delegateit.CLIENT (FIRST_NAME, LAST_NAME, PHONE, ZIP) VALUES ('" . $first_name . "', '" . $last_name . "', '" . $phone . "', '" . $zip . "');";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>