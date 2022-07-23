<?php
$con = mysqli_connect("localhost","id15907146_wp_07953c514be9e8a3cde6e7d2a77f1cf7","Electr@tech63@6@","id15907146_wp_07953c514be9e8a3cde6e7d2a77f1cf7") or die("Error con");
$q=mysqli_query($con,"select * from iot order by LId");
while($row=mysqli_fetch_array($q))
{
	$st=$st.($row["Status"]=="off"?"0":"1");
}
echo $st;
?>