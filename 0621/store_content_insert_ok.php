<?php
include "dbconn.php";
 $name=$_POST["name"];
 $price=$_POST["price"];
 $memo=$_POST["memo"];
 $pno=$_GET["no"];

 $fname=basename($_FILES["pic"]["name"]);
 
 
  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/";
  $uploadfile=$uploaddir.$fname;
  move_uploaded_file($_FILES["pic"]["tmp_name"],$uploadfile);

  

  $query="insert into store_menu (pno,name,price,pic,memo) values ('$pno','$name','$price','$fname','$memo')";

  mysqli_query($conn,$query);
  
  ?>

  <meta http-equiv="refresh" content="0;url=store.php?code=">