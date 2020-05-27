<?php
	$pnum=$_POST["pnum"];
	$name=$_POST["name"];
	$department=$_POST["department"];
	$rank=$_POST["rank"];
	$tel=$_POST["tel"];
	$addr=$_POST["addr"];
	$email=$_POST["email"];
	$married=$_POST["married"];
	$gender=$_POST["gender"];
	$salary=$_POST["salary"];
	$birthdate=$_POST["birthdate"];
	$career=$_POST["career"];
	$grade=$_POST["grade"];
	$major=$_POST["major"];
	

	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="insert into company(pnum,name,department,rank,tel,addr,email,married,gender,salary,birthdate,career,grade,major) values('$pnum','$name','$department','$rank','$tel','$addr','$email','$married','$gender',$salary,'$birthdate','$career','$grade','$major')";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">