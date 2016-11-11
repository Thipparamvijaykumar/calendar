<html>

<body>


<?php

$db = mysqli_connect("mysql.hostinger.in", "u462235906_vijay", "administrator", "u462235906_user");

$sql = "SELECT * FROM tuesday";

$records = mysqli_query($db,$sql);


?>



<table>
<tr>
<th></th>
 <th>Days</th>
  <th>I</th>
  <th>II</th>
  <th>III</th>
   <th>IV</th>
  <th>V</th>
  <th>VI</th>
   <th>VII</th>
</tr>  
<?php
while($row = mysqli_fetch_array($records))
{
	echo "<tr><form action=update.php method=post>";
	echo "<td><input type=hidden name=id value='".$row['ID']."'></td>";
	echo "<td><input type=text name=day value='".$row['day']."' disabled></td>";
	echo "<td><input type=text name=one value='".$row['firsthour']."'></td>";
    echo "<td><input type=text name=two value='".$row['secondhour']."'></td>";
    echo "<td><input type=text name=three value='".$row['thirdhour']."'></td>";
	 echo "<td><input type=text name=four value='".$row['fourthhour']."'></td>";
	  echo "<td><input type=text name=five value='".$row['fifthhour']."'></td>";
	   echo "<td><input type=text name=six value='".$row['sixthhour']."'></td>";
	    echo "<td><input type=text name=seven value='".$row['seventhhour']."'></td>";
    
    echo "<td><input type=submit value='post'>";
    echo "</form></tr>";

}
?>
  
  
</body>

</html>