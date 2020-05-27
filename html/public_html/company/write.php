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
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
	<table class="table">
		<tr>
			<td colspan="2" align="center">
				인적사항
			</td>
		</tr>
		<tr>
			<td>사원번호</td>
			<td><input type="text" name="pnum" width="30"></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><input type="text" name="name" width="30"></td>
		</tr>
		<tr>
			<td>부서명</td>
			<td><input type="text" name="department" width="30"></td>
		</tr>
		<tr>
			<td>직급</td>
			<td><input type="text" name="rank" width="30"></td>
		</tr>
		<tr>
			<td>전화번호</td>
			<td><input type="text" name="tel" width="30"></td>
		</tr>
		<tr>
			<td>주소</td>
			<td><input type="text" name="addr" width="50"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email" width="50">
				<select>
					
				</select></td>
		</tr>
		<tr>
			<td>혼인여부</td>
			<td>
				<select name="married">
					<option value="y">기혼</option>
					<option value="n">미혼</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>성별</td>
			<td><select name="gender">
				<option value="m">남자</option>
				<option value="f">여자</option>
			</select></td>
		</tr>
		<tr>
			<td>연봉</td>
			<td><input type="text" name="salary" width="30"></td>
		</tr>
		<tr>
			<td>생년월일</td>
			<td><input type="text" name="birthdate" width="30"></td>
		</tr>
		<tr>
			<td>경력여부</td>
			<td><select name="career">
				<option value="인턴">인턴</option>
				<option value="신입">신입</option>
				<option value="1년차">1년차</option>
				<option value="2년차">2년차</option>
				<option value="3년차">3년차</option>
				<option value="4년차">4년차</option>
			</select></td>
		</tr>
		<tr>
			<td>최종학력</td>
			<td>
				<select name="grade">
					<option value="대학원졸">대학원졸</option>
					<option value="대졸">대졸</option>
					<option value="초대졸">초대졸</option>
					<option value="고졸">고졸</option>
					<option value="중졸">중졸</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>전공</td>
			<td><input type="text" name="major" width="30"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="button" class="bt" value="작성완료" onclick="send()">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>