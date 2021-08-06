<?php
function is_pangram($kalimat)
{
    //mendefinisikan alfabet
    $alfa = range('a', 'z');
    //pisahkan lowercased string menjadi array
    $a_kalimat = str_split(strtolower($kalimat));
    //cek apakah tidak ada huruf yang ada di alfa tidak dalam kalimat
    return empty(array_diff($alfa, $a_kalimat));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <link rel="stylesheet" href="style.css">

    <title>Daily Tasks - Pangram</title>

</head>
<body>

    <div class="container mt-5">
        <div class="card">
            <h3 class="card-header">
                Pangram
            </h3>

            <div class="card-body">
               
                <div class="row-lg mt-4">
                    <div class="col-lg-5">
    
            
                        <form method="post" action="" class="form">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" 
                                        placeholder="Isi disini gan" name="input">
                            </div>
            
                            <div class="input-group-append">
                            <!-- button -->
                                <div class="input-group-append">
                                    <button class="btn btn-primary" name="proses" id="basic-addon2">
                                        Proses
                                    </button>
                                
                                </div>     
                            </div>
                            <br>
                        </form>
            
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg">
                        <?php
                            if (isset($_POST['proses'])) {
                                $coba[] = $_POST['input'];
                                $output = implode(" ", $coba);
                                
                                echo "<b>Jumlah element : </b> " . count(str_split($output)) . "<br>";

                            foreach ($coba as $txt) { echo '"', $txt, '"', "<br />"; 
                                echo is_pangram($txt) ? "<b> Ini teks Pangram </b>" : 
                                "<b> Ini bukan teks Pangram </b>", "<br />"; } } 
                        
                        ?>
                    </div>
                </div>

            </div>
        </div>
        

        

    </div>

</body>
</html>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>