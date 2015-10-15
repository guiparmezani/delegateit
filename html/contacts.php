<?php 
	$servername = "waitlistdb.cwfe0qmzkgyc.us-west-2.rds.amazonaws.com";
	$username = "master";
	$password = "DelegateIt";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT IP, FIRST_NAME, LAST_NAME, PHONE, ZIP FROM DELEGATEIT.CLIENT";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["ID"] . "\n- First Name: " . $row["FIRST_NAME"]. "\nLast Name: " . $row["LAST_NAME"]. "\nPhone: ". $row["PHONE"]. "\nZip: ". $row["ZIP"] . "\n\n";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
?>