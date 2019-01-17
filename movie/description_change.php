<?php
    include ("../db_con.php");
    $num = $_GET['change_num'];
    $prepagenum = $_GET['prepagenum'];
    $nickname = $_GET['prepagename'];
    $title = $_GET['prepagepw'];
    $change_te = $_GET['datchanging'];
    $sql = "UPDATE datgle SET dat_text = '$change_te' WHERE numb = '$num'";
    $result = mysqli_query($conn, $sql);
    echo "<script>
    window.location.href = 'description.php?nickname=$nickname&title=$title&num=$prepagenum';
    </script>";
?>