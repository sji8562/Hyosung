<?php
  include "dbconn.php";

  $storeNo=$_GET["storeNo"];
  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $smallType=$rowStoreInfo["pcode"];

  $querySmallType="select * from submenu where code='$smallType'";
  $rsSmallType=mysqli_query($conn,$querySmallType);
  $rowSmallType=mysqli_fetch_array($rsSmallType);
  $smallTypeName=$rowSmallType["name"];
  $bigTypeNo=$rowSmallType["pcode"];

  $queryBigType="select * from menu where code='$bigTypeNo'";
  $rsBigType=mysqli_query($conn,$queryBigType);
  $rowBigType=mysqli_fetch_array($rsBigType);
  $bigTypeName=$rowBigType["name"];

  $storeName=$rowStoreInfo["store_name"];
  $storeManager=$rowStoreInfo["manager"];
  $storeTel=$rowStoreInfo["tel"];
  $storePic=$rowStoreInfo["pic"];
  $storeAddr=$rowStoreInfo["address"];
  $storeMemo=$rowStoreInfo["memo"];

  $queryMenu="select * from store_menu where sno = '$storeSno'";
  $rsMenu=mysqli_query($conn,$queryMenu);
  $rowMenu=mysqli_fetch_array($reMenu);
  $menuName=$rowMenu["name"];
  $menuPrice=$rowMenu["price"];
  $menuPic=$rowMenu["pic"];
  $menuSmemo=$rowMenu["smemo"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>0618</title>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <script>
    function winOpen(){
      window.open("login.php","frmLogin","width=400,height=200");
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
          <a href="javascript:winOpen()">Login</a>&nbsp;|
          <a href="member.php">Join</a>&nbsp;|
          <a href="#">ID/PW Search</a>
        <?php } ?>
  </div>
  </header>
  <nav>
  <?php
    $query="select * from menu";
    $rs=mysqli_query($conn,$query);
  ?>
  <ul class="menu">
    <?php
      while($row=mysqli_fetch_array($rs)) {
    ?>
  <li>
      <a href="store.php?code=<?php echo $row["code"]; ?>">
      <?php echo $row["name"]; ?>
      <ul class="submenu">
      <?php
        $pcode=$row["code"];
        $query2="select * from submenu where pcode='$pcode'";
        $rs2=mysqli_query($conn,$query2);
        while($row2=mysqli_fetch_array($rs2)){
          $code=$row["code"];
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
  <table class="table1">
    <tr align="center">
      <td>
          <img src="images/store/<?php echo $storePic ?>" width="300" height="200">
      </td>
    </tr>
    <tr align="center">
      <td><a href="store_menu.php?storeNo=<?php echo $storeNo ?>">
      <?php echo $storeName; ?></a></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeAddr; ?></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeTel; ?></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeMemo; ?></td>
    </tr>
    <tr>
      <td colspan="4" align="center">
      <input class="bt1" type="button" value="메뉴추가" onclick="location.href='store_content_insert.php?storeNo=<?php echo $storeNo ?> &bigTypeNo=<?php echo $bigTypeNo ?> &smallType<?php echo $smallType ?>'">&ensp;
      <input class="bt1" type="button" value="메뉴삭제" onclick="location.href='delete.php?code=<?php echo $gcode ?>&no=<?php echo $no ?>'">
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
  <?php
        if(isset($_GET["page"])){
          $page=$_GET["page"];
          $group=ceil($page/5);
        }else{
          $page=1;
          $group=1;
        }
        $startRow=($page-1)*10;
        $queryNotice="select * from notice order by nno desc limit $startRow,10";
        $rsNotice=mysqli_query($conn,$queryNotice);
        $rowNotice=mysqli_fetch_array($rsNotice);
      ?>
      <div id="notice">
        <table class="table2" style="width:600px">
          <tr>
            <th colspan="5" align="center">공지사항</th>
          </tr>
          <tr>
            <td align="center" width="10%">번호</td>
            <td align="center" width="50%">제목</td>
            <td align="center" width="10%">작성자</td>
            <td align="center" width="20%">작성일</td>
            <td align="center" width="10%">조회수</td>
          </tr>
          <?php while($rowNotice=mysqli_fetch_array($rsNotice)){ ?>
          <tr>
            <td align="center"><?php echo $rowNotice["nno"] ?></td>
            <td align="left"><?php echo $rowNotice["title"] ?></td>
            <td align="center"><?php echo $rowNotice["writer"] ?></td>
            <td align="center"><?php echo $rowNotice["writeday"] ?></td>
            <td align="center"><?php echo $rowNotice["hit"] ?></td>
          </tr>
        <?php } ?>
        <?php if(isset($_SESSION["id"])){
          $loginID=$_SESSION["id"];
          $queryLoginMember="select * from member1 where id='$loginID'";
          $rsLoginMember=mysqli_query($conn,$queryLoginMember);
          $rowLoginMember=mysqli_fetch_array($rsLoginMember);
          $levelData=$rowLoginMember["level"];
          if($levelData == "manager") { 
          ?>
          <tr>
            <td colspan="5" align="center">
              <input type="button" value="공지사항추가" onclick="location.href='notice_write.php'" class="bt1">
            </td>
          </tr>
        <?php } ?>
          <?php } ?>
        </table>
      </div>
  </section>
  </div>
  <footer></footer>
</body>
</html>