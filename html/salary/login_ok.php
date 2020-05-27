<<?php 
	session_start();
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$conn=mysqli_connect("localhost","root","autoset","testdb");
	$query="select * from salary where id='$id' and pw='$pw'";
	$rs=mysqli_query($conn,$query);
 ?>
 <?php 
 if(mysqli_num_rows($rs)){
 	$_SESSION["id"]=$id;

?>
<script>
	opener.document.frm1.pw1.focus();
	this.close();
</script>
<meta http-equiv="refresh" content="0;url=index.php">
<?php }else{ ?>
	<script>
		alert("아이디와 비밀번호가 일치하지 않습니다.");
		this.close();
	</script>
<?php } ?>