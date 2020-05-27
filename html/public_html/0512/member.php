<script>
function send() {
  if(frm1.id.value == "")
  {
    alert("아이디를 입력해주세요");
    return false;
  }
  if(frm1.hid.value == "")
  {
    alert("아이디 중복확인을 입력해주세요");
    return false;
  }
  if(frm1.id.value != frm1.hid.value)
  {
    alert("아이디와 중복확인한 아이디와 틀립니다."+"\n"+"중복확인을 다시 실행해주세요");
    return false;
  }

}

function idcheck(){

}

function hpsend()
{
  alert("123");
  var len1=frm1.hp1.value.length;
  if(len!=3){
    alert("세자리 단위 입력");
    frm1.hp1.select();
  }
  var len2=frm1.hp2.value.length;
  if(len2!=4){
    alert("네자리 단위 입력");
    frm1.hp2.select();
  }
  var len3=frm1.hp3.value.length;
  if(len3!=4){
    alert("네자리 단위 입력");
    frm1.hp3.select();
  }
  return false;
}

</script>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <div class="login_area">
        <?php
        if(isset($_SESSION["ID"])) {
          ?>
          <a href="logout.php">Logout</a>&nbsp;|&nbsp;
          <a href="member_edit.php">Edit</a>&nbsp;|&nbsp;
          <a href="withdrawal.php">Withdrawal</a>
        <?php }else { ?>
          <a href="javascript:login()">Login</a>&nbsp;|&nbsp;
          <a href="member.php">Member</a>&nbsp;|&nbsp;
          <a href="SearchIdPw.php">Search Id/Pw</a>
        <?php } ?>
      </div>
    </header>
    <form name="frm1" action="member_ok.php" method="post">
      <table class="table">
        <br>
        <tr>
          <td align="right">아이디</td>
          <td>
            <input type="text" name="id">
            <input type="button" value="중복확인" onclick="idcheck()">
            <input type="hidden" name="hid">
          </td>
        </tr>
        <tr>
          <td align="right">패스워드</td>
          <td>
            <input type="password" name="pw1">
          </td>
        </tr>
        <tr>
          <td align="right">패스워드확인</td>
          <td>
            <input type="password" name="pw2">
          </td>
        </tr>
        <tr>
          <td align="right">이름</td>
          <td>
            <input type="text" name="name" maxlength="10">
          </td>
        </tr>
        <tr>
          <td align="right">성별</td>
          <td>
            <input type="radio" name="gender" value="m" checked>남성
            <input type="radio" name="gender" value="f">여성
          </td>
        </tr>
        <tr>
          <td align="right">전화번호</td>
          <td>
            <!-- <input type="text" name="hp1" size="4" maxlength="3"> -->
            <input type="text" name="hp1" size="4" maxlength="3" onblur="hpsend()">
            -
            <input type="text" name="hp2" size="4" maxlength="4" onblur="hpsend()">
            -
            <input type="text" name="hp3" size="4" maxlength="4" onblur="hpsend()">
          </td>
        </tr>
        <tr>
          <td align="right">이메일</td>
          <td>
            <input type="text" name="email1">
            <input type="text" name="" value="">
          </td>
        </tr>
        <tr>
          <td align="right">최종학력</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">직업</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">연봉</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">선호도</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" class="bt" value="회원가입" onclick="send()">
            <input type="reset" class="bt" value="새로작성">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
