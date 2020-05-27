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
	$query="insert into myclass(snum,sname,kor,eng,math,total,aver,bigo) values('$snum','$sname',$kor,$eng,$math,$total,$aver,'$bigo')";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url='index.php'">