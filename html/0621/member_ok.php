<?php
  $id=$_POST["id"];
  $pw=$_POST["pw1"];
  $name=$_POST["name"];
  $age=$_POST["age"];
  $gendar=$_POST["gendar"];
  $address=$_POST["address"];

  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="insert into member1 (id,pw,pw1,name,age,gendar,address)
  values ('$id','$pw','$pw','$name','$age','$gendar','$address')";
  mysqli_query($conn,$query);
  // echo $query; exit;
?>
<script>
  alert("회원가입을 축하드립니다."+"\n"+"메인창으로 이동하여 로그인 후 사용바랍니다.");
</script>
<meta http-equiv="refresh" content="0;url=index.php">
