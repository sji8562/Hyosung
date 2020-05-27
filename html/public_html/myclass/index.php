<?php 
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from myclass";
	$rs=mysqli_query($conn,$query);
	$cnt=mysqli_num_rows($rs);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<table class="table">
		<tr>
			<td colspan="8" align="center">학생 정보</td>
		</tr>
		<tr>
			<td>학번</td>
			<td>이름</td>
			<td>국어</td>
			<td>영어</td>
			<td>수학</td>
			<td>총점</td>
			<td>평균</td>
			<td>비고</td>
		</tr>
		<?php
			while($row=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td>
				<a href="content.php?snum=<?php echo $row["snum"]?>">
					<?php echo $row["snum"] ?></a></td>
			<td><?php echo $row["sname"] ?></td>
			<td><?php echo $row["kor"] ?></td>
			<td><?php echo $row["eng"] ?></td>
			<td><?php echo $row["math"] ?></td>
			<td><?php echo $row["total"] ?></td>
			<td><?php echo $row["aver"] ?></td>
			<td><?php echo $row["bigo"] ?></td>
		</tr>
	<?php } ?>
		<tr>
			<td colspan="8" align="center">
				<input type="button" class="bt" value="학생 추가" onclick="location.href='write.php'">
			</td>
		</tr>
		<tr>
			<td colspan="9" align="right">
				<font color="red"><b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다
			</td>
		</tr>
	</table>
</body>
</html>