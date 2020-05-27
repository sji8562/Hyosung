<?php
	include "dbconn.php"
	//아이디,패스워드,이름,전화번호,이메일,성별,취미,남기는말//
	$id=$_POST["id"];
	$pw=$_POST["pw1"];
	$name=$_POST["name"];
	$hp=$_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
	$email=$_POST["email1"]."@".$_POST["email2"];
	$gendar=$_POST["gendar"];

	if(isset($_POST["hobby1"])){
		$hobby1=$_POST["hobby1"];
	}else{
		$hobby1="";
	}
	if(isset($_POST["hobby2"])){
		$hobby2=$_POST["hobby2"];
	}else{
		$hobby2="";
	}
	if(isset($_POST["hobby3"])){
		$hobby3=$_POST["hobby3"];
	}else{
		$hobby3="";
	}
	if(isset($_POST["hobby4"])){
		$hobby4=$_POST["hobby4"];
	}else{
		$hobby4="";
	}
	if(isset($_POST["hobby5"])){
		$hobby5=$_POST["hobby5"];
	}else{
		$hobby5="";
	}
	$comment=$_POST["comment"];
	$query="update"
	mysqli_query($conn,$query);
?>
<script>
	alert("회원정보수정이 완료되었습니다."+"\n"+"메인페이지로 이동합니다.");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
