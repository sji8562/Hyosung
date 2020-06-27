<?php
  include "dbconn.php";

  $storeNo=$_GET["storeNo"];

  $id = $_SESSION["id"];
  $cno=$_POST["sno"];
  $ea=$_POST["num"];
  $cfname=$_POST["fdname"];
  $fprice=$_POST["fprice"];


  $tprice=$fprice*$ea;


  $queryMenu="insert into cart (cno,id,ea,tprice,cfname,fprice,sno)
  values ('$cno','$id','$ea','$tprice','$cfname','$fprice','$storeNo')";
  mysqli_query($conn,$queryMenu);

?>
<meta http-equiv="refresh" content="0;store_content.php?storeNo=<?php echo $storeNo; ?>">
