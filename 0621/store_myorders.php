<?php
  include "dbconn.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
    <script>
      function login(){
        window.open("login.php","frmLogin","width=400,height=150");
      }
    </script>
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
          <?php if(isset($_SESSION["id"])){ ?>
          <a href="logout.php">Logout</a>&nbsp;|
          <a href="member_edit.php">Edit</a>&nbsp;|
          <a href="withdrawal.php">Withdrawal</a>
        <?php }else{ ?>
          <a href="javascript:login()">Login</a>&nbsp;|
          <a href="member.php">Join</a>&nbsp;|
          <a href="#">ID/PW Search</a>
        <?php } ?>
        </div>
        <nav>
          <?php
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
      <div class="menu_detail">
        <table class="table1" style="width:500px">
          <tr>
            <th colspan="2" align="center">주문하기</th>
          </tr>
          <tr>
            <td>주소:</td>
            <td><input type="text" name="addr" size="40"></td>
          </tr>
          <tr>
            <td>전화번호:</td>
            <td><input type="text" name="hp" size="20"></td>
          </tr>
          <tr>
            <td>요청사항:</td>
            <td><textarea name="memo" cols="50" rows="5"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" value="주문완료" class="bt1" onclick="location.href='index.php'">
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
