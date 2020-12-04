<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
                 $gender = $_POST['gender'];
                 $email = $_POST['email'];
                 $contactnumber = $_POST['contactnumber'];
                 $whatsappnumber = $_POST['whatsappnumber'];
                 $referencename = $_POST['referencename'];
	$qualification= $_POST['qualification'];
                 $interest = $_POST['interest'];
	// Database connection
	$conn = new mysqli('localhost','root','','information');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, contactnumber, whatsappnumber,referencename,qualification,interest) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiisss", $firstName, $lastName, $gender, $email, $contactnumber, $whatsappnumber,$referencename,$qualification,$interest);
		$execval = $stmt->execute();
		echo $execval;
		echo "<b><center>THANK YOU...Your Response has been Recorded </center></b>";
		$stmt->close();
		$conn->close();
	}
?>
