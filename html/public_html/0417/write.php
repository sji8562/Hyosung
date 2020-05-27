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
<form name="frm1" method="post" action="write_OK.php">
<table border="1" width="500" align="center">
	<tr><td align="center">
	글제목</td>
	<td>
	<input type="text" name="write1" size="20"></td></tr>
	<tr><td align="center">
	글내용</td>
	<td>
	<textarea name="memo" rows="20" cols="30"></textarea>	
	</td></tr>
	<tr><td align="center" colspan="2">
	<input type="button" value="확인" onclick="send()"></td></tr>
</table>
</form>
</body>
</html>