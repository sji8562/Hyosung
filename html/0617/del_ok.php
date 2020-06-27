<?php
include "dbconn.php";

	$foodname=$_GET["foodname"];
	$price=$_POST["price"];
	$memo=$_POST["memo"];
	$storeNo=$_POST["storeNo"];
	$smallTypeNo=$_POST["smallTypeNo"];
	$bigTypeNo=$_POST["bigTypeNo"];

	$fname=basename($_FILES["foodimg"]["name"]);
	$uploaddir=$_SERVER["DOCUMENT_ROOT"]."/0617/images/".$bigTypeNo."/".$smallTypeNo."/".$fname;
	$uploadfile=$uploaddir.$fname;
    
	$query="delete from store_menu where no='$pno' and pno='$sno'";
	mysqli_query($conn,$query);
?>
<script>
	alert("데이터가 삭제되었습니다.");
</script>
<meta http-equiv="refresh" content="5;url=index.php">
