<!-- 1.1 미련없이 데이터를 다 가져오기...//
1.2 하단에 페이지를 찍어주자....//
1.3 하단의 페이지를 눌렀을때 해당페이지의 10건만 데이터를 출력//
1.4 10페이지 단위로 그룹화를 시켜준다.//
1.5 다음 5개 페이지로 이동시켜준다.
1.6 이전 5개 페이지로 이동시켜준다.()//
1.7 페이지카운트를 넘어가는 페이지제어 및 현재페이지 활성화//
1.8 맨마지막페이지로 이동하기(first)
1.9 맨처음페이지로 이동하기(last) //-->

<?php
	// code...
	if (isset($_GET["page"])) {
		$page=$_GET["page"];
		$group=ceil($page/10);
	}else {
		$page=1;
		$group=1;
	}

	$startRow=($page-1)*10;
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from inc order by no desc limit $startRow,10";
	$rs=mysqli_query($conn,$query);
 ?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br><br>
	<table class="table1" width="600">
		<tr>
			<th>글번호</th>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<?php while($row=mysqli_fetch_array($rs)){ ?>
		<tr align="center">
			<td><?php echo $row["no"] ?></td>
			<td><?php echo $row["title"] ?></td>
			<td><?php echo $row["writer"] ?></td>
			<td><?php echo $row["writeday"] ?></td>
			<td><?php echo $row["hit"] ?></td>
		</tr>
	<?php } ?>
	<?php
		$query2= "select count(*) as cnt from inc";
		$rs2=mysqli_query($conn,$query2);
		$row2=mysqli_fetch_array($rs2);
		$pageCount=ceil($row2["cnt"]/10);
		$groupCount=ceil($pageCount/10)
	 ?>
	<tr>
		<td colspan="5" align="center">

			<?php
			if($group!=1){
				$prevPage = ($group-2)*10+1;
				echo "<a href='inc.php?page=1'>First</a>";
				echo "&nbsp; &nbsp;";
				echo "<a href='inc.php?page=$prevPage'>Prev</a>";
				echo "&nbsp; &nbsp;";
			}
				$startPage=($group-1)*10+1;
				$endPage=$startPage+9;
				for ($i=$startPage; $i <=$endPage ; $i++) {
					if($i>$pageCount){break;}
					if($i==$page){
					echo "<a href='inc.php?page=$i'><font color='red'><b>[$i]</b></font></a>";

				}else {
					echo "<a href='inc.php?page=$i'>[$i]</a>";
				}
					}
					if($group<$groupCount){
						$nextPage = $group*10+1;
						$lastPage = $pageCount;
						echo "&nbsp; &nbsp;";
						echo "<a href='inc.php?page=$nextPage'>Next</a>";
						echo "&nbsp; &nbsp;";
						echo "<a href='inc.php?page=$lastPage'>Last</a>";
					}

					 ?>


		</td>
	</tr>
		<tr>
			<td colspan="5" align="center">
			<input type="button" class="bt1" value="공지사항추가" onclick="location.href='inc_write.php'">
		</td>
		</tr>
	</table>
</body>
</html>
