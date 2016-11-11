<?php 
	
	if (isset($_POST['faculty'])) {

			header("faculty.html"); //redirect to home page
		
	}
	if (isset($_POST['student'])) {

			header("student.html"); //redirect to home page
		
	}
?>



<!DOCTYPE html>
<html>
<head>
	<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
	
	
</head>
<body>
<div class="header"> 
	
</div>



<form method="post" action="befup.php">

			<center><input type="submit" class="button" name="faculty" value="Faculty" height="200"></center>
			
			
		
	
</form>
<form method="post" action="retrive.php">

			<center><input type="submit" class="button" name="student" value="Student"></center>
			
			
		
	
</form>
</body>
</html>