<?php
	include 'connect.php';
	$userID = $_POST['userID'];
	$godine = $_POST['godine'];
	$spol = $_POST['spol'];
	$ITM = $_POST['ITM'];
	$struk = $_POST['struk'];
	$aktivnost = $_POST['aktivnost'];
	$voce = $_POST['voce'];
	$secer = $_POST['secer'];
	$pusenje = $_POST['pusenje'];
	$polidipsija = $_POST['polidipsija'];
	$poliurija = $_POST['poliurija'];
	$polifagija = $_POST['polifagija'];
	$umor = $_POST['umor'];
	$vid = $_POST['vid'];
	$tezina = $_POST['tezina'];
	$stopala = $_POST['stopala'];
	$rane = $_POST['rane'];
	$nasljede = $_POST['nasljede'];
	$sistolicki = $_POST['sistolicki'];
	$dijastolicki = $_POST['dijastolicki'];
	$LDL = $_POST['LDL'];
	$HDL = $_POST['HDL'];
	$glukoza = $_POST['glukoza'];


	$sql = "INSERT INTO `osobni podaci`(`korisnikID_FK`, `godine`, `spol`, `ITM`, `opseg`, `aktivnost`, `voce`, `secer`, `pusenje`, `polidipsija`, `poliurija`, `polifagija`, `umor`, `vid`, `tezina`, `stopala`, `rane`, `nasljede`, `sistolicki`, `dijastolicki`, `LDL`, `HDL`, `glukoza`) 
	VALUES ('$userID','$godine','$spol','$ITM','$struk','$aktivnost','$voce','$secer','$pusenje','$polidipsija', '$poliurija','$polifagija', '$umor', '$vid', '$tezina', '$stopala', '$rane', '$nasljede', '$sistolicki', '$dijastolicki', '$LDL', '$HDL', '$glukoza')";

	if(!mysqli_query($conn, $sql)){
		echo "Not inserted" . mysqli_error($conn);
	}
	else{
		//header("location: result.php");
	}

?>