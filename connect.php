<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$batch = $_POST['batch'];
	$paymentfee = $_POST['paymentfee'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, age, batch, paymentfee) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $firstName, $lastName, $gender, $age, $batch, $paymentfee);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration Done";
		echo " Your Payment is Completed... ";
		$stmt->close();
		$conn->close();
	}
?>