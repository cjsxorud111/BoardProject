<?
    include ("../db_con.php");

    $sql = 'SELECT * FROM movie ORDER BY recomm_num DESC LIMIT 10';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    $item1 = array();
    array_push($item1, $row['recomm_num']);                                              
?>
    <p id="mun"> 
    <tu id="g"><?=$row['num']?></tu>
    <a href="../movie/description.php?nickname=<?=$row['nickname']?>&title=<?=$row['title']?>" id="gle" ><?=$row['title']?></a>
    <a id="gll"><?=$row['nickname']?></a>
    <tu id="gi"><?=$row['recomm_num']?></tu>
    </p> 
<?
    }

//    echo $item1[1];
//    rsort($item1);
//    print_r($item1);    
//    for($i=0 ; $i<10 ; $i++){
//        $sql = "SELECT * FROM movie WHERE recomm_num='$item1[$i]'";
//        $result = mysqli_query($conn, $sql);
//        $row = mysqli_fetch_assoc($result);
//        echo $row['num'];
//        echo '<br>';
//    }
    
?>


<?
//    $sql = 'SELECT * FROM humor ORDER BY num DESC LIMIT 10';
//    $result = mysqli_query($conn, $sql);   
//     
//    while($row = mysqli_fetch_assoc($result)){
//    array_push($item2, $row['recomm_num']);  
?>
<!--    <?=$row['recomm_num'];?>-->
<!--    <br>-->
<?
//    }
//    echo $item2[1]; 
//    $itemmerge = array_merge($item1, $item2);
//    rsort($itemmerge);
//    print_r($itemmerge); 
?>    
    
