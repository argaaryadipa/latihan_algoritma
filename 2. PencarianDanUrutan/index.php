<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pencarian dan Urutan</title>

    <style type="text/css">
        body {
            font-family: sans-serif;
            background-color: cornsilk;
        }

        h3 {
            text-align: center;
            margin-bottom: 100px;
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        button {
            margin-top: 15px;

        }

        input[type='text'] {
            width: 150px;
            position: center;
        }

        h2 {
            text-align: center;
            font-size: larger;
            margin-top: 50px;
            /* color: darkgrey; */
        }
    </style>

</head>

<body>

    <h2>
        Pencarian dan Urutan
    </h2>

    <form action="" method="post">
        Input Angka :
        <input type="text" name="angka">
        <br>
        <button type="submit" name="submit">
            Mulai
        </button>
    </form>
    <br>

    <?php if (isset($_POST['submit'])) : ?>
        <h3>
            <?php

            $angka = $_POST['angka'];

            $hasil = str_split($angka);
            rsort($hasil);


            // Descending

            foreach ($hasil as $data) {
                echo $data . " ";
            }

            echo "<br>";

            echo "-----Descending-----";

            echo "<br>";
            echo "<br>";

            sort($hasil);

            // End Descending

            // --------------------------------------------------------------

            // Ascending

            foreach ($hasil as $data) {
                echo $data . " ";
            }
            echo "<br>";

            echo "-----Ascending-----";

            echo "<br>";
            echo "<br>";

            // End Ascending

            // --------------------------------------------------------------

            // Sisa bagi dari nilai Ascending

            foreach ($hasil as $data) {
                $sisa = $data % 2;
                echo $sisa . " ";
            }
            echo "<br>";

            echo "-----Sisa Bagi Ascending-----";

            echo "<br>";
            echo "<br>";

            // End Sisa Bagi

            // --------------------------------------------------------------

            // Bilangan prima

            foreach ($hasil as $data) {
                $counter = 0;
                for ($j = 1; $j <= $data; $j++) {

                    if ($data % $j == 0) {

                        $counter++;
                    }
                }
                if ($counter == 2) {

                    echo $data . " ";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
            echo "-----Bilangan Prima-----";

            // End Bilangan Prima

            ?>
        </h3>

    <?php endif; ?>

</body>

</html>