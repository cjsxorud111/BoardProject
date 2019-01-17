<?php
    include("../db_con.php");
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $title = $_GET['title'];
    $nickname = $_GET['nickname'];
    $num = $_GET['num'];
    $sql = "SELECT * FROM humor_recommend WHERE ip='$user_ip'";
    $result = mysqli_query($conn, $sql); 
    $num1 = 0; 
   
    while($row = mysqli_fetch_assoc($result)){
        if($row['num'] == $num){
            $num1 += 1;
            echo "<script>
                window.alert('이미추천하셨습니다.');
                window.location.href = 'humor_description.php?nickname=$nickname&title=$title&num=$num';
            </script>"; 
        }
    }
    echo $num1; 
    if($num1 == 0){
        $sql = "INSERT INTO humor_recommend(ip, title, num)VALUES('".$user_ip."','".$_GET['title']."','".$_GET['num']."')";
        $result = mysqli_query($conn, $sql);
        
        $sql = "SELECT * FROM humor WHERE num='$num'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result);
        $recomm_num = $row['recomm_num'];
        $recomm_num += 1;
        $sql = "UPDATE humor SET recomm_num='$recomm_num' WHERE num='$num'";
        $result = mysqli_query($conn, $sql);
        
        echo "<script>
            window.alert('추천!');
            window.location.href = 'humor_description.php?nickname=$nickname&title=$title&num=$num';
        </script>"; 
    }
?>
