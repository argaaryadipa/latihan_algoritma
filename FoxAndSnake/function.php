<?php 

$muncul[] = "";


if(isset($_POST['proses'])) {
    $n = $_POST['input'];
    $m = $_POST['input2'];

    for ($i=1; $i <= $n ; $i++) { 

        for ($j=1; $j <= $m ; $j++) { 

            if($i % 2) {
                $muncul[] = "#";
            } else if($i % 4 == 0) {
                if($j == 1) {
                    $muncul[] = "#";
                } else {
                    $muncul[] = ".";
                }
            } else {
                if($j == $m) {
                    $muncul[] = "#";
                } else {
                    $muncul[] = ".";
                }
            }

        }
        $muncul[] = "<br>";
    }
}

?>