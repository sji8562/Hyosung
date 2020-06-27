<?php
  include "dbconn.php";
  $foodname=$_POST["foodname"];
  $price=$_POST["price"];
  $memo=$_POST["memo"];

  $storeNo=$_POST["storeNo"];
  $smallType=$_POST["smallTypeNo"];
  $bigTypeNo=$_POST["bigTypeNo"];

  $fname=basename($_FILES['foodimg']['name']);
  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/0625/images/".$bigTypeNo."/".$smallType."/";
  $uploadfile=$uploaddir.$fname;

  move_uploaded_file($_FILES['foodimg']['tmp_name'],$uploadfile);

  $queryMenu="insert into store_menu (pno,name,price,pic,smemo)
  values ('$storeNo','$foodname','$price','$fname','$memo')";
  mysqli_query($conn,$queryMenu);

?>
<meta http-equiv="refresh" content="0;store_content.php?storeNo=<?php echo $storeNo; ?>">
