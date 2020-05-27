<!DOCTYPE html>
<?php 
	$conn=mysqli_connect("localhost","root","autoset","pay");
	$query="select * from notice order by no desc";
	$rs=mysqli_query($conn,$query);

?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	</header>
	<section>
		<table class="table" align="center">
			<tr>
				<td>글번호</td>
				<td>제목</td>
				<td>작성자</td>
				<td>작성일</td>
				<td>조회수</td>
			</tr>
			<?php
			while($row=mysqli_fetch_array($rs)){
				?>
			<tr>
				<td><?php echo $row["no"]?></td>
				<td><a href="content.php?no=<?php echo $row["no"]?>">
					<?php echo $row["title"]?></a></td>
				<td><?php echo $row["writer"]?></td>
				<td><?php echo $row["writeday"]?></td>
				<td><?php echo $row["hit"]?></td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="5" align="center">
					<input type="button" value="공지 추가하기" class="bt" onclick="location.href='write.php'">
				</td>
			</tr>
		</table>
	</section>
</body>
</html>