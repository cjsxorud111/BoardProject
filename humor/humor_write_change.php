<?
    include ("../db_con.php");
    $nickname=$_GET['nickname'];
    $sql="SELECT * FROM humor WHERE nickname='$nickname'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
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
          <div id="best">
             <div id="gesigle">
                 <h2>수정창</h2>
                 <form action="humor_write_change_pro.php" method="post">
                      <div id="userinfo">
                          <input type="text" name="nickname" value="<?=$row['nickname']?>">
                          <input type="text" name="password" value="<?=$row['password']?>">
                          <input type="hidden" name="num" value="<?=$row['num']?>">
                      </div>
                      <div id="descrip">
                           <input type="text" name="title" value="<?=$row['title']?>">
                           <textarea name="description" id="" cols="90" rows="40"><?=$row['description']?></textarea>
                      </div>
                      <input type="submit" id="aler" value="수정하기">
                  </form>
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
        <script>
            document.getElementById("aler").addEventListener('click', onClick);
            function onClick(){
                alert ('글이 등록되었습니다.');
            }
        </script>
    </body>
</html>