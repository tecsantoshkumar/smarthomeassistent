<?php
$con = mysqli_connect("localhost","root","","id15907146_wp_07953c514be9e8a3cde6e7d2a77f1cf7");

$load=$_REQUEST["load"];
$ch=$_REQUEST["ch"];
	$q1=mysqli_query($con,"update iot set Status='$ch' where Load1='$load'");
	echo "Saved";
?>
