<!DOCTYPE html>
<?php
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","pay");
	$query="select * from notice where no=$no";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<script>
	function send(){
	document.frm1.submit();
}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="edit_ok.php">
	<table class="table1">
		<tr>
			<td colspan="2" align="center">수정하기</td>
		</tr>
		<tr>
			<td>글번호</td>
			<td>
				<input type="text" name="no" value="<?php echo $row["no"] ?>" readonly>
			</td>
		</tr>
		<tr>
			<td>작성자</td>
			<td>
				<input type="text" name="writer" value="<?php echo $row["writer"] ?>" readonly>
			</td>
		</tr>
		<tr>
			<td>제목</td>
			<td align="left">
				<input type="text" name="title" size="45" value="<?php echo $row["title"] ?>">
			</td>
		</tr>
		<tr>
			<td>내용</td>
			<td align="left">
				<textarea name="content" rows="6" cols="50" ><?php echo $row["content"] ?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="작성완료" class="bt" onclick="send()">
			</td>
		</tr>
	</table>
</form>
</body>
</html>