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
	<title></title>
</head>
<body>

</body>
</html>