<script language="javascript">
	function send(){
		if(frm1.name1.value==""){
			alert("이름을 입력하세요");
			frm1.name1.focus();
			return false;
		}
	
	
		if(frm1.memo.value==""){
			alert("내용을 입력하세요");
			frm1.memo.focus();
			return false;
		}
	
	
		if(frm1.pw.value==""){
			alert("비밀번호을 입력하세요");
			frm1.pw.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>form태그&nbsp;11가지</title>
</head>
<body>
<form name="frm1" method="post" action="test01_ok.php">
	<table border="1" align="center" width="100%" height="100%" cellpadding="10" cellspacing="0.5">
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>text태그</b></td>
			<td>
<input type="text" name="name1" size="15" maxlength="10">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200" align="center"><b>textarea태그</b></td>
			<td>
<textarea name="memo" rows="5" cols="60"></textarea>
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>password태그</b></td>
			<td>
<input type="password" name="pw" size="15">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>hidden태그</b></td>
			<td>
<input type="hidden" name="hid">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>radio</b></td>
			<td>
<input type="radio" name="gender" value="m">남성
<input type="radio" name="gender" value="f" checked>여성
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>select</b></font></td>
			<td>
<select name="grade">
	<option value="대학원졸업">대학원졸업</option>
	<option value="대졸업">대졸업</option>
	<option value="초대졸업">초대졸업</option>
	<option value="고졸업">고졸업</option>
	<option value="중졸업">중졸업</option>

</select>
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>checkbox개체</b></td>
			<td>
<input type="checkbox" name="hobby1" value="여행">여행
<input type="checkbox" name="hobby2" value="등산">등산
<input type="checkbox" name="hobby3" value="음악">음악	
<input type="checkbox" name="hobby4" value="게임">게임			
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>file 개체</b></td>
			<td>
<input type="file" name="fname">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>submit 개체</b></td>
			<td>
<input type="submit" value="제출하기">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>button 개체</b></td>
			<td>
<input type="button" value="작성완료" onclick="send()">
			</td>
		</tr>
		<tr>
			<td width="15%" bgcolor="#ABF200"><b>reset 개체</b></td>
			<td>
<input type="reset" value="새로고침">
			</td>
		</tr>
	</table>
</body>
</html>
