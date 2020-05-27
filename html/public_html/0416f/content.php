<?php
	//겟으로 읽어 온 값을 no라는 변수에 넣는다.
	//php는 변수명 앞에 $를 붙여야한다.
	$no=$_GET["no"];
	echo $no;
?>
<script>
	function del_check(){
		if(confirm("정말로 삭제하시겠습니까?"))
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
	<tr>
	<td align="center">조보아는 너무 연기 잘해요.</td>
	</tr>
	<tr><td align="center">
		<input type="button" value="수정"onclick="location.href='edit.php?no=1'">
		<input type="button" value="삭제" onclick="del_check()">
	</td></tr>
	</table>
</body>
</html>