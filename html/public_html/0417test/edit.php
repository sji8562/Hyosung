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
<form name="frm1" method="post" action="edit_OK.php">
<table width="225" align="center">
	<tr><td>학번</td>
	<td>
<input type="text" name="grade2" value="1"></td></tr>
	<tr><td>이름</td>
	<td>
<input type="text" name="name2" value="홍길동"></td></tr>
	<tr><td>국어</td>
	<td>
<input type="text" name="korean2" value="90"></td></tr>
	<tr><td>영어</td>
	<td>
<input type="text" name="english2" value="90"></td></tr>
	<tr><td>수학</td>
	<td>
<input type="text" name="math2" value="90"></td></tr>
	<tr><td align="center" colspan="2">
<input type="button" value="수정완료" onclick="send()"></td></tr>
</table>
</form>
</body>
</html>