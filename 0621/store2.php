<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrap">
<header>
  <div class="gnb_menu"></div>
  <div class="logo">
    <a href="index.php">
      <img src="logo/LOGO.jpg" alt="">
    </a>
  </div>
  <nav>
  <?php
    $gcode = $_GET["code"];
    $conn = mysqli_connect("localhost", "root", "autoset", "testdb");
    $query = "select * from menu";
    $rs = mysqli_query($conn, $query);
  ?>
    <ul class="menu">
    <?php while($row = mysqli_fetch_array($rs)) { ?>
      <li><a href="#"><?php echo $row["name"] ?></a>
        <ul class="submenu">
          <?php
            $pcode = $row["code"];
            $query2 = "select * from submenu where pcode = '$pcode'";
            $rs2 = mysqli_query($conn, $query2);
            while($row2 = mysqli_fetch_array($rs2)) { 
              $code = $row2["code"];
            ?>
          <li><a href="store.php?code=<?php echo $code ?>"><?php echo $row2["name"] ?></a></li>
            <?php } ?>
        </ul>
      </li>
    <?php } ?>
    </ul>
  </nav>
</header>

<div>
<?php
  $query3="select * from store where pcode='$gcode'";
  $rs3=mysqli_query($conn,$query3); ?>
  <ul class="list">
  <?php while($row3 = mysqli_fetch_array($rs3)) { ?>
    <li>
      <a href="store_content.php?code=<?php echo $gcode ?>&no=<?php echo $row3["no"] ?>">
        <div class="thumb">
          <img src="../fileServer/<?php echo $row3["pic"] ?>">
        </div>
        <div class="title">
          <?php echo $row3["store_name"] ?>
        </div>
      </a>
    </li>
  <?php } ?>
</ul>
</div>

</div>


  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
</body>
</html>