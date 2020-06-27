<?php
  include "dbconn.php";
  
  $sno=$_GET["Storemenu"];
  $storeNo=$_GET["storeNo"];

  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $storeName=$rowStoreInfo["store_name"];
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
          <a href="store_mycart.php?id=<?php echo $id ?>"><img src="logo/baguni.jpg"></a>
        <?php }else{ ?>
          <a href="javascript:login()">Login</a>&nbsp;|
          <a href="member.php">Join</a>&nbsp;|
          <a href="#">ID/PW Search</a>
        <?php } ?>
        </div>
        <nav>
  <?php
    $query = "select * from menu";
    $rs = mysqli_query($conn, $query);
  ?>
    <ul class="menu">
    <?php while($row = mysqli_fetch_array($rs)) { ?>
      <li>
      <a href="store.php?code=<?php echo $row["code"]; ?>">
      <?php echo $row["name"]; ?>
      </a>
        <ul class="submenu">
          <?php
            $pcode = $row["code"];
            $query2 = "select * from submenu where pcode = '$pcode'";
            $rs2 = mysqli_query($conn, $query2);
            while($row2 = mysqli_fetch_array($rs2)) { 
              $code = $row2["code"];
            ?>
          <li>
          <a href="store.php?code=<?php echo $code; ?>">
          <?php echo $row2["name"]; ?>
          </a>
          </li>
            <?php } ?>
        </ul>
      </li>
    <?php } ?>
    </ul>
  </nav>
      </header>
      <div class="menu_detail">
        <form name="frmMenudetail" method="post" action="store_menu_detail_ok.php">

        <table class="table5" style="width:300px">
          <tr>
            <th colspan="2" align="center"><?php echo $storeName; ?></th>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <img src="<?php echo $storesubMenuImgDir.$storesubMenuPic; ?>" class="img2" style="width:150px;height:100px;">
            </td>
          </tr>
          <?php
            $queryMenudetail="select * from store_menu where sno=$sno";
            $rsMenudetail=mysqli_query($conn,$queryMenudetail);
            $rowMenudetail=mysqli_fetch_array($rsMenudetail);
           ?>
           <tr>

             <input type="hidden" name="sno" value="<?php echo $rowMenudetail["sno"]; ?>">
             <input type="hidden" name="fdname" value="<?php echo $rowMenudetail["name"] ?>">
             <input type="hidden" name="fprice" value="<?php echo $rowMenudetail["price"]; ?>">
           </tr>
          <tr>
            <td align="center" name="fdname"><?php echo $rowMenudetail["name"]; ?></td>
          </tr>
          <tr>
            <td align="center" name="fprice"><?php echo $rowMenudetail["price"] ?></td>
          </tr>
          <tr>
            <td align="center" name="smemo"><?php echo $rowMenudetail["smemo"] ?></td>
          </tr>
          <tr>
            <td align="center">주문수량:
              <select name="num">
                <?php
                  for($i=1;$i<=50;$i++){
                    echo "<option value=$i>".$i."</option>";
                  }
                ?>
              </select>
            </td>
          </tr>
          <?php if(isset($_SESSION["id"])){
          $loginID=$_SESSION["id"];
          $queryLoginMember="select * from member1 where id='$loginID'";
          $rsLoginMember=mysqli_query($conn,$queryLoginMember);
          $rowLoginMember=mysqli_fetch_array($rsLoginMember);
          $levelData=$rowLoginMember["level"];
          if($levelData == "admin") {
          ?>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" value="장바구니에 담기" class="bt1">
            </td>
          </tr>
          <?php } ?>
          <?php } ?>
        </table>
      </form>
      </div>
    </div>
  </body>
</html>