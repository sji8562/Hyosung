<?php 
	$hp=$_GET["hp"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from student where hp='$hp'";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<script>
	function del(){
			if(confirm("정말로 삭제하시겠습니까?")){
				location.href="delete.php?hp=<?php echo $hp ?>";
			}
		}	
		//무결성체크
		//무결성 체크 후 포스트 방식으로 write_ok.php이동

</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
	<br><br>
	<table class="table" width="500">
		<tr>
			<td colspan="2" align="center">
				학생수정폼
			</td>
		</tr>
		<tr>
			<td>번호</td>
			<td><?php echo $row["hp"] ?></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><?php echo $row["name"] ?></td>
		</tr>
		<tr>
			<td>성별</td>
			<td><?php echo $row["gender"] ?></td>
		</tr>
		<tr>
			<td>나이</td>
			<td><?php echo $row["age"] ?></td>
		</tr>
		<tr>
			<td>주소</td>
			<td><?php echo $row["address"] ?></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td><?php echo $row["email"] ?></td>
		</tr>
		<tr>
			<td>최종학력</td>
			<td>
				<?php echo $row["grade"] ?>
			</td>
		</tr>
		<tr>
			<td>전공</td>
			<td><?php echo $row["major"] ?></td>
		</tr>
		<tr>
			<td>홈페이지 주소</td>
			
			<td><?php echo $row["homepage"] ?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="수정" class="bt" onclick="location.href='edit.php?hp=<?php echo $hp?>'">
				<input type="button" value="삭제" class="bt" onclick="del()">
			</td>
		</tr>

	</table>
	</form>
</body>
</html>