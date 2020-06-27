<!DOCTYPE html>
<?php 
  include "dbconn.php";
  $storeNo=$_GET["storeNo"];
  $smallTypeNo=$_GET["smallType"];
  $bigTypeNo=$_GET["bigTypeNo"];
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<title></title>
  <script>
    function send(){
      document.frm1.submit();
    }
  </script>
</head>
<body>
<form enctype="multipart/form-data" action="store_content_insert_ok.php?code=<?php echo $pcode ?> & no=<?php echo $no ?>" method="post" name="frm1">	
 <table class="table1" width="800">
      <tr>
        <th colspan="2" align="center">
          메뉴추가
        </th>
      </tr>
      <tr>
        <td>이름</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>가격</td>
        <td>
          <input type="text" name="price">
        </td>
      </tr>
      <tr>
        <td>사진</td>
        <td><input type="file" name="pic"></td>
      </tr>
      <tr>
        <td>하고싶은말</td>
        <td>
          <textarea name="memo" cols="50" rows="7"></textarea>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="button" class="bt1" value="작성완료" onclick="send()">
          &nbsp;&nbsp;
          <input type="button" class="bt1" value="새로작성" onclick="location.href='store_content_insert.php'">
        </td>
      </tr>
    </table>
</body>
</html>