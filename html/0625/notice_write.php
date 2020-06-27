<script>
  function send(){
    if(frm1.writer.value==""){
      alert("작성자를 입력하세요.");
      frm1.writer.focus();
      return false();
    }
    if(frm1.title.value==""){
      alert("제목을 입력하세요.");
      frm1.title.focus();
      return false();
    }
    if(frm1.content.value==""){
      alert("글내용을 입력하세요.");
      frm1.content.focus();
      return false();
    }
    document.frm1.submit();
  }
</script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>

    <title></title>
  </head>
  <body>
    <div id="wrap">
      <header>
        <div class="gnb_menu"></div>
        <div class="logo">
          <a href="index.php">
            <img src="logo/YORI.jpg">
          </a>
        </div>
        <div class="login">
          <a href="#">Login</a>&nbsp;|
          <a href="#">Join</a>&nbsp;|
          <a href="#">ID/PW Search</a>
        </div>
        <nav>
          <?php
          $conn=mysqli_connect("localhost","root","autoset","testdb");
          $query="select * from menu";
          $rs=mysqli_query($conn,$query);
          ?>
          <ul class="menu">
            <?php while($row=mysqli_fetch_array($rs)){ ?>
            <li>
              <a href="#"><?php echo $row["name"] ?></a>
              <ul class="submenu">
                <?php
                $pcode=$row["code"];
                  $query2="select * from submenu where pcode='$pcode'";
                  $rs2=mysqli_query($conn,$query2);
                  while($row2=mysqli_fetch_array($rs2)){
                    $code=$row2["code"];
                ?>
                <li><a href="store.php?code=<?php echo $code ?>"><?php echo $row2["name"] ?></a></li>
              <?php } ?>
              </ul>
            </li>
<?php } ?>
          </ul>
        </nav>
      </header>
      <?php
        include "dbconn.php";
        $query3="select * from notice order by no desc";
        $rs3=mysqli_query($conn,$query3);
      ?>
      <div id="notice">
        <form name="frm1" method="post" action="notice_write_ok.php">
        <table class="table2" style="width:600px">
          <tr>
            <th colspan="2" align="center">공지사항 추가</th>
          </tr>
          <tr>
            <td align="right">작성자:</td>
            <td><input type="text" name="writer"></td>
          </tr>
          <tr>
            <td align="right">제목:</td>
            <td><input type="text" name="title"></td>
          </tr>
          <tr>
            <td align="right">글내용:</td>
            <td><textarea name="content" rows="7" cols="70"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="button" value="작성완료" onclick="send()" class="bt2">&nbsp;
              <input type="reset" value="새로작성" class="bt2">&nbsp;
              <input type="button" value="메인으로" onclick="location.href='index.php'" class="bt2">
            </td>
          </tr>
        </table>
      </form>
      </div>
    </div>
  </body>
</html>
