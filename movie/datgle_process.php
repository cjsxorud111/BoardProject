
<?php
    include("../db_con.php");
    $backn = $_GET['back_nick'];
    $backt = $_GET['back_title'];
    $backg = $_GET['gle_num'];

    $sql = "INSERT INTO datgle(gle_num, nickname, password, dat_text)VALUES('".$_GET['gle_num']."','".$_GET['nickname']."','".$_GET['password']."','".$_GET['datgle_tex']."')";

    $result = mysqli_query($conn, $sql);    
    $sql = "SELECT * FROM datgle WHERE numb ORDER BY numb DESC limit 1";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_assoc($result);
    $numb = $row[numb];
    $numb = $numb + 1000;
    echo $numb;
    $sql = "UPDATE datgle SET num = '$numb' WHERE numb = '$row[numb]'";
    $result = mysqli_query($conn, $sql);  
    echo "<script>window.location.href = 'description.php?nickname=$backn&title=$backt&num=$backg';</script>";
?>