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
      if (frm1.foodname.value == "") {
            alert("메뉴명을 입력하세요");
            frm1.foodname.focus();
            return false;
         }
      if (frm1.price.value == "") {
            alert("가격을 입력하세요");
            frm1.price.focus();
            return false;
         }
      if (frm1.foodimg.value == "") {
            alert("사진을 등록하세요");
            frm1.foodimg.focus();
            return false;
         }
      if (frm1.memo.value == "") {
            alert("내용을 입력하세요");
            frm1.memo.focus();
            return false;
         }           
      document.frm1.submit();
    }
  </script>
</head>
<body>
<form enctype="multipart/form-data" name="frm1" method="post" action="store_content_insert_ok.php">	
 <table class="table1" width="800">
      <tr>
        <th colspan="2" align="center">
          메뉴추가
        </th>
      </tr>
      <tr>
        <td>이름</td>
        <td><input type="text" name="foodname"></td>
      </tr>
      <tr>
        <td>가격</td>
        <td>
          <input type="text" name="price">
        </td>
      </tr>
      <tr>
       <td>이미지파일</td>
        <td><input type="file" name="foodimg"></td>
        <input type="hidden" name="storeNo" value="<?php echo $storeNo; ?>">
        <input type="hidden" name="smallTypeNo" value="<?php echo $smallTypeNo; ?>">
        <input type="hidden" name="bigTypeNo" value="<?php echo $bigTypeNo; ?>">
      </tr>
      <tr>
        <td>하고싶은말</td>
        <td>
          <textarea name="memo" cols="50" rows="7"></textarea>
        </td>
      </tr>
      <tr>
       <td colspan="2" align="center">
        <input type="button" class="" value="작성완료" onclick="send()">
        <input type="reset" class="" value="새로작성">
        <input type="button" class="" value="리스트로" onclick="location.href='store_content.php?storeNo=<?php echo $storeNo; ?>'">
        </td>
      </tr>
    </table>
    </form>
</body>
</html>