<?
    include ("../db_con.php");
    $glenum = $_GET['glenum'];
    $sql = "SELECT * FROM movie WHERE num='$glenum'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $password = $row['password'];

    echo "<script>
            var password = prompt('비밀번호를 입력해주세요');
            if(password == '$password'){
                window.location.href = 'write_change.php?nickname=$row[nickname]&title=$row[title]&num=$row[num]';
            }else{
                alert ('비밀번호가 일치하지않습니다.');
                window.location.href = 'description.php?nickname=$row[nickname]&title=$row[title]&num=$glenum';
            }
            
            </script>";
    
    // 프롬프트로 패스워드 체크

    //if 맞으면 header로 다음페지로 연결 틀리면 alert 띄우고 전페지로
    
    

?>


