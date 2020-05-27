<?php
	$hp=$_POST["hp"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$age=$_POST["age"];
	$address=$_POST["address"];
	$email=$_POST["email"];
	$grade=$_POST["grade"];
	$major=$_POST["major"];
	$homepage=$_POST["homepage"];

	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="insert into student(hp,name,gender,age,address,email,grade,major,homepage) values('$hp','$name','$gender',$age,'$address','$email','$grade','$major','$homepage')";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">