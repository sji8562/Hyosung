<?php
  session_start();
?>
<?php
  $id=$_SESSION["id"];
  $conn=mysqli_connect("localhost","root","autoset","testdb");
  $query="select * from member1 where id='$id'";
  $rs=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($rs);
?>
<script>
  function send(){
    if(frm1.pw1.value==""){
      alert("비밀번호를 입력하세요.");
      frm1.pw1.focus();
      return false();
    }
    if(frm1.pw2.value==""){
      alert("비밀번호확인을 입력하세요.");
      frm1.pw2.focus();
      return false();
    }
    document.frm1.submit();
  }
</script>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&family=Odibee+Sans&display=swap" rel="stylesheet">
    <title></title>
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
  </head>
  <body>
    <div id="wrap">
      <header>
        <a href="index.php" class="logo">LOGO</a>
        <a href="#" class="gnb_menu">메뉴</a>
        <div class="idpw">
           <?php if(isset($_SESSION["id"])){ ?>
              <a href="logout.php">Logout</a>&emsp;|
              <a href="member_edit.php">Editn</a>&emsp;|
              <a href="withdrawal.php">Withdrawal</a>
            <?php }else { ?>
            <a href="javascript:login()">Login</a>&emsp;|
            <a href="member.php">Join</a>&emsp;|
            <a href="search.php">ID/PW</a>
          <?php } ?>
        </div>
      <nav>
    <a href="index.php">
          <img src="photo1/YORI.jpg" style="width: 50%; height: 100px;margin-left: 17%; margin-top: -1%;">
      </nav>
      </header>
      <section>
        <form name="frm1" method="post" action="member_edit_ok.php">
      <table class="table3">
        <tr>
          <th colspan="2" align="center">
            회원정보수정
          </th>
        </tr>
        <tr>
          <td align="left">아이디:</td>
          <td><input type="text" name="id" style="border:1.5px solid #C8C8C8;" value="<?php echo $row["id"] ?>" readonly></td>
        </tr>
        <tr>
          <td align="left">비밀번호:</td>
          <td><input type="password" name="pw1" style="border:1.5px solid #C8C8C8;"></td>
        </tr>
        <tr>
          <td align="left">비밀번호확인:</td>
          <td><input type="password" name="pw2" style="border:1.5px solid #C8C8C8;"></td>
        </tr>
        <tr>
          <td align="left">이름:</td>
          <td><input type="text" style="border:1.5px solid #C8C8C8;" name="name" value="<?php echo $row["name"] ?>"></td>
        </tr>
        <tr>
          <td align="left">출생년도:</td>
          <td>
            <select name="age">
              <?php
                for($i=2020;$i>=1920;$i--){
                  echo "<option value=$i>"."$i"."</option>";
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td align="left">성별:</td>
          <td>
            <input type="radio" name="gendar" value="m">남
            <input type="radio" name="gendar" value="f" checked>여
          </td>
        </tr>
        <tr>
          <td align="left">주소:</td>
          <td>
            <input type="text" name="address" value="<?php echo $row["address"] ?>" style="border:1.5px solid #C8C8C8;">@
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="수정하기" onclick="send()" class="bt1">
            <input type="reset" value="새로작성" class="bt1">
            <input type="button" value="메인으로" onclick="location.href='index.php'" class="bt1">
          </td>
        </tr>
      </table>
      </section>
    </div>
    <footer>
      Copyright &#169; Shoppingmall.com All rights reserves since 2020 by web editor.

    </footer>
  </body>
</html>
