<?        
    echo "<ac>글수: 총 $totals 개</ac>";
    echo "<br/>";
    $soo=ceil($totals/$onepage); //총 페이지수
    echo "<ab>페이지수: 총 $soo 개</ab>";
    echo "<br/>";
    $before=$_GET[name]-1;
    if($before>0){
        echo "<a href=gesi_movie1.php?name=$before>이전으로가기<--</a>";
    }
   
    for($i=1; $i <= $soo; $i++){ 
            if($_GET[name]==$i){
                echo "<strong><a href=gesi_movie1.php?name=$i>$i</a></strong>";     //2~  
            }else{
                echo "<a href=gesi_movie1.php?name=$i>$i</a>";     //2~  
            }
        }

    $after=$_GET[name]+1; 
    if($before<$soo-1){
        echo "<a href=gesi_movie1.php?name=$after>-->이후로가기</a>";
    }
?>
