<script>
	function send() {
		document.frm1.submit();
		
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table class="table" width="500">
			<tr>
				<td colspan="2" align="center">학생 추가</td>
			</tr>
			<tr>
				<td>학번</td>
				<td><input type="text" name="snum" width="250" ></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="sname" width="250"></td>
			</tr>
			<tr>
				<td>국어</td>
				<td><input type="text" name="kor" width="250" numberonly ></td>
				
			</tr>
			<tr>
				<td>영어</td>
				<td><input type="text" name="eng" width="250" numberonly ></td>
			</tr>
			<tr>
				<td>수학</td>
				<td><input type="text" name="math" width="250" numberonly></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="button" value="작성 완료" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>