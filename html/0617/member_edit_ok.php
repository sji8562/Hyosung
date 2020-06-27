<?php
	$id=$_POST["id"];
	$pw=$_POST["pw1"];
	$name=$_POST["name"];
	$age=$_POST["age"];
	$gendar=$_POST["gendar"];
	$address=$_POST["address"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="update member1 set pw='$pw',name='$name',age='$age',gendar='$gendar',address='$address' where id='$id'";
	mysqli_query($conn,$query);
	// echo $query; exit;
?>
<meta http-equiv="refresh" content="0;url=index.php">
