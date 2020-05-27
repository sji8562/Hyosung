<!DOCTYPE html>
<script>
	function send() {
		document.fn1.submit();
		// body...
	}
</script>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form name="fn1" method="post" action="write_ok.php">
		<table border="1" align="center">
			<tr>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>
					<textarea name="content"></textarea>
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" value="글쓰기" onclick="send()">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>