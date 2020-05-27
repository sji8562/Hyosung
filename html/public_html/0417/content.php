<?php
	$no=$_GET["no"];
	echo $no;
?>
<script>
	function del_check(){
		if (confirm("정말로 삭제 하시겠습니까?"))
		{
		location.href='del.php?no=1'
		}
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table border="1" width="500" align="center">
	<tr><th align="center">
	뭐시기저시기</th></tr>
	<tr><td align="center">
	<input type="button" value="수정" onclick="location.href='edit.php?no=1'">
	<input type="button" value="삭제" onclick="del_check()">
</table>

</body>
</html>