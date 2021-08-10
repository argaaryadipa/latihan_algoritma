<?php 

// $t = 2;
$muncul = "";

if(isset($_POST['proses'])) {

     
        $a = $_POST['input'];
        $b = $_POST['input2'];
        
        if($a % $b == 0) {
            $muncul = 0;
        } else {
            $n = floor ($a / $b);
            $muncul = (($n + 1) * $b - $a);
        }
    
}

?>