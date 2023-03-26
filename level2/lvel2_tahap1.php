<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label for="">Bilangan bulat :</label>
        <input type="number" name="bilanganBulat"><br>
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<body>
    <?php 
        $bilanganBulat[100];
        $angka;
        $totalAngka;
        $angkaMax = 0;

        for ($totalAngka= 0; $totalAngka <= 100; $totalAngka++) {
            echo "masukan angka: $angka";
            $bilanganBulat[$totalAngka] = $angka;

            if ($angka > $angkaMax) {
                $angkaMax = $angka;
            } else {
                echo "";
            }
            echo "$angkaMax";
        }
    ?>
</body>
</html>