<script language="javascript">
	function send(){
		if(frm1.name1.value==""){
			alert("이름을 입력해주세요.");
			frm1.name1.focus();
			return false;
		}

		if(frm1.ID.value==""){
			alert("아이디을 입력해주세요.");
			frm1.ID.focus();
			return false;
		}
		
		if(frm1.pw.value==""){
			alert("비밀번호을 입력해주세요.");
			frm1.pw.focus();
			return false;
		}

		if(frm1.pw.value != frm1.pw1.value){
		alert("비밀번호가 일치하지 않습니다.");
			frm1.pw.value="";
			frm1.pw1.value="";
			frm1.pw1.focus();
			return false;
		}

		if(frm1.memo.value==""){
			alert("하고싶은말을 입력해주세요.");
			frm1.memo.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>form태그&nbsp;실습
	</title>
</head>
<body>
	<form name="frm1" method="post" action="test02_ok.php">
	<table border="1" align="center" width="100%" height="100%" cellpadding="5"	cellspacing="0.5">
	<tr>
		<th colspan="2" bgcolor="#FF90FF">회원가입 양식</th>
	</tr>
	<tr>
		<td width="20%" bgcolor="#FF90FF" align="center"><b>이름</b></td>
		<td width="80%">
<input type="text" name="name1" size="10">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FF90FF" align="center">아이디</td>
		<td>
<input type="text" name="ID"> <input type="submit" name="BT" value="중복체크"></button>			
		</td>
	</tr>
	<tr>
		<td bgcolor="#FF90FF" align="center"><b>비밀번호</b></td>
		<td>
<input type="password" name="pw">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FF90FF" align="center"><b>비밀번호 확인</b></td>
		<td>
<input type="password" name="pw1">
		</td>
	</tr>
	<tr>
		<td bgcolor="#FF90FF" align="center"><b>관심지역</b></td>
		<td>
<input type="radio" name="area" value="서울/경기">서울/경기
<input type="radio" name="area" value="부산" checked="">부산
<input type="radio" name="area" value="해외">해외
		</td>
	</tr>
	<tr>
		<td bgcolor="#FF90FF" align="center"><b>하고싶은말</b></td>
		<td>
<textarea name="memo" rows="10" cols="150"></textarea>>
		</td>
	</tr>
	<tr>
		
		<td colspan="2" align="center">
<input type="button" value="가입" size="20" onclick="send()">
<input type="reset" value="취소">
		</td>
	</tr>
	</table>
</body>
</html>