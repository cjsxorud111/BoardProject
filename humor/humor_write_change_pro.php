<?php
    include("../db_con.php");
    $description=$_POST['description'];
    $nickname=$_POST['nickname'];
    $num=$_POST['num'];
    $title=$_POST['title'];
    $sql = "UPDATE humor SET description='$description' WHERE nickname='$nickname'";
    $result = mysqli_query($conn, $sql); 
    echo "<script>
            window.location.href = 'humor_description.php?nickname=$nickname&title=$title&num=$num';
        </script>";
?>
