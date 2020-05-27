<script>
	function send(){
		document.frm1.submit()
	}
</script>
<html>
	<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post"	action="edit_OK.php">
	<table border="1" width="500" align="center" cellpadding="10" cellspacing="0.5">
	<tr>
	<td>글제목</td>
	<td>
<input type="text" name="title" size="22">
	</td>
	</tr>
	<tr>
	<td>글내용</td>
	<td>
<textarea name="content" rows="20" cols="70"></textarea>
	</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
<input type="button" value="확인" onclick="send()">
		</td>
	</tr>
	</table>
</form>
</body>
</html>