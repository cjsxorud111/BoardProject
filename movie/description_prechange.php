<?php
    include ("../db_con.php");
    $num = $_GET['change_num'];
    $nickname = $_GET['prepagename'];
    $title = $_GET['prepagepw'];
    $gnum = $_GET['glnum'];
    $sql = "SELECT * FROM datgle WHERE numb = '$num'";
    $result = mysqli_query($conn, $sql);  
    while($row = mysqli_fetch_assoc($result)){
    $dnum = $row[numb];    
   
?>

<script>
    
    var password = prompt('비밀번호를 입력해주세요');
    if(password == '<?=$row[password]?>'){
        alert ('비밀번호가 일치.');
        window.location.href = 'description.php?nickname=<?=$nickname?>&title=<?=$title?>&num=<?=$gnum?>&dnum=<?=$dnum?>';

    }else{
        alert ('비밀번호가 일치하지않습니다.');
        window.location.href = 'description.php?nickname=<?=$nickname?>&title=<?=$title?>&num=<?=$gnum?>';
    }
    
    
</script>

<?
    }
?>