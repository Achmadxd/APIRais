<?php
$brand = $_POST['merk'];
$type = $_POST['jenis'];
$color = $_POST['warna'];
$rentPrice = $_POST['hargasewa'];

if($brand != "" && $type != "" && $rentPrice != ""){
    $con = mysqli_connect("localhost", "root", "", "dbrentalsepeda");
    $sql = "insert into tbsepeda (merk, jenis, warna, hargasewa) values ('$brand', '$type', '$color', '$rentPrice')";
    $json["STATUS"] = "FAILED";
    $json["MESSAGE"] = "FAILED";

    if ($con->query($sql) === TRUE) {
		$json["STATUS"] = "SUCCESS";
		$json["MESSAGE"] = "SUCCESS";
	}
}
echo json_encode($json);
?>