<!DOCTYPE html>
<?php
	session_start();
?>
<script>
	function login(){
		window.open("login.php","login","width=400,height=150");
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="topmenu">
		<?php if(isset($_SESSION["id"])){ ?>
			<a href="logout.php">Logout</a>&nbsp;l&nbsp;
			<a href="join_edit.php">Member Edit</a>&nbsp;l&nbsp;
			<a href="#">Member Out</a>
		<?php }else{ ?>	
			<a href="javascript:login()">Login</a>&nbsp;l&nbsp;
			<a href="join.php">Sign Up</a>&nbsp;l&nbsp;
			<a href="#">Search ID/PW</a>
		<?php } ?>
		</div>
	</header>
	<section>
		<?php if(isset($_SESSION["id"])){ ?>
		<input type="button" class="bt" value="추가하기" onclick="">
		<?php } ?>
	</section>
</body>
</html>