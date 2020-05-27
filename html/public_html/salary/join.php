<?php
	session_start();
?>
<script>
	function idcheck() {
		if(frm1.id.value==""){
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		window.open("idcheck.php?id="+frm1.id.value,"frmid","width=400,height=250");
	}
	function send() {
		if(frm1.id.value==""){
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		if(frm1.pw1.value==""){
			alert("비밀번호를 입력하세요");
			frm1.pw.focus();
			return false;
		}
		if(frm1.pw2.value==""){
			alert("비밀번호를 입력하세요");
			frm1.pw2.focus();
			return false;
		}
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.pw1.value != frm1.pw2.value){
			alert("비밀번호를 확인해주십시오");
			frm1.pw2.select();
			return false;
		}
		document.frm1.submit();
	}
	function login() {
		window.open("login.php","login","width=400","height=150");
		// body...
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
	<header>
		<div  class="topmenu">
			<a href="javascript:login()">Login</a>
			<a href="join.php">Sign Up</a>
			<a href="#">Search ID/PW</a>
		</div>
	</header>
	<section>
		<form class="frm1" action="index.html" method="post">
			<br><br>
			<table class="table">
				<tr>
					<td>아이디</td>
					<td><input type="text" name="id">
						<input type="button" value="중복체크" onclick="idcheck()" class="bt">
					</td>
				</tr>
				<tr>
					<td>비밀번호</td>
					<input type="text" name="pw1">
				</tr>
				<tr>
					<td>비밀번호 확인</td>
					<td><input type="text" name="pw2"></td>
				</tr>
				<tr>
					<td>이름</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" value="가입완료" onclick="send()" class="bt">
						<input type="reset" value="새로작성" class="bt">
					</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>
