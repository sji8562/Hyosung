<?php
  include "dbconn.php";
  $subcode=$_GET["code"];
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
  <?php
   if(isset($_GET["page"])) {
      $page = $_GET["page"];
      $group = ceil($page / 5);
    } else {
      $page = 1;
      $group = 1;
    }
    $sGPRecord = ($page - 1) * 8;


  if($subcode === "01"){
      $queryTemp=
      "select *
      from
        store
      where
        pcode ='001'
      or
        pcode ='002'
      or
        pcode ='003'
      order by pic limit $sGPRecord,9";
      }
  else if($subcode === "001")
      $queryTemp="select * from store where pcode = '001' order by pic limit $sGPRecord,9";
  else if($subcode === "002")
      $queryTemp="select * from store where pcode = '002' order by pic limit $sGPRecord,9";
  else if($subcode === "003")
      $queryTemp="select * from store where pcode = '003' order by pic limit $sGPRecord,9";

  if($subcode === "02"){
      $queryTemp=
      "select *
      from
        store
      where
        pcode ='004'
      or
        pcode ='005'
      or
        pcode ='006'
      order by pic limit $sGPRecord,8";
      }
  else if($subcode === "004")
      $queryTemp="select * from store where pcode = '004' order by pic limit $sGPRecord,9";
  else if($subcode === "005")
      $queryTemp="select * from store where pcode = '005' order by pic limit $sGPRecord,9";
  else if($subcode === "006")
      $queryTemp="select * from store where pcode = '006' order by pic limit $sGPRecord,9";

  if($subcode === "03"){
      $queryTemp=
      "select *
      from
        store
      where
        pcode ='007'
      or
        pcode ='008'
      or
        pcode ='009'
      order by pic limit $sGPRecord,8";
      }
  else if($subcode === "007")
      $queryTemp="select * from store where pcode = '007' order by pic limit $sGPRecord,9";
  else if($subcode === "008")
      $queryTemp="select * from store where pcode = '008' order by pic limit $sGPRecord,9";
  else if($subcode === "009")
      $queryTemp="select * from store where pcode = '009' order by pic limit $sGPRecord,9";
    ?>
   <ul class="list">
      <?php
      $rsTemp=mysqli_query($conn,$queryTemp);
      while($rowTemp=mysqli_fetch_array($rsTemp)) {
      ?>
        <li>
          <a href="store_content.php?code=<?php echo $code ?> " class="inner">
            <div class="thumb">
              <img src="../fileServer/<?php echo $rowTemp["pic"]?>">
            </div>
            <div class="title">
              <?php echo $rowTemp["store_name"]; ?>
            </div>
          </a>
        </li>
      <?php
      }
      ?>
    </ul>
    <ul>
      <li align="center">
        <?php
        if($subcode === "01")
          $queryCount="select count(*) cnt from store where  pcode ='001' or pcode = '0002' or pcode = '0003' ";
        else if($subcode === "001")
          $queryCount="select count(*) cnt from store where  pcode ='001' ";
        else if($subcode === "002")
          $queryCount="select count(*) cnt from store where  pcode ='002' ";
        else if($subcode === "003")
          $queryCount="select count(*) cnt from store where  pcode ='003' ";

        if($subcode === "02")
          $queryCount="select count(*) cnt from store where  pcode ='004' or pcode = '0005' or pcode = '0006' ";
        else if($subcode === "004")
          $queryCount="select count(*) cnt from store where  pcode ='004' ";
        else if($subcode === "005")
          $queryCount="select count(*) cnt from store where  pcode ='005' ";
        else if($subcode === "006")
          $queryCount="select count(*) cnt from store where  pcode ='006' ";

        if($subcode === "03")
          $queryCount="select count(*) cnt from store where  pcode ='007' or pcode = '0008' or pcode = '0009' ";
        else if($subcode === "007")
          $queryCount="select count(*) cnt from store where  pcode ='007' ";
        else if($subcode === "008")
          $queryCount="select count(*) cnt from store where  pcode ='008' ";
        else if($subcode === "009")
          $queryCount="select count(*) cnt from store where  pcode ='009' ";

        $rsCount=mysqli_query($conn,$queryCount);
        $rowCount=mysqli_fetch_array($rsCount);
        $pageCount=ceil($rowCount["cnt"] / 8);
        $groupCount=ceil($pageCount/5);
        $startPage=($group-1)*5+1;
        $endPage= $startPage+4;
        if($group != 1){
          echo "<a href=store.php?page=1&code=$subcode><b><font color='purple'>처음</font></b></a>";
          echo "&nbsp;&nbsp;";
          $prevPage=($group - 2) * 5 + 1;
          echo "<a href=store.php?page=$prevPage&code=$subcode>이전</a>";
          echo "&nbsp;&nbsp;";
        }

        for($i=$startPage; $i<=$endPage; $i++) {
          if($i > $pageCount){break;}
          if($i == $page){
            echo "<a href=store.php?page=$i&code=$subcode><b><font color='blue'>[$i]</font></b></a>";
          }else{
            echo "<a href=store.php?page=$i&code=$subcode>[$i]</a>";
          }

        }
        if($group<$groupCount){
          $nextPage=$group*5+1;
          echo "<a href=store.php?page=$nextPage&code=$subcode>다음</a>";
          echo "&nbsp;&nbsp;";
          echo "<a href=store.php?page=$pageCount&code=$subcode>끝</a>";
          echo "&nbsp;";
        }
        ?>
      </li>
      </ul>
  </section>
  </div>
</body>
</html>
