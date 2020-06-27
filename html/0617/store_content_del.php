<?php
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $smallTypeNo=$_GET["smallType"];
  $bigTypeNo=$_GET["bigTypeNo"];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20200618</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function login(){
      window.open("login.php","frmLOGIN","width=300,height=150");
    }
    function send() {
         if (frmStoreContentDel.foodtitle.value == "") {
            alert("메뉴명을 입력하세요");
            frmStoreContentInsert.writer.focus();
            return false;
         }
         document.frmStoreContentDel.submit();
      }
  </script>
</head>
<body>
  <div id="wrap">
  <header>
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
    <div class="gnb_menu"></div>
    <div class="logo">
      <a href="index.php">
      <img src="logo/LOGO.jpg">
      </a>
    </div>
    <nav>
    <?php
      $query="select * from menu";
      $rs=mysqli_query($conn, $query);
    ?>
      <ul class="menu">
      <?php
      while($row=mysqli_fetch_array($rs)) {
      ?>
        <li>
          <a href="store.php?code=<?php echo $row["code"]; ?>">
            <?php echo $row["name"]; ?>
          </a>
          <ul class="submenu">
          <?php
            $pcode=$row["code"];
            $query2="select * from submenu where pcode = '$pcode'";
            $rs2=mysqli_query($conn,$query2);
            while($row2=mysqli_fetch_array($rs2)) {
              $code=$row2["code"];
          ?>
            <li>
              <a href="store.php?code=<?php echo $code; ?>">
                <?php echo $row2["name"]; ?>
              </a>
            </li>
            <?php
            }
            ?>
          </ul>
        </li>
      <?php
      }
      ?>
    </nav>
  </header>
  <section>
  <form enctype="multipart/form-data" name="frmStoreContentDel" action="store_content_del_ok.php" method="post">
  <table>
    <?php
      $queryStore="select store_name from store where no=$storeNo";
      $rsStore=mysqli_query($conn,$queryStore);
      $rowStore=mysqli_fetch_array($rsStore);
     ?>
  <tr>
    <th><?php echo $rowStore["store_name"] ?></th>
  </tr>
  <tr>
    <td>메뉴명</td>
    <td>가격</td>
    <td>내용</td>
    <td>이미지파일</td>
  </tr>
  <?php
  $query3="select * from store_menu where pno=$storeNo ";
  $rs3=mysqli_query($conn,$query3);
  while($row3=mysqli_fetch_array($rs3)){
  $no=$row3["sno"];
  $pic=$row3["pic"];
  ?>
  <tr>
    <td><img src="images/<?php echo $bigTypeNo."/".$smallTypeNo."/".$storeNo."/".$pic;?>"></td>
    <td><?php echo $row3["name"];?></td>
    <td><?php echo $row3["price"];?></td>
    <td><?php echo $row3["smemo"];?></td>
    <td><input type="button" value="삭제" onclick="location.href='store_content_del_ok.php?sno=<?php echo $no; ?>&storeNo=<?php echo $storeNo; ?>&smallTypeNo=<?php echo $smallTypeNo; ?>&bigTypeNo=<?php echo $bigTypeNo; ?>&pic=<?php echo $pic; ?>'"></td>
  </tr>
  <?php
  }
  ?>
  </table>
  </form>
  </section>
  </div>
</body>
</html>
