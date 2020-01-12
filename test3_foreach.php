<h1>3. (ทดสอบ foreach)</h1>
<h2>3.1. ตอบ : 15000,20000,30000 <br>
    3.2. (ทดสอบ อาร์เรย์หลายมิติ Multidimensional array) <br>
    <?php 
    $marke = array(
        "mohammad" => array(
            "physics"=>35,
            "maths"=>30,
            "chemistry"=>39
        ),
        "qadir"=>array(
            "physics"=>30,
            "maths"=>32,
            "chemistry"=>29
        ),
        "zara"=>array(
            "physics"=>31,
            "maths"=>22,
            "chemistry"=>39
        )
    ); 
    ?>
    &nbsp; 3.2.1. ตอบ :  <?php echo $marke["mohammad"]["physics"]; ?> / $marke["mohammad"]["physics"]; <br>
    &nbsp; 3.2.2. ตอบ :
    <?php
        foreach($marke as $key => $list){
            foreach($marke[$key] as $value){
                echo $value." ";
            }
        }
    ?> <br>
            foreach($marke as $key => $list){ <br>
                &nbsp; foreach($marke[$key] as $value){ <br>
                    &nbsp; &nbsp; echo $value." "; <br>
                &nbsp;} <br>
            } 
        <br>
</h2>
