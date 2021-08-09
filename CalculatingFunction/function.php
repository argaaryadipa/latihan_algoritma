<?php 

$muncul = "";

if(isset($_POST['proses'])) {
 
    $n = $_POST['input'];
        
    if($n % 2 == 0) {
        $muncul = $n / 2;
        // $muncul = $a;
    } else {
        $muncul = (($n + 1) / 2) * (-1);
        // $muncul = $a;
    } 
    
    // $muncul = $a;
}

?>