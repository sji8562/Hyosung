<?php 
	$hp=$_GET["hp"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from student where hp='$hp'";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<script>
	function send() {
		//무결성체크
		//무결성 체크 후 포스트 방식으로 edit_ok.php이동
		document.frm1.submit();
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="edit_ok.php">
	<br><br>
	<table class="table" width="500">
		<tr>
			<td colspan="2" align="center">
				학생수정폼
			</td>
		</tr>
		<tr>
			<td>번호</td>
			<td><input type="text" name="hp" size="25" value="<?php echo $row["hp"]?>"readonly>[수정불가]</td>
		</tr>
		<tr>
			<td>이름</td>
			<td><input type="text" name="name" size="25" value="<?php echo $row["name"]?>"></td>
		</tr>
		<tr>
			<td>성별</td>
			<td><select name="gender">
				<option value="m"<?php if($row["gender"] =="m"){?>selected<?php }?>>남성</option>
				<option value="f"<?php if($row["gender"] =="f"){?>selected<?php }?>>여성</option>
			</select></td>
		</tr>
		<tr>
			<td>나이</td>
			<td><input type="text" name="age" size="25" value="<?php echo $row["age"]?>"></td>
		</tr>
		<tr>
			<td>주소</td>
			<td><input type="text" name="address" size="55" value="<?php echo $row["address"]?>"></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td><input type="text" name="email" size="30" value="<?php echo $row["email"]?>"></td>
		</tr>
		<tr>
			<td>최종학력</td>
			<td>
				<select name="grade">
					<option vlaue="대학원졸" <?php if($row["grade"] =="대학원졸"){?>selected<?php }?>>대학원졸</option>
					<option vlaue="대졸" <?php if($row["grade"] =="대졸"){?>selected<?php }?>>대졸</option>
					<option vlaue="초대졸" <?php if($row["grade"] =="초대졸"){?>selected<?php }?>>초대졸</option>
					<option vlaue="고졸" <?php if($row["grade"] =="고졸"){?>selected<?php }?>>고졸</option>
					<option vlaue="중졸" <?php if($row["grade"] =="중졸"){?>selected<?php }?>>중졸</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>전공</td>
			<td><input type="text" name="major" size="30" value="<?php echo $row["major"]?>"></td>
		</tr>
		<tr>
			<td>홈페이지 주소</td>
			<td><input type="text" name="homepage" size="30" value="<?php echo $row["homepage"]?>"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="수정완료" class="bt" onclick="send()">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>