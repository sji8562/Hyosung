<?php
	$no=$_GET["no"];
	echo $no;
?>
<script>
	function del_check(){
		if(confirm("정말로 삭제 하시겠습니까?")){
			location.href="del.php?no=1";
		}
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table width="225" align="center">
	<tr><td>학번</td> <td>1</td></tr>
	<tr><td>이름</td> <td>홍길동</td></tr>
	<tr><td>국어</td> <td>90</td></tr>
	<tr><td>영어</td> <td>90</td></tr>
	<tr><td>수학</td> <td>90</td></tr>
	<tr><td>총점</td> <td>270</td></tr>
	<tr><td>평균</td> <td>90</td></tr>
	<tr><td colspan="2" align="center"><input type="button" value="수정" onclick="location.href='edit.php?no=1'">
<input type="button" value="삭제" onclick="del_check()">
</td></tr>
</table>
</body>
</html>