<script>
	function send() {
		//무결성체크
		//무결성 체크 후 포스트 방식으로 write_ok.php이동
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
	<br><br>
	<table class="table" width="500">
		<tr>
			<td colspan="2" align="center">
				학생추가폼
			</td>
		</tr>
		<tr>
			<td>번호</td>
			<td><input type="text" name="hp" size="25"></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><input type="text" name="name" size="25"></td>
		</tr>
		<tr>
			<td>성별</td>
			<td><select name="gender">
				<option value="m">남성</option>
				<option value="f">여성</option>
			</select></td>
		</tr>
		<tr>
			<td>나이</td>
			<td><input type="text" name="age" size="25"></td>
		</tr>
		<tr>
			<td>주소</td>
			<td><input type="text" name="address" size="55"></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td><input type="text" name="email" size="30"></td>
		</tr>
		<tr>
			<td>최종학력</td>
			<td>
				<select name="grade">
					<option vlaue="대학원졸">대학원졸</option>
					<option vlaue="대졸">대졸</option>
					<option vlaue="초대졸">초대졸</option>
					<option vlaue="고졸">고졸</option>
					<option vlaue="중졸">중졸</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>전공</td>
			<td><input type="text" name="major" size="30"></td>
		</tr>
		<tr>
			<td>홈페이지 주소</td>
			<td><input type="text" name="homepage" size="30"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="작성완료" class="bt" onclick="send()">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>