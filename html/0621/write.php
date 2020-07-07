<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script>
      function send(){
        document.frm1.submit();
      }
    </script>
  </head>
  <body>
    <div class="logo">
      <a href="index.php"><img src="images/100.jpg"></a>
    </div>
    <br><br>
    <form enctype="multipart/form-data" name="frm1" method="post" action="write_ok.php">
    <table class="table1" width="800">
      <tr>
        <th colspan="2" align="center">
          글쓰기
        </th>
      </tr>
      <tr>
        <td>이름</td>
        <td><input type="text" name="dog_name"></td>
      </tr>
      <tr>
        <td>나이</td>
        <td><input type="text" name="bMonth"></td>
      </tr>
      <tr>
        <td>분양가</td>
        <td><input type="text" name="price"></td>
      </tr>
      <tr>
        <td>사진</td>
        <td><input type="file" name="pic"></td>
      </tr>
      <tr>
        <td>성별</td>
        <td>
          <input type="radio" name="gendar" value="수컷">수컷
          <input type="radio" name="gendar" value="암컷">암컷
        </td>
      </tr>
      <tr>
        <td>특징</td>
        <td>
          <textarea name="memo" cols="50" rows="7"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="button" class="bt1" value="작성완료" onclick="send()">
          &nbsp;&nbsp;
          <input type="button" class="bt1" value="새로작성" onclick="location.href='index.php'">
        </td>
      </tr>
    </table>
  </form>
  </body>
</html>
