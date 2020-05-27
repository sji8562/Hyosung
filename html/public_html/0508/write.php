<!DOCTYPE html>
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
	<form name="frm1" method="post" action="write_ok.php">
	<table class="table1">
		<tr>
			<td colspan="2" align="center"></td>
		</tr>
		<tr>
			<td>작성자</td>
			<td>
				<input type="text" name="writer">
			</td>
		</tr>
		<tr>
			<td>제목</td>
			<td align="left">
				<input type="text" name="title" size="45">
			</td>
		</tr>
		<tr>
			<td>내용</td>
			<td align="left">
				<textarea name="content" rows="6" cols="50"></textarea>
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