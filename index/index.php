<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../gesi_css.css?ver=1">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        $(document).ready(function(){ 
            $("#sisi").load("main_recommend.php"); 
        });
    </script>
    
</head>

<body>
   
    <header>
        <a href="index.php" id='sio'>영화평가사이트</a> 
        <ul>
            <li><form action=""><input type="text" ><input type="submit" value="검색" id="sear1"></form></li>
            <li><a href="../movie/gesi_movie1.php?name=1" class="shan">영화게시판</a></li>
            <li><a href="../humor/gesi_humor.php?name=1" class="shan">유머게시판</a> </li>
            <li><a href="" class="shan">사진게시판</a></li>
        </ul> 

    </header>

    <article>
        <div id="best">
            <h2>영화최다추천게시글</h2>
            <p id='sisi'></p>
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
