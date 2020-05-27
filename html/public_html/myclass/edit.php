<?php 
	$snum=$_GET["snum"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from myclass where snum='$snum'";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs)
?>
<script>
	function send() {
		document.frm1.submit();
		// body...
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
		<table class="table" width="500">
			<tr>
				<td colspan="2" align="center">학생 추가</td>
			</tr>
			<tr>
				<td>학번</td>
				<td><input type="text" name="snum" width="250" value="<?php echo $row["snum"]?>"readonly>수정불가</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="sname" width="250" value="<?php echo $row["sname"]?>"></td>
			</tr>
			<tr>
				<td>국어</td>
				<td><input type="text" name="kor" width="250" value="<?php echo $row["kor"]?>"></td>
			</tr>
			<tr>
				<td>영어</td>
				<td><input type="text" name="eng" width="250" value="<?php echo $row["eng"]?>"></td>
			</tr>
			<tr>
				<td>수학</td>
				<td><input type="text" name="math" width="250" value="<?php echo $row["math"]?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="button" value="수정 완료" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>