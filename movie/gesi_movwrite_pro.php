<?php
    include("../db_con.php");
    mysqli_select_db($conn, "gesipan");
    $sql = "INSERT INTO movie(nickname, password, description,title,created)VALUES('".$_POST['nickname']."','".$_POST['password']."','".$_POST['description']."','".$_POST['title']."',now())";
    $result = mysqli_query($conn, $sql); 
//    if($_FILES[file01][name]){
//        $size = $_FILES['file01']['size'];
//        if($size > 2097152){
//            Error('파일용량:2메가제한');
//        }else{
//            $file01_name=strtolower($_FILES['file01']['name']);//파일명과 확장자 소문자로 변경
//            $file01_split=explode(".",$file01_name);
//            $extexplode=$file01_split[count($file01_split)-2.3];//파일명만 가져오기
//            $file01_type=$file01_split[count($file01_split)-1];//확장자만 가져오기
//            
//            $img_ext=array('jpg','jpeg','gif','png');//이미지확장자 종류를 배열에
//            if(array_search($file01_type, $img_ext) === false){
//                Error('이미지 파일이 아님');
//            }else{
//                $tates= date("mdhis", time());
//                $newfile01= chr(rand(97,122)).chr(rand(97,122)).$tates.rand(1,9).rand(1,9).".".$file01_type;
//                $dir=data;
//                move_uploaded_file($FILES["file01"]['tmp_name'],$dir.$newfile01);
//                chmod($dir.$newfile01,0777);
//            }
//        }
//    }
echo "<script>
        window.location.href = '../gesi_movie1.php?name=1';
      </script>"; 
?>
