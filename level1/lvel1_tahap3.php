<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="" method="post">
        <label for="">Bilangan 1 :</label>
        <input type="number" name="bil1"><br>
        <label for="">Bilangan 2 :</label>
        <input type="number" name="bil2"><br>
        <label for="">Bilangan 3 :</label>
        <input type="number" name="bil3"><br>
        <label for="">Bilangan 4 :</label>
        <input type="number" name="bil4"><br>
        <button type="submit" name="submit">kirim</button>

    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    $a = $_POST["bil1"];
    $b = $_POST["bil2"];
    $c = $_POST["bil3"];
    $d = $_POST["bil4"];
    $max = $a;

if( $b > $max ){
    $max = $b;
    echo "Nilai terbesar adalah: $b";
} elseif  ($c > $max){
    $max = $c;
    echo "Nilai terbesar adalah: $c";
   
} elseif ($d > $max) {
    $max = $d; 
    echo "Nilai terbesar adalah: $d";
}
}


?>
</body>
</html>