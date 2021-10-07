<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        * {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>
<body>
    <?php
    $nama = "Sharifah Syahirah";
    echo $nama [0]; 
    echo $nama [1];
    echo $nama [2];
    ?>
    <hr>

    <?php
    //bermaksud satu variable pegang 3 value
    $pelajar[0] = 'Sharifah';
    $pelajar[1] = 'Syahirah';
    $pelajar[2] = 'Shamshudin';
    
    for($x = 0; $x < 3; $x++){
        echo $pelajar[$x] . ' '; //untuk nak bagi ada space antara nama
    }
    echo '<hr';//line untuk pisahkan

    #foreach
    foreach ($pelajar as $pel) {
        echo $pel . ' '; //paparkan balik nama. Bezanya foraech tak tahu panjang berapa
    }
    echo '<hr>';

    #implode @ join()
    $pelajars = implode(' ', $pelajar);
    echo $pelajars;
    echo '<hr>';

    #explode() //pecahkan berdasarkan apa contohnya koma
    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDIN';
    $kata = explode(' ', $ptss); 
    echo $kata[2];
    echo '<hr>';

    $senarai = 'Ali, Abu, Adi, Man, Din';
    $ahli = explode(',', $senarai);
    echo '<pre>', print_r($ahli), '<pre>'; //susun value array ke bawah
    ?>

    <ol>
        <?php
        foreach($ahli as $nama) {
            echo "<li>$nama</li>";
        }
        ?>
    </ol>
    <hr>

   
    <?php
     #stringcompare(strcmp)
    $citacita = 'Businesswoman';
    echo strcmp($citacita, 'Businesswoman');exit;
    if(strcmp($citacita, 'Businesswoman') == ) {
        echo 'Sama';
    } elseif ($hasil < 0) {
        echo 'Kurang';
    } else {
        echo 'Lebih';
    }
    ?>
    
</body>
</html>