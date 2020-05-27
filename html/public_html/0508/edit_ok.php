<?php
	$no=$_POST["no"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$conn=mysqli_connect("localhost","root","autoset","pay");
	$query="update notice set title='$title',content='$content' where no=$no";
	mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=notice.php">