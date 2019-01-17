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
                <li><a href="gesi_movie1.php?name=1" class="shan">영화게시판</a></li>
                <li><a href="../humor/gesi_humor?name=1" class="shan">유머게시판</a> </li>
                <li><a href="" class="shan">사진게시판</a></li>
            </ul> 
               
               
        </header>
        
        <article>
          <div id="best">
             <div id="gesigle">
                 <h2>입력창</h2>
                 <form action="gesi_movwrite_pro.php" method="post" enctype="multipart/form-data">
                      <div id="userinfo">
                          <input type="text" name="nickname" value="닉네임">
                          <input type="text" name="password" value="패스워드">
                      </div>
                      <div id="descrip">
                           <input type="text" name="title" value="제목">
                           <textarea name="description" id="" cols="90" rows="40"></textarea>
                      </div>
                      <input type="submit" id="aler" value="글쓰기">
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