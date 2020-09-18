<?php
$noktp = $_POST['noktp'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
if ($noktp != "" && $email != "" && $password != "" && $nama != "" && $nohp != "" && $alamat != "") {
	$roleuser = 1;
	$con = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
	$sql = "insert into tbuser (noktp, email, password, nama, nohp, alamat, roleuser) values ('$noktp', '$email', '$password', '$nama', '$nohp', '$alamat', '$roleuser')";
	$json["STATUS"] = "FAILED";
	$json["MESSAGE"] = "FAILED";
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	//$count = mysqli_num_rows($result);
	if ($con->query($sql) === TRUE) {
		$json["STATUS"] = "SUCCESS";
		$json["MESSAGE"] = "SUCCESS";
	}
}else{
	
}
echo json_encode($json);
	//echo $sql;
