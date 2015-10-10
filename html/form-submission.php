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

	$servername = "localhost";
	$username = "web";
	$password = "web";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>