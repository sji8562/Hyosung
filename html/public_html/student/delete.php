<?php
	$hp=$_GET["hp"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="delete from student where hp='$hp'";
	mysqli_query($conn,$query);
?>
<script>
	alert("데이터가 삭제되었습니다. byebye~~");
</script>
<meta http-equiv="refresh" content="0; url=index.php">