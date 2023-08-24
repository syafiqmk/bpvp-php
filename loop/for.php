<?php 
    for ($i=0; $i < 10; $i++) {
        $baris = $i + 1;
        echo "$baris. Saya sedang belajar looping<br>";
    }
    
    echo "<hr>";
    for ($i=10; $i >= 1; $i--) {
        echo "$i <br>";
    }

    echo "<hr>";
    $loop = 100;
    for ($i=0; $i <= $loop; $i++) {
        if(($i % 2) == 0) {
            echo "$i";
            echo ($i < $loop) ? ", " : '';
        }
    }

    echo "<hr>";
    for($i = 1; $i <= 10; $i++) {
        echo ($i != 5) ? "$i<br>" : "";
    }

    echo "<hr>";
    for($i = 10; $i > 0; $i--) {
        if($i != 1) {
            echo "~~~~ Anak ayam turun $i, mati 1 tinggal ". ($i - 1) . " ~~~~<br>";
        } else {
            echo "~~~~ Anak ayam turun 1, mati 1 tinggal induknya ~~~~";
        }
    }
    
    // echo "<hr>";
    // for($i = 1; $i <= 10; $i++) {
    //     for($j = 1; $j <= $i; $j++) {
    //         echo $j;
    //     }
    //     echo "<br>";
    // }
?>