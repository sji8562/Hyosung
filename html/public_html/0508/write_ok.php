<?php
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writeday=date("Y-m-d");
	$conn=mysqli_connect("localhost","root","autoset","pay");
	$query="insert into notice(writer,title,content,writeday)
	values('$writer','$title','$content','$writeday')";
	mysqli_query($conn,$query);

?>
<meta http-equiv="refresh" content="0;url=notice.php">