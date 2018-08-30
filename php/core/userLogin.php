<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if(isset($_POST['submit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		$error = "Netočan email ili lozinka";
	}else{
	// Define $email and $password
	$email=$_POST['email'];
	$password=$_POST['password'];

	// To protect MySQL injection for Security purpose
	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);
	$password = md5($password);

	// SQL query to fetch information of registerd users and finds user match.
	$sql = "SELECT * FROM korisnik WHERE lozinka='$password' AND email='$email'";
	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);
	if ($rows == 1){
		$row = mysqli_fetch_row($query);
		$_SESSION['user_id']= $row[0];
		$_SESSION['ime']= $row[1];
		$_SESSION['prezime']= $row[2];

		header("location: firstPage.php"); // Redirecting To Other Page
	}else{
		$error = "Netočan email ili lozinka";
	}
	mysqli_close($conn); // Closing Connection
	}
}
?>