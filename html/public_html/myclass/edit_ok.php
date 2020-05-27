<?php 
	$snum=$_POST["snum"];
	$sname=$_POST["sname"];
	$kor=$_POST["kor"];
	$eng=$_POST["eng"];
	$math=$_POST["math"];
	$total=$kor+$eng+$math;
	$aver=$total/3;
	if($aver>=90){
		$bigo="우등";
	}else if($aver<=60){
		$bigo="보충";
	}else{
		$bigo="보통";
	}

	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="update myclass set sname='$sname',kor=$kor,eng=$eng,math=$math where snum='$snum'";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url='index.php'">