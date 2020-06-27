<?php
include "dbconn.php";

	$pno=$_GET["no"];
    $pcode=$_GET["code"];
    $sno=$_GET["sno"];

    $filename=$_GET["fname"];
	$file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$filename;
	if(file_exists($file_dir)){
		unlink($file_dir);
    }
    
	$query="delete from store_menu where no='$pno' and pno='$sno'";
	mysqli_query($conn,$query);
?>
<script>
	alert("데이터가 삭제되었습니다.");
</script>
<meta http-equiv="refresh" content="5;url=index.php">
