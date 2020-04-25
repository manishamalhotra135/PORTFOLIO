<?php

	// include 'connection.php';
	include 'email.php';
	if(isset($_POST['send'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		// $q = "INSERT INTO `contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
		// $query = mysqli_query($con,$q);
		// if($query){
			sendEmailToUser('Manisha','manimalhotra555@gmail.com',$email);
		// }
		

		// header('location:home.html'); 
		
	}
?>