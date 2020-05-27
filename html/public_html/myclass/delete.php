<?php 
	$snum=$_GET["snum"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="delete from myclass where snum='$snum'";
	mysqli_query($conn,$query);
?>
<script>
	alert("데이터가 삭제되었습니다");
</script>
<meta http-equiv="refresh" content="0; url=index.php">