<?php 
    $pcode=$_GET["code"];
    $no=$_GET["no"];
    include "dbconn.php";
    $query = "select * from store_menu where pno=$no";
    $rs=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($rs);
    $mno=$row["no"];
?>
<script>
     function del(){
       if(confirm("삭제할라요?")){
         location.href="del.php?code=<?php echo $pcode ?> & no=<?php echo $no ?> & sno=<?php echo $sno ?>";
       }
     }
   </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
    
    <tr>
            <td>메뉴이름</td>
            <td><?php echo $row["name"]?></td>
        </tr>
        <tr>
            <td>가격</td>
            <td><?php echo $row["price"]?></td>
        </tr>
        <tr>
            <td>사진</td>
            <td><?php echo $row["pic"]?></td>
        </tr>
        <tr>
            <td>메모</td>
            <td><?php echo ($row["memo"])?></td>
        
        </tr>
        
        <tr>
        <td><input type="button" value="메뉴수정하기" onclick="#"></td>
        <td><input type="button" value="메뉴삭제하기" onclick="del()"></td>
        </tr>
    </table>

    
</body>
</html>