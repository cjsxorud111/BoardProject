<?php
    include ("../db_con.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../gesi_css.css?ver=1">
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
                 <h2>영화게시글</h2>
                    <?php
                    $rr = $_GET[name]-1;
                    $limit_first = $rr*$onepage;
                    $sql = "SELECT * FROM humor WHERE num>0 order by num desc limit  $limit_first, $onepage";
                    $result = mysqli_query($conn, $sql); 
                    while($row = mysqli_fetch_assoc($result)){ 
                    ?>    
                    
                    <p id="mun">
                    <tu id="g"><?=$row['num']?></tu>
                    <a href="humor_description.php?nickname=<?=$row['nickname']?>&title=<?=$row['title']?>&num=<?=$row['num']?>" id="gle" ><?=$row['title']?></a>
                    <a id="gll"><?=$row['nickname']?></a>
                    </p> 
                    
                    <? 
                    }; //위 php문단과 연결
                    ?>
                    <foosster id="foott">
                        <pp><? include ("humor_paging.php"); ?></pp> <!--list_page1.php연결-->

                        <a href="humor_write.php" id="wri">글쓰기</a>
                    </foosster>
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