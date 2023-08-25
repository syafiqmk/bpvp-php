<?php 
    $i = 1;
    while($i <= 10) {
        echo "Baris $i<br>";
        $i++;
    }
    echo "<hr>";

    $i = 10;
    while($i >= 1) {
        echo "Baris $i<br>";
        $i--;
    }
    echo "<hr>";

    $loop = 10;
    $i = 0;
    while($i <= $loop) {
        if(($i % 2) == 0) {
            echo $i;
            echo ($i < $loop) ? ", " : '';
        }
        $i++;
    }
    echo "<hr>";

    $i = 1;
    while($i <= 10) {
        echo ($i != 5) ? "$i<br>" : '';
        $i++;
    }
    echo "<hr>";

    $ayam = 10;
    while($ayam >= 1) {
        if($ayam > 1) {
            echo "Anak ayam turun $ayam, mati 1 tinggal ". ($ayam - 1) ."<br>";
        } else {
            echo "Anak ayam turun $ayam, mati 1 tinggal induknya";
        }
        $ayam--;
    }
    echo "<hr>";

    $i = 0;
    while($i <= 100) {
        echo "$i<br>";
        $i += 10;// $i = $i + 10
    }
    echo "<hr>";
?>