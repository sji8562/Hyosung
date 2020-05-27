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
<form name="frm1" method="post" action="write_ok.php">
<table width="225" align="center">
	<tr><td>학번</td>
	<td>
<input type="text" name="grade"></td></tr>
	<tr><td>이름</td>
	<td>
<input type="text" name="name1"></td></tr>
	<tr><td>국어</td>
	<td>
<input type="text" name="korean"></td></tr>
	<tr><td>영어</td>
	<td>
<input type="text" name="english"></td></tr>
	<tr><td>수학</td>
	<td>
<input type="text" name="math1"></td></tr>
	<tr><td colspan="2" align="center">
<input type="button" value="작성완료" onclick="send()"></td></tr>
</table>
</form>

</body>
</html>