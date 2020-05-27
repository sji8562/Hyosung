<?php
  	include "dbconn.php";
    $name=$_POST["name1"];
    $email=$_POST["email1"];
$query="select * from member where name='$name' and email='$email'";
$rs=mysqli_query($conn,$query);
if (!mysqli_num_rows($rs)) {
?>
<script>
alert("이름 혹은 이메일이 올바르지 않습니다.");
history.back();
</script>
<?php }else{
  $row=mysqli_fetch_array($rs);
  $id="아이디는 ".$row["id"]."입니다.";
   ?>
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
	<br><br><br>
  <div style="width:300; height:150px; border-top:3px solid #4298cc;border-bottom:3px solid #4298cc;background-color:#dde7dd;padding:30px;font-size:0.9em; color:#666;">
    <?php echo $id ?>
    <a href="idpw.php">비밀번호 찾기</a>
</div>
	<br><br><br>
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
<?php } ?>
