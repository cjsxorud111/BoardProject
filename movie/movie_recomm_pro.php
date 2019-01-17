<?php
    include("../db_con.php");
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $nickname = $_GET['nickname'];    
    $title = $_GET['title'];    
    $sql = "SELECT * FROM movie_recomm WHERE ip='$user_ip'";
    $result = mysqli_query($conn, $sql); 
    $num1 = 0;

    while($row = mysqli_fetch_assoc($result)){
        if($row['title'] == $title){
            $num1 += 1;
            echo "<script>
                window.alert('이미추천하셨습니다.');
                window.location.href = 'description.php?nickname=$nickname&title=$title';
            </script>"; 
        }
    }

    if($num1 == 0){
        $sql = "INSERT INTO movie_recomm(ip, title)VALUES('".$user_ip."','".$_GET['title']."')";
        $result = mysqli_query($conn, $sql);
        
        $sql = "SELECT * FROM movie WHERE title='$title'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result);
        $recomm_num = $row['recomm_num'];
        $recomm_num += 1;
        $sql = "UPDATE movie SET recomm_num='$recomm_num' WHERE title='$title'";
        $result = mysqli_query($conn, $sql);
        echo "<script>
            window.alert('추천!');
            window.location.href = 'description.php?nickname=$nickname&title=$title';
        </script>"; 
    }
    

?>
