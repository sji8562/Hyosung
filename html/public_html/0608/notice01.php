<?php
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from inc order by no desc";
	$rs=mysqli_query($conn,$query);
 ?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br><br>
	<table class="table1" width="600">
		<tr>
			<th>글번호</th>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)){ ?>
		<tr align="center">
			<td><?php echo $row["no"] ?></td>
			<td><?php echo $row["title"] ?></td>
			<td><?php echo $row["writer"] ?></td>
			<td><?php echo $row["writeday"] ?></td>
			<td><?php echo $row["hit"] ?></td>
		</tr>
	<?php } ?>
		<tr>
			<td colspan="5" align="center">
			<input type="button" class="bt1" value="공지사항추가" onclick="location.href='inc_write.php'">
		</td>
		</tr>
	</table>
</body>
</html>
