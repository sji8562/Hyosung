<?php
  // session_start();
  include "dbconn.php";
  $no = $_GET["no"];
  $pcode = $_GET["code"];
  
  $query1="select * from store where pcode='$pcode'";
  $rs1=mysqli_query($conn,$query1);
  $row1 = mysqli_fetch_array($rs1);

  // 추가버튼처리
?>

<?php
  $query2 = "select * from store_menu where pno = '$no'";
  $rs2 = mysqli_query($conn, $query2);
  $query8="select * from store_menu sno='$no'";
  $rs8=mysqli_query($conn,$query8); 
?>
<style>
  *{
    margin:0 auto;
    padding:0;
    list-style:none;
    font-family: "맑은고딕";
  }
  a{text-decoration:none;color:inherit;}
</style>
<script>
     function del(){
       if(confirm("삭제할라요?")){
         location.href="del.php?code=<?php echo $pcode ?> & no=<?php echo $no ?> & sno=<?php echo $no ?>";
       }
     }
   </script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
    <title></title>
  </head>
  <body>
  <header>
    <div class="gnb_menu"></div>
    <div class="logo">
      <a href="index.php">
        <img src="logo/YORI.jpg">
      </a>
    </div>
    <nav>
    <?php
      $query3="select * from menu";
      $rs3=mysqli_query($conn,$query3);
    ?>
      <ul class="menu">
      <?php
      while($row3=mysqli_fetch_array($rs3)) {
      ?>
        <li>
          <a href="store.php?code=<?php echo $row3["code"]; ?>">
            <?php echo $row3["name"]; ?>
          </a>
          <ul class="submenu">
          <?php
            $pcode=$row4["code"];
            $query4="select * from submenu where pcode = '$pcode'";
            $rs4=mysqli_query($conn,$query4);
            while($row4=mysqli_fetch_array($rs4)) {
              $code=$row4["code"];
          ?>
            <li>
              <a href="store.php?code=<?php echo $code ?>">
                <?php echo $row4["name"] ?>
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
  <div class="mtable">
    <table class="table3">
      <tr>
        <td>글번호</td>
        <td>메뉴</td>
        <td>가격</td>
        <td>사진</td>
        <td>특징</td>
      </tr>
      <?php while($row2=mysqli_fetch_array($rs2)){ ?>
      <tr>
        <td><?php echo $row2["sno"] ?></td>
        <td><a href="inc.php?code=<?php echo $pcode ?>&no=<?php echo $no?>"><?php echo $row2["name"] ?></a></td>
        <td><?php echo $row2["price"] ?></td>
        <td><img src="../fileServer/<? echo $row["pic"] ?>" width="100" height="50"></td>
        <td><?php echo $row2["memo"] ?></td>
      </tr>
    <?php } ?>    
      <tr>
        <td colspan="4">
          <input type="button" value="메뉴추가하기" onclick="location.href='store_content_insert.php?code=<?php echo $pcode ?>&no=<?php echo $no?>'">
          <input type="button" value="메뉴삭제하기" onclick="del()">
        </td>
      </tr>
    </table>
    <form name="frm1" method="post" action="notice_re_ok.php">
      <table class="table_re">
        <tr>
          <th>
            <?php if(isset($_SESSION["id"])) { ?>
            <input type="text" name="memo" size="70">
          </th>
      <th>
      <input type="text" name="writer" size="15">&nbsp;
      <input type="button" value="댓글" class="btn1" onclick="send()">
      <input type="hidden" name="pno" value="<?php echo $no ?>">
      <?php }else {?>
      <?php } ?>
    </th>
    </tr>
  <?php
    $query5="select * from notice_re where p_no=$no";
    $rs5=mysqli_query($conn,$query5);
    while($row5=mysqli_fetch_array($rs5)) {
  ?>
  <tr>
    <td style="color:green;">
      <?php echo $row5["memo"]; ?>

    </td>
    <td><?php echo $row5["writer"]; ?></td>
  </tr>
<?php } ?>

  </table>
  </div>
</form>
<?php
        if(isset($_GET["page"])){
          $page=$_GET["page"];
          $group=ceil($page/5);
        }else{
          $page=1;
          $group=1;
        }
        $startRow=($page-1)*10;
        $query6="select * from notice order by nno desc limit $startRow,10";
        $rs6=mysqli_query($conn,$query6);
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
          <?php while($row6=mysqli_fetch_array($rs6)){ ?>
          <tr>
            <td align="center"><?php echo $row6["nno"] ?></td>
            <td align="left"><?php echo $row6["title"] ?></td>
            <td align="center"><?php echo $row6["writer"] ?></td>
            <td align="center"><?php echo $row6["writeday"] ?></td>
            <td align="center"><?php echo $row6["hit"] ?></td>
          </tr>
        <?php } ?>
        <?php
          $startPage=($group-1)*5+1;
          $endPage=$startPage+4;
          $query7="select count(*) as cnt from notice";
          $rs7=mysqli_query($conn,$query7);
          $row7=mysqli_fetch_array($rs7);
          $pageCount=ceil($row7["cnt"]/10);
          $groupCount=ceil($pageCount/5);
        ?>
        <tr>
          <td colspan="5" align="center">
            <?php
              if($group!=1){
                echo "<a href='store_content.php?page=1'><font size='5px'>FIRST</font></a>";
              }
              echo "&nbsp;&nbsp;";
              if($group!=1){
                $prevPage=($group-2)*5+1;
                echo "<a href='store_content.php?page=$prevPage'><font size='5px'>PREV</font></a>";
              }
              echo "&nbsp;&nbsp;";
              for($i=$startPage;$i<=$endPage;$i++){
                if($i>$pageCount){
                  break;
                }
                if($i==$page){
                  echo "<a href='store_content.php?page=$i'><font color='black' size='5px'><b>[$i]</b></font></a>";
                }else{
                  echo "<a href='store_content.php?page=$i'><font size='5px'>[$i]</font></a>";
                }
              }
              echo "&nbsp;&nbsp;";
              if($group<$groupCount){
                $nextPage=$group*5+1;
                echo "<a href='store_content.php?page=$nextPage'><font size='5px'>NEXT</font></a>";
              }
              echo "&nbsp;&nbsp;";
              if($group<$groupCount){
                $lastPage=$pageCount;
                echo "<a href='store_content.php?page=$lastPage'><font size='5px'>LAST</font></a>";
              }
            ?>
          </td>
        </tr>
        <?php if(isset($_SESSION["id"])){ ?>
           <?php if($_SESSION["level"]=="manager"){ ?>
          <tr>
            <td colspan="5" align="center">
              <input type="button" value="공지사항추가" onclick="location.href='notice_write.php'" class="bt2">
            </td>
          </tr>
        <?php } ?>
            <?php } ?>
        </table>
      </div>
  </body>
</html>