<html>

<body>

<?php

$db = mysqli_connect("mysql.hostinger.in", "u462235906_vijay", "administrator", "u462235906_user");

$sql = "SELECT * FROM tuesday";

$records = mysqli_query($db,$sql);


?>


<table width="200" border="0" cellpadding="8" cellspacing="5" >
<tr>
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
	echo "<tr>";
	 
	  	echo "<td> ".$row['day']." </td>";
	echo "<td> ".$row['firsthour']." </td>";
    echo "<td>".$row['secondhour']."</td>";
    echo "<td>".$row['thirdhour']."</td>";
	echo "<td>".$row['fourthhour']."</td>";
    echo "<td>".$row['fifthhour']."</td>";
    echo "<td>".$row['sixthhour']."</td>";
     echo "<td>".$row['seventhhour']."</td>";
  
  

}
?>
  
  
</body>

</html>