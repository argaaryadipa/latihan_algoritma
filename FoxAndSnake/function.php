<?php 

$muncul = "";

if(isset($_POST['proses'])) {
    for ($i=1; $i <= 1 ; $i++) { 
        for ($j=1; $j <= 1 ; $j++) { 
            if(($i % 2) != 0) {
                $muncul = "#";
            }
        }
    }
}

?>