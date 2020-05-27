<!DOCTYPE html>
<script>
  function send() {
    document.frm1.submit();
  }
</script>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form name="frm1" action="login_ok.php" method="post">
      <br>
      <table class="table1">
        <tr>
          <td>아이디:</td>
          <td>
            <input type="text" name="id">
          </td>
        </tr>
        <tr>
          <td>비밀번호:</td>
          <td>
            <input type="password" name="pw">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" class="bt" value="Login" onclick="send()">
          </td>
        </tr>
      </table>
    </form>
</body>
</html>
