<?php 
    // echo "Hello World!!";

    // Variable
    // String
    $name = "Budi";
    $kelamin = 'Laki-laki';
    // Integer
    $age = 25;
    // Float
    $berat = 90.5;
    $jarak = 7.3;
    // Boolean
    $lulus = false;

    echo "Nama : $name <br> Umur : $age <br> Kelamin : $kelamin <br> Berat badan : $berat Kg";
    echo "<hr>";
    echo "Jarak rumah $name ke BPVP Samarinda adalah $jarak KM <br>";
    if($lulus == true) {
        echo "Selamat anda LULUS!!<br>";
    } else {
        echo "GK LULUS AWOKWOWK<br>";
    }
    echo "<hr>";

    // Operator Aritmatika
    $n1 = 10;
    $n2 = 5;
    $total = $n1 + $n2;
    $rata = $total / 2;

    echo "Nilai : $total<br>";
    echo "Nilai Rata-rata: $rata<br>";
    // refactor yg atas
    $n1 += 5;
    echo "$total <br>";

    // modulus
    echo "<hr>";
    echo $total % 2;

    // increment decrement
    echo "<br><hr>";
    echo $total. "<br>";
    $total++;
    echo $total. "<br>";
    $total--;
    $total--;
    echo $total. "<br>";

    echo "<hr>";
    $a = '70';
    $b = 10;
    $c = $a / $b;
    echo $c;

?>