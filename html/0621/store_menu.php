<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $smallTypeNo=$_GET["smallType"];
  $bigTypeNo=$_GET["bigTypeNo"];

  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $storePic=$rowStoreInfo["pic"];
  $storeName=$rowStoreInfo["store_name"];

  $queryMenu="select * from store_menu where pno=$storeSno";
  $rsMenu=mysqli_query($conn,$queryMenu);
  $rowMenu=mysqli_fetch_array($rsMenu);
  $menuName=$rowMenu["name"];
  $menuPrice=$rowMenu["price"];
  $menuPic=$rowMenu["pic"];
  $menuMemo=$rowMenu["smemo"];
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200616</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">

  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLogin","width=400,height=150");
    }
  </script>
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
<section>
<table class="table3">
    <tr align="center">
      <td>
          <img src="images/store/<?php echo $storePic ?>" width="300" height="200">
      </td>
    </tr>
    <tr align="center">
      <td>
      <?php echo $storeName; ?>
      </td>
    </tr>
    </table>
    <div>
    <ul>
        <li><?php echo $menuName ?></li>
        <li>된장찌개</li>
        <li>순두부찌개</li>
    </ul>
    </div>
</section>

</body>
</html>
