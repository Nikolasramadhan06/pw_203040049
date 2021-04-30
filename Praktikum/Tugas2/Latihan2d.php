<?php
// Nikolas Ramadhan
// 203040049
// https://github.com/Nikolasramadhan06/pw2021_203040049
// Jumat 10.00-11.00
?>

<?php 
    function hitungDeterminan($bilA, $bilB, $bilC, $bilD){

        // baris code perhitung determinan


        // menampilkan matriks

        $hasil = ($bilA * $bilD) - ($bilB * $bilC);

        echo "<table style='border-left:2px solid black; border-right: 2px solid black; font-size:20px;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$bilA</td>
                    <td>$bilB</td>
                </tr>
                <tr>
                    <td>$bilC</td>
                    <td>$bilD</td>
                </tr>
              </table><br>";
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d</title>
    
</head>
<body>
    <?php hitungDeterminan(1,3,2,4); ?>
</body>
</html>