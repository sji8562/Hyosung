<?php
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from company";
	$rs=mysqli_query($conn,$query);
	$cnt=mysqli_num_rows($rs)
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
			<td colspan="14" align="center">사원관리프로그램</td>
		</tr>
		<tr>
			<td>사원번호</td>
			<td>이름</td>
			<td>부서명</td>
			<td>직급</td>
			<td>전화번호</td>
			<td>주소</td>
			<td>이메일</td>
			<td>혼인여부</td>
			<td>성별</td>
			<td>연봉</td>
			<td>생년월일</td>
			<td>경력여부</td>
			<td>최종학력</td>
			<td>전공</td>
		</tr>
		<?php
			while ($row=mysqli_fetch_array($rs)){
			?>
		<tr>
			<td><?php echo $row["pnum"] ?></td>
			<td><?php echo $row["name"] ?></td>
			<td><?php echo $row["department"] ?></td>
			<td><?php echo $row["rank"] ?></td>
			<td><?php echo $row["tel"] ?></td>
			<td><?php echo $row["addr"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["married"] ?></td>
			<td><?php echo $row["gender"] ?></td>
			<td><?php echo $row["salary"] ?></td>
			<td><?php echo $row["birthdate"] ?></td>
			<td><?php echo $row["career"] ?></td>
			<td><?php echo $row["grade"] ?></td>
			<td><?php echo $row["major"] ?></td>
		</tr>
	<?php } ?>
	<tr>
		<td colspan="14" align="center">
			<input type="button" class="bt" value="사원 추가" onclick="location.href='write.php'">
		</td>
	</tr>
	<tr>
			<td colspan="14" align="right">
				<font color="red"><b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다
			</td>
		</tr>
	</table>
</body>
</html>