<?php 
	$servername = "waitlistdb.cwfe0qmzkgyc.us-west-2.rds.amazonaws.com";
	$username = "master";
	$password = "DelegateIt";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT ID, FIRST_NAME, LAST_NAME, PHONE, ZIP FROM DELEGATEIT.CLIENT";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "ID: " . $row["ID"] . "<br>First Name: " . $row["FIRST_NAME"]. "<br>Last Name: " . $row["LAST_NAME"]. "<br>Phone: ". $row["PHONE"]. "<br>Zip: ". $row["ZIP"] . "<br><br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>