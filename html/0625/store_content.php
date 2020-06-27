<?php
  include "dbconn.php";

  $id=$_SESSION["id"];
  $storeNo=$_GET["storeNo"];
  $queryStoreInfo="select * from store where no=$storeNo";
  $rsStoreInfo=mysqli_query($conn,$queryStoreInfo);
  $rowStoreInfo=mysqli_fetch_array($rsStoreInfo);
  $storeInfopic=$rowStoreInfo["pic"];
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

<script>
  function send(){
    document.frm1.submit;
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>0618</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Jua&family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
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
<section>
<table class="table9">
    <tr>
      <td rowspan="5" align="center">
      <img src="images/store/<?php echo $rowStoreInfo["pic"] ?>" class="img1">
      </td>
    </tr>
    <tr>
    <td colspan="2"><?php echo $storeName; ?></td>
    </tr>
    <tr>
      <td>주소</td>
      <td><?php echo $storeAddr; ?></td>
    </tr>
    <tr>
      <td>전화번호</td>
      <td><?php echo $storeTel; ?></td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $storeMemo; ?></td>
    </tr>
    </table>

    <table class="table5">
    <tr>
      <th colspan="4" align="center">
        메뉴리스트
      </th>
    </tr>
    <tr>
      <td align="center">메뉴사진</td>
      <td align="center">메뉴명</td>
      <td align="center">가격</td>
      <td align="center">메뉴설명</td>
    </tr>
    <?php
      $queryStoresubMenu="select * from store_menu where pno=$storeNo";
      $rsStoresubMenu=mysqli_query($conn,$queryStoresubMenu);
      $storesubMenuImgDir="images/".$bigTypeNo."/".$smallType."/".$storeNo."/";

      while($rowStoresubMenu=mysqli_fetch_array($rsStoresubMenu)){
        $storesubMenuPic=$rowStoresubMenu["pic"];
     ?>
    <tr>
      <td><a href="store_menu_detail.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType ?>&bigTypeNo=<?php echo $bigTypeNo ?>&Storemenu=<?php echo $rowStoresubMenu["sno"]; ?>" class="link">
      <img src="<?php echo "images/".$bigTypeNo."/".$smallType."/".$rowStoresubMenu["pic"]; ?>" class="img2" style="width:150px;height:100px;"></a></td>
      <td><a href="store_menu_detail.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType ?>&bigTypeNo=<?php echo $bigTypeNo ?>&Storemenu=<?php echo $rowStoresubMenu["sno"]; ?>" class="link"><?php echo $rowStoresubMenu["name"]; ?></a></td>
      <td><a href="store_menu_detail.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType ?>&bigTypeNo=<?php echo $bigTypeNo ?>&Storemenu=<?php echo $rowStoresubMenu["sno"]; ?>" class="link"><?php echo $rowStoresubMenu["price"]; ?></a></td>
      <td><a href="store_menu_detail.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallType ?>&bigTypeNo=<?php echo $bigTypeNo ?>&Storemenu=<?php echo $rowStoresubMenu["sno"]; ?>" class="link"><?php echo $rowStoresubMenu["smemo"]; ?></a></td>
    </tr>
  <?php } ?>
    <tr>
      <td colspan="4" align="center">
      <input class="bt1" type="button" value="메뉴추가" onclick="location.href='store_content_insert.php?storeNo=<?php echo $storeNo ?> &smallType=<?php echo $smallType ?> &bigTypeNo=<?php echo $bigTypeNo ?> '">&ensp;
      <input class="bt1" type="button" value="메뉴삭제" onclick="location.href='store_content_del.php?storeNo=<?php echo $storeNo ?> &smallType=<?php echo $smallType ?> &bigTypeNo=<?php echo $bigTypeNo ?> '">&ensp;
      </td>
    </tr>
  </table>
  <table class="table6">
    <tr>
      <th><div id="speak">공지사항</div></th>
      <th><div id="hugi">후기</div></th>
    </tr>
    <tr>
      <td colspan="2">
        <div class="speak1">
          <table class="table8">
            <tr>
              <th align="center" width="10%">번호</th>
              <th align="center" width="40%">제목</th>
              <th align="center" width="20%">작성자</th>
              <th align="center" width="20%">작성일</th>
              <th align="center" width="10%">조회수</th>
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
              if($levelData == "admin") {
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
        <div class="hugi1">
          <form name="frm1" method="post" action="store_re_ok.php">
            <table class="table8">
              <tr>
                <th>
                  <?php if(isset($_SESSION["id"])) { ?>
                  <input type="text" name="memo" size="70">
                </th>
                <th>
                  <input type="hidden" name="writer" value="<?php echo $rowRe["writer"]?>">&nbsp;
                  <input type="button" value="댓글" class="btn1" onclick="send()">
                  <input type="hidden" name="pno" value="<?php echo $storeNo ?>">
                  <?php }else {?>
                  <?php } ?>
                </th>
              </tr>
              <tr>
                <th>내용</th>
                <th>작성자</th>
              </tr>
              <?php
                $queryRe="select * from notice_re where no=$storeNo order by no desc";
                $rsRe=mysqli_query($conn,$queryRe);
                while($rowRe=mysqli_fetch_array($rsRe)) {
              ?>
              <tr>
                <td style="color:green;">
                <?php echo $rowRe["memo"]; ?>
                </td>
                <td><?php echo $rowRe["writer"]; ?></td>
              </tr>
              <?php } ?>
            </table>
          </form>
        </div>
      </td>
    </tr>
  </table>
 </div>
  <br><br>
 </section>
</div>
<footer>
  Copyright &#169; LDB.com All rights reserves since 2020 by web editor.
</footer>
</body>
</html>


<!--  <tr align="center">
      <td>
      <img src="<?php echo "images/".$bigTypeNo."/".$smallType."/".$storeNo."/".$rowStoreMenu["pic"]; ?>">
      </td>
    </tr>
    <tr align="center">
      <td><a href="#" style="font-family: 'jua', sans-serif;"><?php echo $storeName; ?></a></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeAddr; ?></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeTel; ?></td>
    </tr>
    <tr align="center">
      <td><?php echo $storeMemo; ?></td>
    </tr> -->