<?php
include "dbconn.php";
session_destory();
$id=$_SESSION["id"];
$query="delete from member whiere id='$id'";
mysqli_query($conn,$query);
?>
<script>
  alert("회원탈퇴가 완료되었습니다."+"\n"+"안녕히가십시오");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
