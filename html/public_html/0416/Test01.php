<script language="javascript">
    function send() {
        if(frm1.name1.value==""){
            alert("이름을 입력하세요");
            frm1.name1.focus();
            return false;
        }
        if(frm1.memo.value==""){
            alert("메모를 입력하세요");
            frm1.memo.focus();
            return false;
        }
        if(frm1.password1.value==""){
            alert("비밀번호를 입력하세요");
            frm1.password1.focus();
            return false;
        }
        document.frm1.submit();
    }
</script>
<html>
<head>
    <meta charset="utf-9">
    <title>폼태그</title>
</head>
<body>
<form name = "frm1" method="post" action="Test01_ok.php">
    <table border="1" align="center">
        <tr>
            <td>text태그</td>
            <td>
                <input type="text" name="name1" size="15" maxlength="10">
            </td>
        </tr>
        <tr>
            <td>
                textarea 태그
            </td>
            <td>
                <textarea name="memo" rows="9" cols="60" maxlength="300"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                password 태그
            </td>
            <td>
                <input type="password" name="password1" size="100" maxlength="12">
            </td>
        </tr>
        <tr>
            <td>
                hidden 태그
            </td>
            <td>
                <input type="hidden" name="hidden1">
            </td>
        </tr>
        <tr>
            <td>radio 태그</td>
            <td>
                <input type="radio" name="gender" value="m">남성
                <input type="radio" name="gender" value="f" checked>여성
            </td>
        </tr>
        <tr>
            <td>
                select 개체
            </td>
            <td>
                <select name="grade">
                    <option value="대학원졸">대학원졸</option>
                    <option value="대졸">대졸</option>
                    <option value="초대졸">초대졸</option>
                    <option value="고졸">고졸</option>
                    <option value="중졸">중졸</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                checkbox 개체
            </td>
            <td>
                <input type="checkbox" name="hobby0" value="traval">여행
                <input type="checkbox" name="hobby1" value="clime">등산
                <input type="checkbox" name="hobby2" value="fishing">낚시
                <input type="checkbox" name="hobby3" value="music">음악

            </td>
        </tr>
        <tr>
            <td>
                file 개체
            </td>
            <td>
                <input type="file" name="fname">
            </td>
        </tr>
        <tr>
            <td>
                submit 개체
            </td>
            <td>
                <input type="submit" value="제출하기">
            </td>
        </tr>
        <tr>
            <td>
                button 개체
            </td>
            <td>
                <input type="button" value="작성완료" onclick="send()">
            </td>
        </tr>
        <tr>
        	<td>
        		reset 개체
        	</td>
        	<td>
        		<input type="reset" value="새로고침">
        	</td>
        </tr>
    </table>
</form>
</body>
</html>