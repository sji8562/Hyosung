<script>
	function send(){
		if(frm1.id.value==""){
			alert("아이디를 입력하세요");
			frm1.id.focus();
			return false;
		}
		if(frm1.id.value != frm1.hid.value){
			alert("아이디 중복체크를 해주세요");
			return false;
		}
		if(frm1.pw1.value ==""){
			alert("비밀번호를 입력해주세요");
			frm1.pw1.focus();
			return false;
		}
		if(frm1.pw2.value==""){
			alert("비밀번호 확인을 입력하세요");
			frm1.pw2.focus();
			return false;
		}
		if(frm1.pw1.value != frm1.pw2.value){
			alert("비밀번호가 일치하지 않습니다.");
			frm1.pw1.focus();
			return false;
		}
		if(frm1.pw1.value != frm1.pw2.value){
			alert("비밀번호 불일치!");
			frm1.pw2.select();
			return false;
		}
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.hp1.value==""){
			alert("연락처1 입력하세요");
			frm1.hp1.focus();
			return false;
		}
		if(frm1.hp2.value==""){
			alert("연락처2 입력하세요");
			frm1.hp2.focus();
			return false;
		}
		if(frm1.hp3.value==""){
			alert("연락처3 입력하세요");
			frm1.hp3.focus();
			return false;
		}
		if(frm1.email1.value==""){
			alert("이메일 입력하세요");
			frm1.eamil1.focus();
			return false;
		}
	document.frm1.submit();
	}
	function idcheck(){
		if(frm1.id.value==""){
			alert("아이디를 입력하세요");
			frm1.id.focus();
			return false;
		}
		window.open("idcheck.php?id="+frm1.id.value,"frmidcheck","width=400,height=150");
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title>국내 유일의 50년전통 여행사</title>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
<header>
		<div class="admin">
			<?php if(isset($_SESSION["id"])){?>
			<a href="logout.php">로그아웃</a>
			&nbsp;l&nbsp;
			<a href="member_edit.php">회원수정</a>
			&nbsp;l&nbsp;
			<a href="withdrawl.php">회원탈퇴</a>
			<?php }else{?>
		<a href="javascript:login()">로그인</a>
		&nbsp;l&nbsp;
		<a href="member.php">회원가입</a>
		&nbsp;l&nbsp;
		<a href="idpw.php">ID/PW찾기</a>
		<?php }?>
	</div>
	<div class="logo">
		<a href="index.php">
		<img src="logo/logo.png">
		</a>
	</div>
</header>
<nav>
	<ul class="menu">
		<li><a href="intro.php">여행가이드 소개</a></li>
		<li><a href="#">국내여행지</a>
			<ul class="submenu">
			<li><a href="kk.php">경기/강원도</a></li>
			<li><a href="ks.php">경상도</a></li>
			<li><a href="cc.php">충청도</a></li>
			<li><a href="jr.php">전라도</a></li>
			<li><a href="jj.php">제주도</a></li>
			</ul>
		</li>
		<li><a href="#">해외여행지</a>
			<ul class="submenu">
			<li><a href="asia.php">동남아시아</a></li>
			<li><a href="europe.php">유럽</a></li>
			<li><a href="pacific.php">남태평양</a></li>
			<li><a href="oceania.php">오세아니아</a></li>
			<li><a href="america.php">북중미</a></li>
			</ul>
		</li>
	</ul>
</nav>
<div id="wrap">
	<form name="frm1" method="post" action="member_ok.php">
	<br><br>
	<table class="table1" width="600px">
		<tr>
			<td colspan="2" align="center">
				회원가입 양식
			</td>
		</tr>
		<tr>
			<td align="right">아이디</td>
			<td>
				<input type="text" name="id" align="right">&nbsp;
				<input type="hidden" name="hid">
				<input type="button" value="중복확인" class="bt" onclick="idcheck()">
			</td>
		</tr>
		<tr>
			<td align="right">비밀번호</td>
			<td>
				<input type="password" name="pw1"><font color="red">
				(6자리이상 입력!)</font>
			</td>
		</tr>
		<tr>
			<td align="right">비밀번호 확인</td>
			<td><input type="password" name="pw2">
			</td>
		</tr>
		<tr>
			<td align="right">이름</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td align="right">연락처</td>
			<td>
				<input type="text" name="hp1" size="5" maxlength="3">-
				<input type="text" name="hp2" size="5"maxlength="4">-
				<input type="text" name="hp3" size="5" maxlength="4">
			</td>
		</tr>
		<tr>
			<td align="right">이메일</td>
			<td>
				<input type="text" name="email1" size="15">@
				<select name="email2">
					<option value="naver.com">naver.com</option>
					<option value="daum.net">daum.net</option>
					<option value="gmail.com">gmail.com</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right">성별</td>
			<td>
				<input type="radio" name="gender" value="m" checked>남성
				<input type="radio" name="gender" value="f">여성
			</td>
		</tr>
		<tr>
			<td align="right">취미</td>
			<td>
				<input type="checkbox" name="hobby1" value="여행">여행
				<input type="checkbox" name="hobby2" value="등산">등산
				<input type="checkbox" name="hobby3" value="낚시">낚시
				<input type="checkbox" name="hobby4" value="영화">영화
				<input type="checkbox" name="hobby5" value="음악">음악
			</td>
		</tr>
		<tr>
			<td aligin="right">남기는 말</td>
			<td>
				<textarea name="comment" rows="5" cols="55"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="가입완료" class="bt" onclick="send()">&nbsp;
				<input type="reset" value="새로작성" class="bt" >
			</td>
		</tr>
	</table>
</form>
</div><!--wrap요소의 마지막-->
<footer>
	<div style="width:1000px">
		<div class="foot_left">
		<a href="email.php">이메일 무단수집거부</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="policy.php">개인정보 처리방침</a>
		</div>
		<div class="foot_right">
		<p style="margin-top:10px;margin-left:70px;line-height:25px;">
		상호명:여행을 사랑하는 사람들(주)<br>
		대표자:홍길동<br>
		개인정보책임자:유관순<br>
		상담전화:1588-9000<br>
		주소:부산광역시 해운대구 우동 정릉빌딩 503호
		</p>
		</div>
	</div>
</footer>
</body>
</html>
