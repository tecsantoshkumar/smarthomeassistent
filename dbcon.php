<?php
$con = mysqli_connect("localhost","root","","id15907146_wp_07953c514be9e8a3cde6e7d2a77f1cf7");
date_default_timezone_set('Asia/Kolkata');

if(isset($_REQUEST["ch1"]) || isset($_REQUEST["ch2"]) || isset($_REQUEST["ch3"]) || isset($_REQUEST["ch4"]) || isset($_REQUEST["ch5"]) || isset($_REQUEST["ch6"]) || isset($_REQUEST["ch7"]) || isset($_REQUEST["ch8"]) || isset($_REQUEST["ch9"]) || isset($_REQUEST["ch10"]) || isset($_REQUEST["ch11"]) || isset($_REQUEST["ch12"]) || isset($_REQUEST["ch13"]) || isset($_REQUEST["ch14"]) || isset($_REQUEST["ch15"]) || isset($_REQUEST["ch16"]))
{
	$l1=isset($_REQUEST["ch1"])?"on":"off";
	$l2=isset($_REQUEST["ch2"])?"on":"off";
	$l3=isset($_REQUEST["ch3"])?"on":"off";
	$l4=isset($_REQUEST["ch4"])?"on":"off";
	$l5=isset($_REQUEST["ch5"])?"on":"off";
	$l6=isset($_REQUEST["ch6"])?"on":"off";
	$l7=isset($_REQUEST["ch7"])?"on":"off";
	$l8=isset($_REQUEST["ch8"])?"on":"off";
	$l9=isset($_REQUEST["ch9"])?"on":"off";
	$l10=isset($_REQUEST["ch10"])?"on":"off";
	$l11=isset($_REQUEST["ch11"])?"on":"off";
	$l12=isset($_REQUEST["ch12"])?"on":"off";
	$l13=isset($_REQUEST["ch13"])?"on":"off";
	$l14=isset($_REQUEST["ch14"])?"on":"off";
	$l15=isset($_REQUEST["ch15"])?"on":"off";
	$l16=isset($_REQUEST["ch16"])?"on":"off";
	$q1=mysqli_query($con,"update iot set Status='$l1' where Load1='L1'");
	$q2=mysqli_query($con,"update iot set Status='$l2' where Load1='L2'");
	$q3=mysqli_query($con,"update iot set Status='$l3' where Load1='L3'");
	$q4=mysqli_query($con,"update iot set Status='$l4' where Load1='L4'");
	$q5=mysqli_query($con,"update iot set Status='$l5' where Load1='L5'");
	$q6=mysqli_query($con,"update iot set Status='$l6' where Load1='L6'");
	$q7=mysqli_query($con,"update iot set Status='$l7' where Load1='L7'");
	$q8=mysqli_query($con,"update iot set Status='$l8' where Load1='L8'");
	$q9=mysqli_query($con,"update iot set Status='$l9' where Load1='L9'");
	$q10=mysqli_query($con,"update iot set Status='$l10' where Load1='L10'");
	$q11=mysqli_query($con,"update iot set Status='$l11' where Load1='L11'");
	$q12=mysqli_query($con,"update iot set Status='$l12' where Load1='L12'");
	$q13=mysqli_query($con,"update iot set Status='$l13' where Load1='L13'");
	$q14=mysqli_query($con,"update iot set Status='$l14' where Load1='L14'");
	$q15=mysqli_query($con,"update iot set Status='$l15' where Load1='L15'");
	$q16=mysqli_query($con,"update iot set Status='$l16' where Load1='L16'");
}

$q=mysqli_query($con,"select * from iot order by LId");
$ch=array("off","off","off","off","off","off","off","off","off");
$i=0;
while($row=mysqli_fetch_array($q))
{
	$ch[$i]=$row["Status"]=="on"?"checked":"";
	$i++;
}

$q1=mysqli_query($con,"select * from dht where dhtf='Humidity'");
$row1=mysqli_fetch_array($q1);
$hmd=$row1["dhtv"];

$q2=mysqli_query($con,"select * from dht where dhtf='Temp'");
$row2=mysqli_fetch_array($q2);
$temp=$row2["dhtv"];

$q1=mysqli_query($con,"select * from ultrasonic where dhtf='Humidity'");
$row1=mysqli_fetch_array($q1);
$hmd=$row1["dhtv"];

?>
