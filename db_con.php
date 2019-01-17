<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
    //header('Content-Type: text/html; charset=UTF-8');
    $conn=mysqli_connect("localhost","root","apmsetup");
    mysqli_select_db($conn, "gesipan") or die("db connect error");
    mysqli_set_charset($conn, "utf8");
?> 
