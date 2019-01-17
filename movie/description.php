<?php
    include ("../db_con.php");
    
    
        
?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../gesi_css.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  
        
        
        
    </head>
    <body>
         <header>
            <a href="../index/index.php" id='sio'>영화평가사이트</a> 
            <ul>
                <li><form action=""><input type="text"><input type="submit" value="검색" id="sear1"></form></li>
                <li><a href="gesi_movie1.php?name=1" class="shan">영화게시판</a></li>
                <li><a href="../humor/gesi_humor.php?name=1" class="shan">유머게시판</a></li>
                <li><a href="" class="shan">사진게시판</a></li>
            </ul> 
        </header>
        
        <article>
          <? 
            // 페이징 //
            $onepage = 15; //한페이지에 글수 몇개씩?
            $sql = "select count(*) from movie";
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
                    $num = $_GET[num];
                    $dat_num = $_GET[dnum] + 1000;
                    $del_num = $_GET[dnum] + 'del';
                    $sql="select * from movie where nickname='$nickname'";
                    $result= mysqli_query($conn, $sql);    
                 ?>
                 <div id="nickname">글쓴이:<?=$nickname?></div>
                 <div id="title">글쓴이:<?=$title?></div>
                 <aki>본문</aki>
                 <div id="descript">
                 <? 
                    $row = mysqli_fetch_assoc($result);
                    echo $row['description']; 
                 ?>
                 </div>
                  
             </div>
             <div id="sid">
             <form action="movie_recomm_pro.php" method="get"><input type="hidden"  name="nickname" value="<?=$nickname?>"><input type="hidden"  name="title" value="<?=$title?>"><input type="submit" value="추천" id="recomm"></form><a href="password_check.php?nickname=<?=$nickname?>&glenum=<?=$num?>" id="wri_change"><strong>글수정</strong></a>
             </div>
             <div id="datgle">
                 <form action="datgle_process.php"  method='get'>
                  <div id="check2">
                       <div id="check1">
                           <input type="text" id="nick_t" name="nickname" value='닉네임'>
                           <input type="password" id="pw_t" name="password" value='패스'>
                           <input type="hidden" name="back_nick" value="<?=$nickname?>">
                           <input type="hidden" name="back_title" value="<?=$title?>">
                           <input type="hidden" name="gle_num" value="<?=$num?>">
                       </div>
                       
                       <textarea name="datgle_tex" id="dattex" cols="71" rows=""></textarea>
                       <input type="submit" id='datbutt' value="댓글달기">
                  </div>
                  </form>
                   <div id="check3">
                        <?
                            $sql = "SELECT * FROM datgle WHERE gle_num = '$num'";
                            $result = mysqli_query($conn, $sql);     
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <!----------------------------댓글----------------------------->
                        <div id="dat">
                           <!----------------------------댓글창----------------------------->
                            <div id="datid"><?=$row[nickname]?></div>
                            <div id="dattex">
                                <div class="ddd" id="<?=$row[num]?>"><?=$row[dat_text]?></div>
                           <!----------------------------댓글수정시 숨겨진부분----------------------------->
                            <div class="datch" id="<?=$row[numb]?>">
                                <form action="description_change.php"><textarea name="datchanging" cols="71" rows="4"><?=$row[dat_text]?></textarea><input type="hidden" name="change_num" value="<?=$row[numb]?>"><input type="hidden" name="prepagename" value="<?=$nickname?>"><input type="hidden" name="prepagenum" value="<?=$row[gle_num]?>"><input type="hidden" name="prepagepw" value="<?=$title?>"><input type="submit" value="수정제출">
                                </form>
                                <input type="button" id="<?=$row[numb]+'del'?>" value="댓글작성취소"> 
                            </div>
                            </div>
                           <!----------------------------댓글옆 버튼----------------------------->
                            <div id="cru">
                                <form action="description_delete.php"><input type="hidden" name="change_num" value="<?=$row[numb]?>"><input type="hidden" name="prepagename" value="<?=$nickname?>"><input type="hidden" name="prepagepw" value="<?=$title?>"><input type="submit" value="삭제"></form>
                                
                                <form action="description_prechange.php"><input type="hidden" name="change_num" value="<?=$row[numb]?>"><input type="hidden" name="prepagename" value="<?=$nickname?>"><input type="hidden" name="prepagepw" value="<?=$title?>"><input type="hidden" name="glnum" value="<?=$num?>"><input type="submit" value="수정" id="<?=$row[num]?>"></form>
                            </div>        
                        </div>   
                        
                        <?
                            }
                        ?>
                       
                   </div>  
                 
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
            $(document).ready(function(){
                var dnum = "<?=$_GET['dnum']?>";

                $(".datch").hide();
                if(dnum){
                    $("#<?=$_GET['dnum']?>").show();
                    $("#<?=$dat_num?>").hide();
                };
            });
            $("#<?=$del_num?>").click(function() {
                $("#<?=$_GET['dnum']?>").hide();
                $("#<?=$dat_num?>").show();
            });
        </script>
  
    </body>
</html>