<?php
  include "dbconn.php";
  $no=$_GET["sno"];
  $storeNo=$_GET["storeNo"];
  $bigTypeNo=$_GET["bigTypeNo"];
  $smallTypeNo=$_GET["smallTypeNo"];
  $fname = $_GET["pic"];
  $file_dir=$_SERVER["DOCUMENT_ROOT"]."0617/images/".$bigTypeNo."/".$smallTypeNo."/".$storeNo."/".$fname;

  //파일서버의 파일삭제
  if(file_exists($file_dir))
    unlink($file_dir);
    $queryStoreMenu = "delete from store_menu where sno=$no";
    mysqli_query($conn, $queryStoreMenu);
    
?>
<meta http-equiv="refresh" content="0;store_content_del.php?storeNo=<?php echo $storeNo; ?>&smallType=<?php echo $smallTypeNo; ?>&bigTypeNo=<?php echo $bigTypeNo; ?>">
