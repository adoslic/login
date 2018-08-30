<?php
$error=''; // Variable To Store Error Message
if(isset($_POST['submit'])){
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirmation = $_POST['password_confirmation'];

		if($password==$password_confirmation){
			$encrypted = md5($password);
			$sql = "SELECT * FROM korisnik WHERE ime = '$first_name' AND prezime = '$last_name' AND email = '$email' AND lozinka = '$encrypted'";
			$query = mysqli_query($conn, $sql);
			$rows = mysqli_num_rows($query);
			
			if($rows>0){
				$error = "Korisnik već postoji";
			}
			else{
				//$encrypted = md5($password);
				$sql = "INSERT INTO korisnik (ime, prezime, email, lozinka) 
				VALUES ('$first_name','$last_name','$email','$encrypted')";

				if(!mysqli_query($conn,$sql)){
					$error = "Greška s bazom";
				}else{
					header("location: login.php");
				}
			}
		}else{
			$error = "Netočna potvrda lozinke";
		}
	mysqli_close($conn); // Closing Connection
}
?>