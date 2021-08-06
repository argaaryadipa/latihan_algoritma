<?php 

$array[]="";

if(isset($_POST['hulk'])) {
    $n = $_POST['input'];

    while($n)
    {
        for ($i=1; $i <= $n; $i++) { 
            if($i%2) {
                $array[]='I hate ';
            } else {
                $array[]='I love ';
            }
    
            if($i == $n) {
                $array[]='it' . "<br>";
            } else {
                $array[]='that ';
            }
        }
    
        return 0;
    }

    var_dump($array);

}


?>