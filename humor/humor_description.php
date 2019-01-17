<?php
    include ("../db_con.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../gesi_css.css">
    </head>
    <body>
        <header>
        <a href="../index/index.php" id='sio'>영화평가사이트</a> 
        <ul>
            <li><form action=""><input type="text"><input type="submit" value="검색" id="sear1"></form></li>
            <li><a href="../movie/gesi_movie1.php?name=1" class="shan">영화게시판</a></li>
            <li><a href="gesi_humor.php?name=1" class="shan">유머게시판</a> </li>
            <li><a href="" class="shan">사진게시판</a></li>
        </ul> 

        </header>
        
        <article>
          <? 
            // 페이징 //
            $onepage=15; //한페이지에 글수 몇개씩?
            $sql = "select count(*) from humor";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $totals = $row[0]; //db총 행수
            
          ?>
          <div id="best">
             <div id="gesigle">
                 <title>본문내용</title>
                 <?
                    $nickname= $_GET[nickname];
                    $title=$_GET[title];
                    $num=$_GET[num];
                    $sql="select * from humor where nickname='$nickname'";
                    $result= mysqli_query($conn, $sql);    
                 ?>
                 <div id="num">글번호:<?=$num?></div>
                 <div id="nickname">글쓴이:<?=$nickname?></div>
                 <div id="title">글제목:<?=$title?></div>
                 <aki>본문</aki>
                 <div id="descript">
                 <? 
                    $row = mysqli_fetch_assoc($result);
                    echo $row['description'];  
                 ?>
                 </div>
             </div>
             <div id="sid">
                 <form action="recommend_pro.php" method="get"><input type="hidden"  name="nickname" value="<?=$nickname?>"><input type="hidden"  name="title" value="<?=$title?>"><input type="hidden"  name="num" value="<?=$num?>"><input type="submit" value="추천" id="recomm"></form><a href="humor_password_check.php?nickname=<?=$nickname?>" id="wri_change"><strong>글수정</strong></a>
             </div>
          </div>
           <section>
                <h2>
                    광고부분
                </h2>
           </section>
        </article>
        <footer>
            <h2>하단</h2>
        </footer>
    </body>
</html>