<?php

$db = mysqli_connect("mysql.hostinger.in", "u462235906_vijay", "administrator", "u462235906_user");

$sql = "UPDATE tuesday SET firsthour='$_POST[one]', secondhour='$_POST[two]', thirdhour='$_POST[three]',fourthhour='$_POST[four]',fifthhour='$_POST[five]',sixthhour='$_POST[six]',seventhhour='$_POST[seven]' WHERE ID='$_POST[id]'";

 if(mysqli_query($db,$sql))
	 header("refresh:1;url=befup.php");
else
	echo "NOT UPDATE";

?>
