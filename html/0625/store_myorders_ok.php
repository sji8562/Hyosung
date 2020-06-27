<?php
  include "dbconn.php";

  $total=$_POST["total"];
  $addr=$_POST["addr"];
  $tel=$_POST["tel"];
  $content=$_POST["content"];

  $queryOrder="insert into orders (total,address,tel,content)
  values ('$total','$addr','$tel','$content')";
  mysqli_query($conn,$queryOrder);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">