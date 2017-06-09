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
	echo $i;

?>

<script>
<!--
function fullwin(){
window.open("bigpage.html","bfs","fullscreen,scrollbars")
}
//-->
</script>
fullwin()
