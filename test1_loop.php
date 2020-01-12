<h1>1. (ทดสอบ Loop) จงเขียนโปรแกรมให้แสดงดังภาพต่อไปนี้ (ใช้ภาษา PHP และวงกลมคือตัวอักษร O )</h1>
<h2>
    1.1. ตอบ : <br>
<?php 
    for($i = 1 ; $i <= 5 ; $i++ ){
        for($s = 5 ; $s > $i; $s--){
            echo "&nbsp;&nbsp; \n";
        }
        for($a = 1 ; $a <= $i ; $a++){
            echo "o \n";
        }
        echo "<br>";
    }
    echo "----------------------<br>";
?>
1.2. ตอบ : <br>
<?php
    for($i = 1 ; $i <= 5 ; $i++ ){
        for($s = 5 ; $s > $i; $s--){
            echo "&nbsp;&nbsp; \n";
        }
        for($a = 1 ; $a <= $i ; $a++){
            echo "o \n";
        }
        for($a = 2 ; $a <= $i ; $a++){
            echo "o \n";
        }
        echo "<br>";
    }
    echo "----------------------<br>";
?>
</h2>

