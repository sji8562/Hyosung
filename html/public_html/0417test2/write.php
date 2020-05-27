<script>
	function send(){
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form name="frm1" method="post" action="www.write_OK.php">
<table border="1" width="100%" height="100%" align="center">
	<tr><th>제목</th>
	<td>
<input type="text" name="title1"></td></tr>

	<tr><th>내용</th>
	<td>
<textarea name="content" rows="40" cols="50"></textarea></td></tr>
	<tr><td colspan="2" align="center">
<input type="button" value="작성완료" onclick="location.href='write_OK.php'">
</table>	
</form>
</body>
</html>