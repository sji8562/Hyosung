<?php
	//db서버에 접속하는 문법
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from student";
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
			<td>번호	</td>
			<td>이름	</td>
			<td>성별</td>
			<td>나이	</td>
			<td>주소	</td>
			<td>이메일</td>
			<td>최종학력</td>
			<td>전공	</td>
			<td>홈페이지주소</td>
		</tr>
		<?php
		while($row=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td><?php echo $row["hp"] ?></td>
			<td>
				<a href="content.php?hp=<?php echo $row["hp"]?>">
				<?php echo $row["name"] ?></a></td>
			<td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["age"] ?></td>
			<td><?php echo $row["address"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["grade"] ?></td>
			<td><?php echo $row["major"] ?></td>
			<td><?php echo $row["homepage"] ?></td>
			
		</tr>
		
	<?php } ?>
		<tr>
			<td colspan="9" align="center">
			<input type="button" class="bt" value="학생 추가" onclick="location.href = 'write.php'">
			
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