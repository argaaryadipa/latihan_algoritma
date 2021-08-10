<?php 

$muncul = "";

if(isset($_POST['proses'])) {

    $n = $_POST['input'];

    if ($n % 2 == 0) {
        $muncul = ($n - 4) . " 4";
    } else {
        $muncul = ($n - 9) . " 9";
    }
}




?>