<?php
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","pay");
	$query1="update notice set hit=hit+1 where no=$no";
	$rs=mysqli_query($conn,$query1);

	$query2="select * from notice where no=$no";
	$rs=mysqli_query($conn,$query2);
	$row=mysqli_fetch_array($rs);
?>
<script>
	function del(){
		if(confirm("정말로 삭제하시겠습니까?")){
			location.href="delete.php?no=<?php echo $no ?>";
		}
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table class="table1">
		<tr>
			<td colspan="2" align="center">글쓰기</td>
		</tr>
		<tr>
			<td>글번호</td>
			<td><?php echo $row["no"] ?></td>
		</tr>
		<tr>
			<td>제목</td>
			<td align="left"><?php echo $row["title"] ?></td>
		</tr>
		<tr>
			<td>내용</td>
			<td align="left">
				<?php echo nl2br($row["content"]) ?>
			</td>
		</tr>
		<tr>
			<td>작성자</td>
			<td><?php echo $row["writer"] ?></td>
		</tr>
		<tr>
			<td>작성일</td>
			<td><?php echo $row["writeday"] ?></td>
		</tr>
		<tr>
			<td>조회수</td>
			<td><?php echo $row["hit"] ?></td>
		</tr>	
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="수정" class="bt" onclick="location.href='edit.php?no=<?php echo $no ?>'">
				<input type="button" value="삭제" class="bt" onclick="del()">
			</td>
		</tr>
	</table>
</body>
</html>