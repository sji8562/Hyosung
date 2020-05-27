<?php
// 겟으로 읽어온 값을 no라는 변수에 넣는다
// php는 변수명 앞에 $를 붙여야 한다
	$no = $_GET["no"];
	echo $no;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1" width="500" align="center">
		<tr>
			<td>조보아 연기...</td>
		</tr>
		<tr><td>
			<input type="button" value="수정">
			<input type="button" value="삭제">
		</td></tr>
	</table>

</body>
</html>