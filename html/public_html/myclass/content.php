<?php 
	$snum=$_GET["snum"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from myclass where snum='$snum'";;
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
?>
<script>
	function del() {
		if(confirm("정말로 삭제하시겠습니까?")){
			location.href="delete.php?snum=<?php echo $snum?>";
		}
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
	<form name="frm1" method="post" action="write_ok.php">
		<table class="table" width="500">
			<tr>
				<td colspan="2" align="center">학생 세부정보</td>
			</tr>
			<tr>
				<td>학번</td>
				<td><?php echo $row["snum"]?></td>
			</tr>
			<tr>
				<td>이름</td>
				<td><?php echo $row["sname"]?></td>
			</tr>
			<tr>
				<td>국어</td>
				<td><?php echo $row["kor"]?></td>
			</tr>
			<tr>
				<td>영어</td>
				<td><?php echo $row["eng"]?></td>
			</tr>
			<tr>
				<td>수학</td>
				<td><?php echo $row["math"]?></td>
			</tr>
			<tr>
				<td>총점</td>
				<td><?php echo $row["total"]?></td>
			</tr>
			<tr>
				<td>평균</td>
				<td><?php echo $row["aver"]?></td>
			</tr>
			<tr>
				<td>비고</td>
				<td><?php echo $row["bigo"]?></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="button" value="수정" class="bt" onclick="location.href='edit.php?snum=<?php echo $snum?>'">
					<input type="button" value="삭제" class="bt" onclick="del()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>