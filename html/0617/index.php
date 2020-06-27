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
    <script src="uploadimgPreview.js" defer="defer"></script>
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
          <?php
          $id=$_SESSION["id"];
          if(isset($_SESSION["id"])){ ?>
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
      <div id="imgslide">
        <ul class="slides">
          <li><img src="slide/1.jpg"></li>
          <li><img src="slide/2.jpg"></li>
          <li><img src="slide/3.jpg"></li>
          <li><img src="slide/4.jpg"></li>
          <li><img src="slide/5.jpg"></li>
        </ul>
        <div class="btn_slides">
          <a href="#" class="btn_prev">이전</a>
          <a href="#" class="btn_next">다음</a>
        </div>
      </div>
      <div id="stores">
        <div class="hot_title">
          인기맛집 TOP10
        </div>
        <div class="stores1">
          <div class="no">
            1위
          </div>
          <div class="pic">
            <img src="slide/6.jpg">
          </div>
          <div class="title">
            경성파스타
          </div>
        </div>
      </div>
    </div>
    <div class="clear">

    </div>
        <footer>
      Copyright &#169; LDB.com All rights reserves since 2020 by web editor.
    </footer>

    </div>
  </body>
</html>
