<?php
    include("../db_con.php");
    $description=$_GET['description'];
    $nickname=$_GET['nickname'];
    $title=$_GET['title'];
    $glenum=$_GET['glenum'];
    
    $sql = "UPDATE movie SET description = '$description' WHERE num = '$glenum'";
    $result = mysqli_query($conn, $sql); 
    //header("Location: ../description.php?nickname=$nickname&title=$title");
    echo "<script>
        window.location.href = '../movie/description.php?nickname=$nickname&title=$title&num=$glenum';
    </script>";
?>
