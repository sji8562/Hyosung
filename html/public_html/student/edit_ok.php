<?php
	//전화번호, 이름, 성별, 나이, 주소, 이메일, 학력, 전공, 홈페이지
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
	$query="update student set name='$name',gender='$gender',age=$age,address='$address',email='$email',grade='$grade',major='$major',homepage='$homepage' where hp='$hp'";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">