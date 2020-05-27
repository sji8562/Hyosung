<script>
  function send()
  {
    document.frm1.submit();
  }
</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <form name="frm1" action="login_ok.php" method="post">
      <table class="table">
        <tr>
          <td align="right">아이디:</td>
          <td>
            <input type="text" name="ID">
          </td>
        </tr>
        <tr>
          <td align="right">암호:</td>
          <td>
            <input type="password" name="PW">
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="로그인" class="bt" onclick="send()">
            <input type="reset" value="새로작성" class="bt">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
