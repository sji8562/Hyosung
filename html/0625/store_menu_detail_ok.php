<?php
  include "dbconn.php";

  $id = $_SESSION["id"];
  $cno=$_POST["sno"];
  $ea=$_POST["num"];
  $cfname=$_POST["fdname"];
  $fprice=$_POST["fprice"];
  $tprice=$fprice*$ea;

  $StoreNo=$_GET["storeNo"];

  $queryMenu="insert into cart (cno,id,ea,tprice,cfname,fprice)
  values ('$cno','$id','$ea','$tprice','$cfname','$fprice')";
  mysqli_query($conn,$queryMenu);

?>
<script>
  console.log($StoreNo);
</script>
<meta http-equiv="refresh" content="5;store_content.php?storeNo=<?php echo $StoreNo; ?>">