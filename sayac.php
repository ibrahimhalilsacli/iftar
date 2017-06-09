<?php
	$servername = "rdbms.strato.de";
	$username = "U2992878";
	$password = "(5324iBrahim)";
	$dbname = "DB2992878";
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die(mysql_error());
	$sql ="SELECT sayac FROM `sayac`";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();


$i = $row['sayac'];
$i++;
echo $i;

$sqlInsert = "UPDATE `sayac` SET `sayac`=".$i;
$conn->query($sqlInsert);
?>