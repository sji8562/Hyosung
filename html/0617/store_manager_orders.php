<?php
  include "dbconn.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
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
          <a href="#"><img src="logo/baguni.jpg"></a>
        <?php }else{ ?>
          <a href="javascript:login()">Login</a>&nbsp;|
          <a href="member.php">Join</a>&nbsp;|
          <a href="#">ID/PW Search</a>
          <a href="#"><img src="logo/baguni.jpg"></a>
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
      <section>
        <table class="">
          <tr>
            <th colspan="2" align="center">주문내역</th>
          </tr>
          <?php
            $id=$_SESSION["id"];
            $queryid="select * from cart where id=$id";
            $rsid=mysqli_query($conn,$queryid);
            while ($rowid=mysqli_fetch_array($rsid)) {
              $total+=$rowid["tprice"];

           ?>
          <tr>
            <td>ID:</td>
            <td><?php echo $rowid["id"] ?></td>
          </tr>
          <tr>
            <td>가게이름:</td>
            <td>한식극장</td>
          </tr>
          <tr>
            <td>메뉴:</td>
            <td><?php echo $rowid["cfmenu"] ?></td>
          </tr>
          <tr>
            <td>수량:</td>
            <td><?php echo $rowid["ea"] ?></td>
          </tr>
          <tr>
            <td>총금액:</td>
            <td><?php echo $total ?></td>
          </tr>
          <tr>
            <td>주소:</td>
            <td>부산광역시 부산진구</td>
          </tr>
          <tr>
            <td>전화번호:</td>
            <td>010-1234-5678</td>
          </tr>
          <tr>
            <td>요청사항:</td>
            <td>문앞에 그냥 놔두고 가세요.</td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="2" align="center">
              <input type="button" value="주문확인" onclick="" class="bt1">
            </td>
          </tr>
        </table>
      </section>
      <footer>
        Copyright &#169; LDB.com All rights reserves since 2020 by web editor.
      </footer>
    </div>
   </body>
</html>
