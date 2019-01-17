<input type="text" id="te">
<input type="button" id="but" value="GO">

<script>
    
    document.getElementById('but').onclick = function(){ 
        var first = document.getElementById("te").value;
        function Gugudan(first){ //자바스크립트에서는class대신 함수생성자를 사용함 대문자 사용이 규칙
            this.first = first; //생성자 내에서 이 객체의 프로퍼티를 정의
            this.Gresult = function(){
                for(i=1 ; i<10 ; i++){
                    document.write(this.first*i+'<br>');
                }
            } 
        }
        var p1 = new Gugudan(first);
        p1.Gresult();
    }
    
</script>

<?
    $aa = 100;
    $aa = $aa + 100;
    echo $aa;
?>