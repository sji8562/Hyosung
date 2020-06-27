<?php
	session_start();
?>
<script>
	function send(){
		if(frm1.id.value==""){
			alert("아이디를 입력하세요.");
			frm1.id.focus();
			return false;
		}
		if(frm1.pw1.value==""){
			alert("비밀번호를 입력하세요.");
			frm1.pw1.focus();
			return false;
		}
		if(frm1.pw2.value==""){
			alert("비밀번호확인을 입력하세요.");
			frm1.pw2.focus();
			return false;
		}
		if(frm1.name.value==""){
			alert("이름을 입력하세요.");
			frm1.name.focus();
			return false;
		}
		if(frm1.address.value==""){
			alert("주소을 입력하세요.");
			frm1.address.focus();
			return false;
		}
		if(frm1.pw1.value!=frm1.pw2.value){
			alert("비밀번호가 일치하지 않습니다.");
			frm1.pw2.select();
			return false;
		}
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<title></title>
</head>
<body>
	<div id="wrap">
		<header>
			 <a href="index.php">
          <img src="photo1/YORI.jpg" style="width: 30%; height: 145px;margin-left: 33%; margin-top: 15px;">
        </a>
		</header>
		<section>
			<form name="frm1" method="post" action="member_ok.php">
			<table class="table1">
				<tr>
					<th colspan="2" align="center" style="padding-bottom: 50px;">
						회원가입양식
					</th>
				</tr>
				<tr>
					<td align="left">아이디</td>
				</tr>
				<tr>
				<td><input type="text" name="id" style="width: 60%; height: 30px; border:1.5px solid #C8C8C8;"></td>
				</tr>

				<tr>
					<td align="left">비밀번호</td>
				</tr>
				<tr>
				<td><input type="password" name="pw1" style="height:30px; border:1.5px solid #C8C8C8;"></td>
				</tr>
				<tr>
					<td align="left">비밀번호확인</td>
				</tr>
				<tr>
					<td><input type="password" name="pw2" style="height:30px; border:1.5px solid #C8C8C8;"></td>
				</tr>
				<tr>
					<td align="left">이름</td>
				</tr>
				<tr>
					<td><input type="text" name="name" style="height:30px; border:1.5px solid #C8C8C8;"></td>
				</tr>
				<tr>
					<td align="left">출생년도</td>
				</tr>
				<tr>
					<td>
						<select name="age" style="height:30px;width:13%; border:1.5px solid #C8C8C8;">
							<?php
								for($i=2020;$i>=1920;$i--){
									echo "<option value=$i>"."$i"."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="left">성별</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="gendar" value="m">남
						<input type="radio" name="gendar" value="f" checked>여
					</td>
				</tr>
				<tr>
					<td align="left">주소</td>
				</tr>
					<tr>
					<td style="height:50px;">
						<input type="text" name="address" style="height:30px;border:1.5px solid #C8C8C8;">
						<input type="hidden" name="level" value="custom">
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br><Br>
						<input type="button" value="가입하기" onclick="send()" class="bt1">
						<input type="reset" value="새로작성" class="bt1">
						<input type="button" value="메인으로" onclick="location.href='index.php'" class="bt1">
					</td>
				</tr>
			</table>
		</form>
		</section>
		<footer>
			Copyright &#169; LDB.com All rights reserves since 2020 by web editor.
		</footer>
	</div>
</body>
</html>
