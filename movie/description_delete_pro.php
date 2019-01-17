<?
    include ("../db_con.php");
    $num = $_GET['num'];
    $nickname = $_GET['nickname'];
    $title = $_GET['title'];
    $sql = "SELECT * FROM datgle WHERE numb = '$num'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $glenum = $row[gle_num];
    echo $glenum;
    
    $sql = "DELETE FROM datgle WHERE numb = '$num'";
    $result = mysqli_query($conn, $sql);
    echo "<script>window.location.href = 'description.php?nickname=$nickname&title=$title&num=$glenum';</script>";
    
//    $gle_num = $row[gle_num];
//    echo $gle_num;
?>