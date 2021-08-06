<?php 

include 'hulk.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daily Tasks - Hulk</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <h3 class="text-center">
                Hulk
            </h3>
       

            <div class="card-body">
                <div class="row-lg mt-4">
                    <div class="col-lg-5">
                        <form method="post" action="">
            
                            <input type="text" name="input">
                            <button class="btn btn-primary" name="hulk" type="submit">Proses</button>
        
                        </form>

                        <h2>
                            <?php
                            foreach ($array as $arr) {
                                echo $arr;
                            }
                            ?>
                        </h2>

                    </div>
                </div>
            </div>
        </div>
    </div>

    

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
