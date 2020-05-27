<!DOCTYPE html>
<script language="JavaScript">
    function send() {
        if(fn.name1.value==""){
            alert("이름을 입력하세요");
            fn.name1.focus();
            return false;
        }
        if(fn.id.value==""){
            alert("ID를 입력하세요");
            fn.id.focus();
            return false;
        }
        if(fn.pw1.value==""){
            alert("패스워드를 입력하세요");
            fn.pw.focus();
            return false;
        }
        if(fn.pw1.value != fn.pw2.value){
            alert("패스워드를 확인해주세요");
            fn.pw1.value ="";
            fn.pw2.value ="";
            fn.pw1.focus();
            return false;
        }

        document.fn.submit();
    }
    // function check() {
    //     if(fn.name1.value == );
    
    // }
</script>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>회원가입양식</title>
</head>
<body>
<form name="fn" method="post" action="test02_ok.php">
<table border="1" align="center">
    <tr>
        <td colspan="2" align="center">회원가입 양식</td>
    </tr>
    <tr>
        <td width="30%">이름</td>
        <td width="70%">
            <input type="text" name="name1" size="20" maxlength="10">
        </td>
    </tr>
    <tr>
        <td width="30%">아이디</td>
        <td width="70%">
            <input type="text" name="id" size="20" maxlength="10">
            <input type="button" name="name2" value="중복체크" onclick="check()">
        </td>
    </tr>
    <tr>
        <td width="30%">비밀번호</td>
        <td width="70%">
            <input type="password" name="pw1" maxlength="12">
        </td>
    </tr>
    <tr>
        <td width="30%">비밀번호 확인</td>
        <td width="70%">
            <input type="password" name="pw2" maxlength="12">
        </td>
    </tr>
    <tr>
        <td width="30%">관심지역</td>
        <td width="70%">
            <input type="radio" name="local" value="서울/경기" checked="">서울/경기
            <input type="radio" name="local" value="부산">부산
            <input type="radio" name="local" value="해외">해외

        </td>
    </tr>
    <tr>
        <td width="30%">
            하고싶은말 (300자이내)
        </td>
        <td width="70%">
            <textarea name="talk" maxlength="300"></textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="button" value="가입" onclick="send()">
            <input type="reset" value="취소">
        </td>
    </tr>

</table>
</form>
</body>
</html>