<!DOCTYPE html>
<script>
	// send가 눌러졌을때 submit 실행
	function send() {
		document.frm1.submit();
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<!-- 폼 선언 및 write.php로 보내기-->
	<form name="frm1" method="post" action="write_ok.php">
		<!-- 보드 1개 크기 500 중간에 위치 -->
		<table border="1" width="500" align="center">
			<tr>
				<td>
					글제목
				</td>
				<td>
					<!-- text 필드를 생성하고 변수이름을 title로 -->
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>글내용</td>
				<td>
					<!-- textarea 필드를 생성하고 변수이름을 content -->
					<textarea name = "content" rows="5" cols="55"></textarea>
				</td>
			</tr>
			<tr>
				<!-- 버튼생성하고 클릭시 send 실행 -->
				<td colspan="2" align="center">
					<input type="button" value="작성완료" onclick="send()">
				</td>
			</tr>

		</table>
	</form>

</body>
</html>