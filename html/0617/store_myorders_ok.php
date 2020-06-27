<?php
  include "dbconn.php";


  $id=$_SESSION["id"];
  $total=$_POST["total"];
  $addr=$_POST["addr"];
  $tel=$_POST["tel"];
  $manaid=$_POST["manager"];
  $storeno=$_POST["storeno"];
  $content=$_POST["content"];

  $queryOrder="insert into orders (total,address,tel,content,cid,manaid,store_no)
  values ('$total','$addr','$tel','$content','$id','$manaid','$storeno')";
  mysqli_query($conn,$queryOrder);

  $query_del_cart="delete from cart where id=$id";
  mysqli_query($conn,$query_del_cart);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
